<?php
class ParserColorRomanuke implements Parser
{
    public function getInfo($post_array)
    {
        $count = $post_array['count'];
        unset($post_array['count']);
        foreach ($post_array as $v){
            $color_id[] = $v;
        }
        $count_pages = $count / 8;
        if (is_float($count_pages)){
            $count_pages = intval($count_pages) + 1;
        }

        //ссылка при выборе одного цвета http://color.romanuke.com/category/krasnyiy/
        for ($page = 1; $page <= $count_pages; $page++) {

            $url = 'http://color.romanuke.com/page/' . $page . '/?color1=' . $color_id[0] . '&color2=8#038;color2=' . $color_id[1];
            file_put_contents(PATH . '/tmp/color_rom_last_url.txt', $url);
            $html = file_get_contents($url);
            /*
             * в регулярке написано .{1,3}, чтоб пропустить рекламный блок
             * */
            preg_match_all('/<div class="boxpalette">.{1,3}<a class="vis-desk" href="(.*)"><img width="400" height="400" src="(.*)"(.*)<h3>(.*)<\/h3>/Uis', $html, $data);

            $i = 0;
            /*
             * если общее количество блоков меньше заданного  и количество блоков на данной странице меньше 8
             * */
            while ($i < 8):
                if ($data[2][$i] == null) {
                    $i++;
                    continue;
                }
                $ar_img = ['h3' => $data[4][$i], 'img_src' => $data[2][$i]];
                $ar[] = $ar_img;
                $i++;
                if(count($ar) >= $count)break; // если набралось нужное количество блоков
            endwhile;
            if ($page == $count_pages && count($ar) < $count) $count_pages++;
        }

        FileHelper::arrayToFile($ar, 'tmp/color_rom.json');

        return $ar;
    }

    public function updateInfo($post_array)
    {
        //получаем массив с данными
        $ar = FileHelper::fileToArray('tmp/color_rom.json');

        //это понадобится потом
        $count_total = count($ar);

        $last_h3 = end($ar)['h3'];

        //удаляем элементы
        unset($post_array['updateInfo']);

        foreach ($post_array as $k => $v){
           unset($ar[$k]);
        }

        //сортируем массив
        sort($ar);


        //считаем количество недостающих элементов
        $count = $count_total - count($ar);

        //отправляем запрос и собираем нехватающее кол-во элементов // после с возможностью не посылать запросы
        $last_url = file_get_contents(PATH . '/tmp/color_rom_last_url.txt');//переделать
        $html = file_get_contents($last_url);

        $html = substr($html, strpos($html, $last_h3 ));//нашли часть, после последнего заголовка
//до этого момента всё норм
        preg_match_all('/<div class="boxpalette">.{1,3}<a class="vis-desk" href="(.*)"><img width="400" height="400" src="(.*)"(.*)<h3>(.*)<\/h3>/Uis', $html, $data);


        $i=0;
        while ($i < count($data[2])):
            if ($data[2][$i] == null) {
                $i++;
                continue;
            }
            $ar_img = ['h3' => $data[4][$i], 'img_src' => $data[2][$i]];
            $ar[] = $ar_img;
            $i++;
            if(count($ar) == $count_total)break; // если набралось нужное количество блоков
        endwhile;

//эта часть не тестировалась, но тоже должна работать
        if(count($ar) < $count_total){
            $url = $this->nextPage($html);
            $html = file_get_contents($url);
            preg_match_all('/<div class="boxpalette">.{1,3}<a class="vis-desk" href="(.*)"><img width="400" height="400" src="(.*)"(.*)<h3>(.*)<\/h3>/Uis', $html, $data);
            $i=0;
            while ($i < count($data[2])):
                if ($data[2][$i] == null) {
                    $i++;
                    continue;
                }
                $ar_img = ['h3' => $data[4][$i], 'img_src' => $data[2][$i]];
                $ar[] = $ar_img;
                $i++;
                if(count($ar) == $count_total)break; // если набралось нужное количество блоков
            endwhile;
        }

        FileHelper::arrayToFile($ar, 'tmp/color_rom.json');

        //записываем в массив и загружаем массив
        return $ar;
    }

    private function nextPage($html)
    {
        preg_match('/page-numbers current(.*)href=\'(.*)\'>/Uis', $html,$data);

        $url = $data[2];

        return $url;
    }
}