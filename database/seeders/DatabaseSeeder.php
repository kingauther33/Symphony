<?php

namespace Database\Seeders;

use Exception;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

require_once 'vendor/autoload.php';

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
//        $min = strtotime('1980-01-01');
//        $max = strtotime('1999-31-31');
        $numberPrefixes = ['0812', '0813', '0814', '0815', '0816', '0817', '0818', '0819', '0909', '0908'];
        $faker = Factory::create('vi_VN');

        DB::table('users')->insert([
            // Counselors
            [
                'id' => 1,
                'email' => 'counsel1@gmail.com',
                'password' => 'counsel1',
                'role_id' => 1,
            ],
            [
                'id' => 2,
                'email' => 'counsel2@gmail.com',
                'password' => 'counsel2',
                'role_id' => 1,
            ],
            [
                'id' => 3,
                'email' => 'counsel3@gmail.com',
                'password' => 'counsel3',
                'role_id' => 1,
            ],
            [
                'id' => 4,
                'email' => 'counsel4@gmail.com',
                'password' => 'counsel4',
                'role_id' => 1,
            ],
            [
                'id' => 5,
                'email' => 'counsel5@gmail.com',
                'password' => 'counsel5',
                'role_id' => 1,
            ],
            [
                'id' => 6,
                'email' => 'counsel6@gmail.com',
                'password' => 'counsel6',
                'role_id' => 1,
            ],
            [
                'id' => 7,
                'email' => 'counsel7@gmail.com',
                'password' => 'counsel7',
                'role_id' => 1,
            ],
            [
                'id' => 8,
                'email' => 'counsel8@gmail.com',
                'password' => 'counsel8',
                'role_id' => 1,
            ],
            // Training Departments
            [
                'id' => 9,
                'email' => 'training1@gmail.com',
                'password' => 'training1',
                'role_id' => 2,
            ],
            [
                'id' => 10,
                'email' => 'training2@gmail.com',
                'password' => 'training2',
                'role_id' => 2,
            ],
            [
                'id' => 11,
                'email' => 'training3@gmail.com',
                'password' => 'training3',
                'role_id' => 2,
            ],
            // Teachers
            [
                'id' => 12,
                'email' => 'teacher1@gmail.com',
                'password' => 'teacher1',
                'role_id' => 3,
            ],
            [
                'id' => 13,
                'email' => 'teacher2@gmail.com',
                'password' => 'teacher2',
                'role_id' => 3,
            ],
            [
                'id' => 14,
                'email' => 'teacher3@gmail.com',
                'password' => 'teacher3',
                'role_id' => 3,
            ],
            [
                'id' => 15,
                'email' => 'teacher4@gmail.com',
                'password' => 'teacher4',
                'role_id' => 3,
            ],
            // Students
            [
                'id' => 16,
                'email' => 'student1@gmail.com',
                'password' => 'student1',
                'role_id' => 4,
            ],
            [
                'id' => 17,
                'email' => 'student2@gmail.com',
                'password' => 'student2',
                'role_id' => 4,
            ],
            [
                'id' => 18,
                'email' => 'student3@gmail.com',
                'password' => 'student3',
                'role_id' => 4,
            ],
            [
                'id' => 19,
                'email' => 'student4@gmail.com',
                'password' => 'student4',
                'role_id' => 4,
            ],
            [
                'id' => 20,
                'email' => 'student5@gmail.com',
                'password' => 'student5',
                'role_id' => 4,
            ],
            [
                'id' => 21,
                'email' => 'student6@gmail.com',
                'password' => 'student6',
                'role_id' => 4,
            ]
        ]);

        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'Counselor'
            ],
            [
                'id' => 2,
                'name' => 'Training Department'
            ],
            [
                'id' => 3,
                'name' => 'Teacher'
            ],
            [
                'id' => 4,
                'name' => 'Student'
            ],
        ]);

        DB::table('counselors')->insert([
//            [
//                'fname' => $faker->firstName(),
//                'lname' => $faker->lastName(),
//                'email' => $faker->email(),
//                'password' => Hash::make('password'),
//                'dob' => date('Y-m-d', rand($min, $max)),
//                'phone' => $numberPrefixes[array_rand($numberPrefixes)] . $this->randomNumberSequence()
//            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
//                'email' => $faker->email(),
//                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber(),
                'user_id' => 1
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
//                'email' => $faker->email(),
//                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber(),
                'user_id' => 2
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
//                'email' => $faker->email(),
//                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber(),
                'user_id' => 3
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
//                'email' => $faker->email(),
//                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber(),
                'user_id' => 4
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
//                'email' => $faker->email(),
//                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber(),
                'user_id' => 5
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
//                'email' => $faker->email(),
//                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber(),
                'user_id' => 6
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
//                'email' => $faker->email(),
//                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber(),
                'user_id' => 7
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
//                'email' => $faker->email(),
//                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber(),
                'user_id' => 8
            ]
        ]);

        DB::table('grades')->insert([
            [
                'teacher_id' => 1,
                'course_id' => 1,
                'year' => 2019,
                'name' => 'T2019M',
                'description' => 'Lop Hoc Co Thi'
            ],
            [
                'teacher_id' => 1,
                'course_id' => 2,
                'year' => 2020,
                'name' => 'T2020N',
                'description' => 'Lop Hoc Co Thi Ver2',
            ],
            [
                'teacher_id' => 2,
                'course_id' => 1,
                'year' => 2020,
                'name' => 'T2020N',
                'description' => 'Lop Hoc Co Ha',
            ],
            [
                'teacher_id' => 1,
                'course_id' => 3,
                'year' => 2019,
                'name' => 'T2019A',
                'description' => 'Lop Hoc Co Thi Ver3',
            ],
            [
                'teacher_id' => 1,
                'course_id' => 2,
                'year' => 2020,
                'name' => 'T2020M',
                'description' => 'Lop Hoc Co Thi Ver2',
            ]
        ]);

        DB::table('subjects')->insert([
            [
                'course_id' => 1,
                'acronym' => 'ADCP',
                'name' => 'An Di Ci Pee'
            ],
            [
                'course_id' => 1,
                'acronym' => 'AILE',
                'name' => 'An In Lieu Eiu'
            ],
            [
                'course_id' => 2,
                'acronym' => 'BMEI',
                'name' => 'Bi Mu En Ieu'
            ],
            [
                'course_id' => 2,
                'acronym' => 'KMIJ',
                'name' => 'Khong Mua Ieu Jieu'
            ],
            [
                'course_id' => 3,
                'acronym' => 'KEUJ',
                'name' => 'Keu Eun Uoi Jeu'
            ],
            [
                'course_id' => 3,
                'acronym' => 'KFJM',
                'name' => 'Ka Fe Ji Man'
            ],
        ]);

        DB::table('courses')->insert([
            [
                'name' => 'Khoa hoc co ban (4 thang)',
                'summary' => 'Ban se nam bat duoc tat ca nhung thu co ban ve code',
                'image_path' => 'popular_sub1.png'
            ],
            [
                'name' => 'Khoa hoc nang cao (6 thang)',
                'summary' => 'Ban se nam bat duoc nhung thu nang cao ve code',
                'image_path' => 'popular_sub2.png'
            ],
            [
                'name' => 'Khoa hoc master (12 thang)',
                'summary' => 'Ban se dung duoc cac framework, hieu duoc co ban va nang cao ve code',
                'image_path' => 'popular_sub3.png'
            ]
        ]);

        DB::table('training_departments')->insert([
            [
                'avatar' => 'avatar-0.png',
//                'email' => 'tungtran102@fpt.edu.vn',
//                'password' => $faker->password,
                'fname' => 'Tran',
                'lname' => 'Tung',
                'dob' => $faker->dateTimeBetween('-50 years', '-40 years'),
                'phone' => $faker->phoneNumber,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 9
            ],
            [
                'avatar' => 'avatar-1.png',
//                'email' => 'toanngo123@fpt.edu.vn',
//                'password' => $faker->password,
                'fname' => 'Ngo',
                'lname' => 'Toan',
                'dob' => $faker->dateTimeBetween('-50 years', '-40 years'),
                'phone' => $faker->phoneNumber,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 10
            ],
            [
                'avatar' => null,
//                'email' => 'thieutoan123@fpt.edu.vn',
//                'password' => $faker->password,
                'fname' => 'Thieu',
                'lname' => 'Toan',
                'dob' => $faker->dateTimeBetween('-50 years', '-40 years'),
                'phone' => $faker->phoneNumber,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 11
            ],

        ]);

        DB::table('exams')->insert([
            [
                'exam_type_id' => 1,
                'training_department_id' => 1,
                'subject_id' => 1,
                'start_date' => '2021-01-15',
            ],
            [
                'exam_type_id' => 1,
                'training_department_id' => 1,
                'subject_id' => 2,
                'start_date' => '2021-01-30',
            ],
            [
                'exam_type_id' => 2,
                'training_department_id' => 1,
                'subject_id' => 1,
                'start_date' => '2021-02-08',
            ],
            [
                'exam_type_id' => 1,
                'training_department_id' => 2,
                'subject_id' => 3,
                'start_date' => '2020-12-24',
            ],
            [
                'exam_type_id' => 2,
                'training_department_id' => 1,
                'subject_id' => 2,
                'start_date' => '2021-03-21',
            ],
            [
                'exam_type_id' => 2,
                'training_department_id' => 1,
                'subject_id' => 1,
                'start_date' => '2021-02-11',
            ],
            [
                'exam_type_id' => 1,
                'training_department_id' => 2,
                'subject_id' => 3,
                'start_date' => '2021-04-01',
            ]
        ]);

        DB::table('exam_types')->insert([
            [
                'name' => 'Bai kiem tra giua ki',
            ],
            [
                'name' => 'Bai kiem tra cuoi ki',
            ]
        ]);

        DB::table('students')->insert([
            [
                'avatar' => 'avatar-0.png',
                'grade_id' => 1,
//                'email' => $faker->email(),
//                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 1,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 16
            ],
            [
                'avatar' => 'avatar-1.png',
                'grade_id' => 1,
//                'email' => $faker->email(),
//                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 1,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 17
            ],
            [
                'avatar' => null,
                'grade_id' => 1,
//                'email' => $faker->email(),
//                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 2,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 18
            ],
            [
                'avatar' => 'avatar-2.png',
                'grade_id' => 2,
//                'email' => $faker->email(),
//                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 2,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 19
            ],
            [
                'avatar' => null,
                'grade_id' => 3,
//                'email' => $faker->email(),
//                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 1,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 20
            ],
            [
                'avatar' => null,
                'grade_id' => 3,
//                'email' => $faker->email(),
//                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 3,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 21
            ],
        ]);

        DB::table('teachers')->insert([
            [
                'avatar' => 'team1.png',
//                'email' => $faker->email(),
//                'password' => $faker->password(),
                'fname' => 'Dang Kim',
                'lname' => 'Thi',
                'dob' => $faker->dateTimeBetween('-50 years', '-30 years'),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address,
                'specialty' => 'Mainly Back-end',
                'comment' => 'Students like the interactive games to practice reading and writing. As a teacher, I
                    love the correlation to standards, and that I am able to see the progress and struggles my students
                    have in obtaining skills.',
                'last_login_date' => $faker->dateTimeBetween('-1 years', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 12
            ],
            [
                'avatar' => 'team2.png',
//                'email' => $faker->email(),
//                'password' => $faker->password(),
                'fname' => 'Le Thi',
                'lname' => 'Ha',
                'dob' => $faker->dateTimeBetween('-50 years', '-30 years'),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address,
                'specialty' => 'Mainly Front-end',
                'comment' => 'OnlineEdu.com has been an invaluable aid to me in teaching my children from home, no matter what
                    the grade level. It\'s so quick and easy to look for and download specifically what I need in a moment,
                    and at a most reasonable cost.',
                'last_login_date' => $faker->dateTimeBetween('-1 years', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 13
            ],
            [
                'avatar' => 'team3.png',
//                'email' => $faker->email(),
//                'password' => $faker->password(),
                'fname' => 'Vuong Van',
                'lname' => 'Vu',
                'dob' => $faker->dateTimeBetween('-50 years', '-30 years'),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address,
                'specialty' => 'Front-end and Back-end',
                'comment' => 'Students like the interactive games to practice reading and writing. As a teacher, I
                    love the correlation to standards, and that I am able to see the progress and struggles my students
                    have in obtaining skills.',
                'last_login_date' => $faker->dateTimeBetween('-1 years', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 14
            ],
            [
                'avatar' => 'team4.png',
//                'email' => $faker->email(),
//                'password' => $faker->password(),
                'fname' => 'Trung Van',
                'lname' => 'Tu',
                'dob' => $faker->dateTimeBetween('-50 years', '-30 years'),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address,
                'specialty' => 'Best designer',
                'comment' => 'OnlineEdu.com has been an invaluable aid to me in teaching my children from home, no matter what
                    the grade level. It\'s so quick and easy to look for and download specifically what I need in a moment,
                    and at a most reasonable cost.',
                'last_login_date' => $faker->dateTimeBetween('-1 years', now()),
                'last_login_ip' => $faker->ipv4,
                'user_id' => 15
            ]
        ]);

        DB::table('visitors')->insert([
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'address' => $faker->address,
                'status' => 2,
                'entrance_mark' => rand(0, 10),
                'course_id' => 1
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'address' => $faker->address,
                'status' => 2,
                'entrance_mark' => rand(0, 10),
                'course_id' => 1
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'address' => $faker->address,
                'status' => 1,
                'entrance_mark' => 0,
                'course_id' => 2
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'address' => $faker->address,
                'status' => 3,
                'entrance_mark' => rand(0, 10),
                'course_id' => 3
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'address' => $faker->address,
                'status' => 3,
                'entrance_mark' => rand(0, 10),
                'course_id' => 2
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'address' => $faker->address,
                'status' => 2,
                'entrance_mark' => rand(0, 10),
                'course_id' => 2
            ],
        ]);

        DB::table('exam_results')->insert([
            [
                'student_id' => 1,
                'exam_id' => 1,
                'mark' => 8
            ],
            [
                'student_id' => 2,
                'exam_id' => 1,
                'mark' => 9
            ],
            [
                'student_id' => 3,
                'exam_id' => 1,
                'mark' => 10
            ],
            [
                'student_id' => 1,
                'exam_id' => 2,
                'mark' => 8
            ],
            [
                'student_id' => 2,
                'exam_id' => 2,
                'mark' => 5
            ],
            [
                'student_id' => 3,
                'exam_id' => 2,
                'mark' => 5
            ],
        ]);

//        DB::table('visitor_statuses')->insert([
//            [
//                'description' => 'Đã đăng ký học'
//            ],
//            [
//                'description' => 'Đang đăng ký học'
//            ],
//            [
//                'description' => 'Đã hủy đăng ký học'
//            ]
//        ]);
    }

    public function randomNumberSequence($requiredLength = 6, $highestDigit = 9): string
    {
        $sequence = '';
        for ($i = 0; $i < $requiredLength; ++$i) {
            $sequence .= mt_rand(0, $highestDigit);
        }
        return $sequence;
    }
}
