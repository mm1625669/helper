<?php

namespace Wfh\Helper\Src;

class Common
{
    // 获取指定日期所在月的开始日期与结束日期
    public function get_month_range($timestamp)
    {
        $ret = array();
        $mdays = date('t', $timestamp);
        $ret['sdate'] = strtotime(date('Y-m-1 00:00:00', $timestamp));
        $ret['edate'] = strtotime(date('Y-m-' . $mdays . ' 23:59:59', $timestamp));
        return $ret;
    }

}