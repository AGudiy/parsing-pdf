<?php
class ParserColorRomanuke implements Parser
{
    public function getInfo($color1_id = 7, $color2_id = 8, $count = 11)
    {
        $count_pages = $count / 8;
        if (is_float($count_pages)){
            $count_pages = intval($count_pages) + 1;
        }

        //ссылка при выборе одного цвета http://color.romanuke.com/category/krasnyiy/
        for ($page = 1; $page <= $count_pages; $page++) {

            $url = 'http://color.romanuke.com/page/' . $page . '/?color1=' . $color1_id . '&color2=8#038;color2=' . $color2_id;
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

        return $ar;
    }

    public function updateInfo()
    {
        // TODO: Implement updateInfo() method.
    }
}