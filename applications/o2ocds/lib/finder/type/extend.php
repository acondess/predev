<?php
// +----------------------------------------------------------------------
// | VMCSHOP [V M-Commerce Shop]
// +----------------------------------------------------------------------
// | Copyright (c) vmcshop.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.vmcshop.com/licensed)
// +----------------------------------------------------------------------
// | Author: Shanghai ChenShang Software Technology Co., Ltd.
// +----------------------------------------------------------------------
class o2ocds_finder_type_extend
{
    public function __construct(){
        $mode = app::get('o2ocds') ->getConf('mode');
        if($mode ==1 ){
            $this ->column_edit1 = '一级分佣';
            $this ->column_edit2 = '二级分佣';
        }
        if($mode ==2){
            $member_lv = app::get('b2c')->model('member_lv')->getList("*", array('disabled' => 'false'), 0, -1,
                'experience ASC');
            foreach($member_lv as $k=>$v){
                $fun = 'column_editlv'.$k;
                $this ->$fun = $v['name'];
            }
        }

    }

    function column_edit1($row)
    {
        if (isset($row['@row'])) {
            $row = $row['@row'];
        }
        $pkey = $row['type_id'];
        $o2ocds = $row['o2ocds_value'];
        $_return = <<<HTML
            <input class='form-control edit-col input-sm input-xsmall' name="o2ocds_value[first]" type='text' data-pkey='$pkey' value='$o2ocds[first]'>
HTML;

        return $_return;

    }

    function column_edit2($row)
    {
        if (isset($row['@row'])) {
            $row = $row['@row'];
        }
        $pkey = $row['type_id'];
        $o2ocds = $row['o2ocds_value'];

        $_return = <<<HTML
            <input class='form-control edit-col input-sm input-xsmall' name="o2ocds_value[second]" type='text' data-pkey='$pkey' value='$o2ocds[second]'>
HTML;

        return $_return;

    }

    function column_editlv0($row){
        if (isset($row['@row'])) {
            $row = $row['@row'];
        }
        $pkey = $row['type_id'];
        $lv_o2ocds_value = $row['lv_o2ocds_value'];

        $_return = <<<HTML
            <input class='form-control edit-col input-sm input-xsmall' name="lv_o2ocds_value[lv0]" type='text' data-pkey='$pkey' value='$lv_o2ocds_value[lv0]'>
HTML;

        return $_return;
    }

    function column_editlv1($row){
        if (isset($row['@row'])) {
            $row = $row['@row'];
        }
        $pkey = $row['type_id'];
        $lv_o2ocds_value = $row['lv_o2ocds_value'];

        $_return = <<<HTML
            <input class='form-control edit-col input-sm input-xsmall' name="lv_o2ocds_value[lv1]" type='text' data-pkey='$pkey' value='$lv_o2ocds_value[lv1]'>
HTML;

        return $_return;
    }

    function column_editlv2($row){
        if (isset($row['@row'])) {
            $row = $row['@row'];
        }
        $pkey = $row['type_id'];
        $lv_o2ocds_value = $row['lv_o2ocds_value'];

        $_return = <<<HTML
            <input class='form-control edit-col input-sm input-xsmall' name="lv_o2ocds_value[lv2]" type='text' data-pkey='$pkey' value='$lv_o2ocds_value[lv2]'>
HTML;

        return $_return;
    }

    function column_editlv3($row){
        if (isset($row['@row'])) {
            $row = $row['@row'];
        }
        $pkey = $row['type_id'];
        $lv_o2ocds_value = $row['lv_o2ocds_value'];

        $_return = <<<HTML
            <input class='form-control edit-col input-sm input-xsmall' name="lv_o2ocds_value[lv3]" type='text' data-pkey='$pkey' value='$lv_o2ocds_value[lv3]'>
HTML;

        return $_return;
    }

    function column_editlv4($row){
        if (isset($row['@row'])) {
            $row = $row['@row'];
        }
        $pkey = $row['type_id'];
        $lv_o2ocds_value = $row['lv_o2ocds_value'];

        $_return = <<<HTML
            <input class='form-control edit-col input-sm input-xsmall' name="lv_o2ocds_value[lv4]" type='text' data-pkey='$pkey' value='$lv_o2ocds_value[lv4]'>
HTML;

        return $_return;
    }

    public function row_style($row)
    {
    }
}