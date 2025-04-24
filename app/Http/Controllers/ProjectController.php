<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'MED-4U',
                'description' => 'เว็บไซต์ให้ความรู้ทางการแพทย์ พัฒนาระหว่างฝึกงาน โดยมีระบบแสดงข้อมูลบทความทางการแพทย์ สินค้า ข่าวสาร โปรโมชัน รองรับ 5 ภาษา (ไทย อังกฤษ จีน ญี่ปุ่น อาหรับ)',
                'tech' => 'PHP, HTML, Bootstrap, jQuery, MySQL, Multi-language',
                'link' => 'https://med-4u.com',
                'image' => '/images/projects/pic_med4u.png'
            ],
            [
                'title' => 'ระบบจัดการฟาร์ม',
                'description' => 'ระบบจัดการฟาร์มเป็นเว็บแอปพลิเคชันที่พัฒนาเพื่อช่วยให้เจ้าของฟาร์มสามารถบริหารจัดการข้อมูลต่าง ๆ ภายในฟาร์มได้อย่างมีประสิทธิภาพ โดยระบบมีฟังก์ชันหลัก เช่น การจัดการข้อมูลสัตว์ การให้อาหาร การฉีดวัคซีน รวมถึงการจัดการฟาร์ม และผู้ใช้งาน พร้อมระบบการเข้าสู่ระบบ (Login) และสมัครสมาชิก (Register) เพื่อแยกสิทธิ์การใช้งานระหว่าง ผู้ดูแลระบบ (Admin) และ สมาชิกฟาร์ม (User)',
                'tech' => 'PHP, Bootstrap, MySQL, HTML, QRServer-API',
                'link' => '...',
                'image' => '/images/projects/pic_myfarm.png'
            ],
            [
                'title' => 'Smart Dashboard',
                'description' => 'Smart Dashboard เป็นเว็บแอปพลิเคชันที่ออกแบบมาเพื่อช่วยอำนวยความสะดวกในชีวิตประจำวัน โดยมีฟีเจอร์หลัก ได้แก่ ตรวจสอบอากาศ สร้าง QR Code และ Bar Code',
                'tech' => 'HTML5, CSS, Bootstrap 5, JavaScript, API จาก OpenWeather',
                'link' => '..',
                'image' => '/images/projects/pic_SmartDashboard.png'
            ]
        ];

        return view('pages.projects', compact('projects'));
    }
}
