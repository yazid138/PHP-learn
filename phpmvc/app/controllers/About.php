<?php

class About
{
    public function index($nama = 'Yazid', $pekerjaan = 'Murid')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan.";
    }

    public function page()
    {
        echo 'About/page';
    }
}
