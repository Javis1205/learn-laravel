<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Mission0000Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testComposer()
    {
        // Composer version 1.1.1 2016-05-17 12:25:44
        $composer_version = exec('composer --version');
        $matched = preg_match('/Composer\sversion\s\d+\.\d+\.\d+.*/', $composer_version);
        echo $composer_version;
        $this->assertTrue($matched == 1, "Phải cài Composer và biến môi trường để hệ thống nhận lệnh 'composer --version'");
    }
    public function testNpm()
    {
        // Composer version 1.1.1 2016-05-17 12:25:44
        $composer_version = exec('npm -v');
        $matched = preg_match('/\d+\.\d+\.\d+/', $composer_version);
        echo $composer_version;
        $this->assertTrue($matched == 1, "Phải cài Npm và biến môi trường để hệ thống nhận lệnh 'npm -v'");
    }
    public function testNodeJs()
    {
        // Composer version 1.1.1 2016-05-17 12:25:44
        $composer_version = exec('node -v');
        $matched = preg_match('/\d+\.\d+\.\d+/', $composer_version);
        echo $composer_version;
        $this->assertTrue($matched == 1, "Phải cài Nodejs và biến môi trường để hệ thống nhận lệnh 'node -v'");
    }
    public function testGulp()
    {
        // Composer version 1.1.1 2016-05-17 12:25:44
        $composer_version = exec('gulp -v');
        $matched = preg_match('/\d+\.\d+\.\d+/', $composer_version);
        echo $composer_version;
        $this->assertTrue($matched == 1, "Bạn phải cài gulp global để hệ điều hành nhận lệnh `gulp -v`");
    }
    public function testGulpCompile(){
        $exists = \File::exists(public_path('test/gulp.txt'));
        $this->assertTrue($exists, "Gulp chưa cài đặt đúng. Nếu bạn đã cài đúng vui lòng chạy `gulp` trước khi chạy test");
    }
}
