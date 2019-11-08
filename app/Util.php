<?php

namespace App;

use voku\helper\HtmlDomParser;

class Util
{
    public static function getGraphsData($point_info, $type)
    {
        $url  = "http://{$point_info->host}:{$point_info->port}/graphs/iface/{$point_info->iface}/";
        $html = file_get_contents($url);
        $dom  = HtmlDomParser::str_get_html($html);

        $traffic  = [];
        $elements = $dom->findMulti('.box h3');
        foreach ($elements as $key => $value) {
            $traffic[$key]['title'] = str_replace(["\"", "Daily", "Weekly", "Monthly", "Yearly", "Minute", "Hour", "Day", "Average", " ", "Graph"], ["", "每天", "每周", "每月", "每年", "分钟", "小时", "天", "/平均", "", "视图"], $value->textContent);
        }

        $elements = $dom->findMulti('.box p');
        foreach ($elements as $key => $value) {
            // $desc                  = str_replace(["Max ", 'Average ', 'Current ', 'In', 'Out', "\n    \n"], ['最高', '平均', '当前', '传入', '传出', "<br />"], $value->textContent);
            $desc = str_replace([" In", " Out", " "], "", $value->textContent);
            $desc = explode("\n", $desc);
            $desc = array_filter($desc);
            foreach ($desc as $line => $val) {
                $val = array_filter(explode(";", $val));
                foreach ($val as $k => $v) {
                    $v          = explode(":", $v);
                    $val[strtolower($v[0])] = $v[1];
                    unset($val[$k]);
                }
                $desc[$line] = $val;
            }

            // $traffic[$key]['desc'] = implode("<br />", $desc);
            $traffic[$key]['desc'] = array_values($desc);
        }

        $elements = $dom->findMulti('.box img');
        foreach ($elements as $key => $value) {
            $traffic[$key]['img'] = route('graph_img', ['type' => $type, 'id' => $point_info->id, 'name' => str_replace('.gif', '', $value->src)]);
        }
        return $traffic;
    }
}
