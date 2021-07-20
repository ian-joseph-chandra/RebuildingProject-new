<?php

namespace Database\Seeders;


use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Joshlyne Edwina',
                'position_id' => Position::where('name', 'Founder & Executive Director')->get(['id'])[0]->id,
                'image' => 'images/users/Joshlyne.png',
                'story' => "I believe that being educated is such a privilege. Since I was young, I realized that I am privileged, to be educated in a good school and university, and to be supported supportively by my parents. And I believe a privilege that has been entrusted and given to me is not something that should be consumed only for my own sake. Instead, the more privileged we are, the more we need to extend hands for those who are not as privileged as we are. That also explains why we decided to build Rebuilding Project as a platform, to empower more orphan children to receive and value how important education is, and also allowing them to be able to pursue their dream for the future. Education is power, and education change lives. So, let's empower children through education together, shall we?"
            ],
            [
                'name' => 'Karen ',
                'position_id' => Position::where('name', 'Founder & Operation Director')->get(['id'])[0]->id,
                'image' => 'images/users/Karen.png',
                'story' => "Rebuilding Project merupakan salah satu wadah bagi saya untuk bisa berbagi kepada orang lain yang membutuhkan melalui apa yang saya punya dan yang saya bisa lakukan. Berbagi, bukan hanya sebatas hal-hal materi saja tetapi semua yang bisa diberikan kepada orang lain dengan hati yang tulus ikhlas. Karena kesadaran bahwa pendidikan merupakan salah satu jalan untuk bisa mengubah pola pikir dan karakter seseorang, ini yang menggerakkan dan meyakinkan saya bahwa Rebuilding Project akan berguna bagi anak-anak panti dan akan membawa suatu perubahan dalam kehidupan mereka. Apa yang sedang kami (tim Rebuilding Project) bangun adalah suatu bentuk kepedulian untuk menolong anak-anak panti agar mereka bisa menolong diri mereka sendiri di masa depan."
            ],
            [
                'name' => 'Ediva Madeleine',
                'position_id' => Position::where('name', 'Marketing Director')->get(['id'])[0]->id,
                'image' => 'images/users/Ediva.png',
                'story' => "Sejak menjadi yatim piatu sejak tahun 2013, kehidupan banyak berubah dan begitu banyak hal yang harus diperjuangkan dengan extra. Mulai dari memperjuangkan edukasi, menjalani masa remaja seorang diri, hingga belajar bertanggung jawab atas kehidupan masa kini dan berusaha menata masa depan sedari kecil. Banyak kesulitan yang dilalui tanpa bantuan dari orang dewasa membuat saya berjanji untuk bekerja berkali-kali lipat lebih dari orang lain dan suatu hari dapat membantu anak-anak yang menjalani kehidupan seperti saya terutama support untuk Pendidikan. Awalnya janji ini saya gumulkan dan mungkin menjadi target belasan tahun yang akan datang. Ternyata Tuhan mengizinkan saya dipakai lebih cepat dari rencana yang sudah saya buat melalui Rebuilding Project. Semakin yakin untuk bergabung karena kesamaan Visi dan Misi dalam fokus memberikan edukasi, karena edukasi adalah bekal paling berharga untuk masa depan seorang anak. Hal yang terpenting dari itu semua adalah, keinginan saya untuk berbagi, dan semoga ini menjadi  permulaan lebih banyak anak yatim piatu bisa mendapatkan pendidikan sesuai dengan talenta mereka untuk mencapai cita-cita yang mereka impikan."
            ],
            [
                'name' => 'Angelica Lucyane',
                'position_id' => Position::where('name', 'Secretary & Program Development Lead')->get(['id'])[0]->id,
                'image' => 'images/users/Angelica.png',
                'story' => "Rebuilding project adalah tempat saya untuk berbagi ilmu dengan anak-anak yang masih membutuh edukasi baik secara formal dan non-formal. Awal bergabung dengan rebuilding project berasal dari keresahan saya terhadap edukasi untuk anak-anak yang kurang dilihat oleh orang lain. Saya ingin mereka bisa tumbuh dan diterima dilingkungan tanpa memandang siapa mereka dan latar belakang mereka. Dengan adanya program ini, membuat pandangan saya semakin terbuka terhadap kondisi anak-anak di Indonesia khususnya mereka yang telah kehilangan orang-orang yang mereka sayangi. Rebuilding Project, menjadi salah satu cara kami agar bisa membantu mereka untuk mewujudkan cita-cita mereka."
            ],
            [
                'name' => 'Kevin Sutarman',
                'position_id' => Position::where('name', 'Program Development Lead')->get(['id'])[0]->id,
                'image' => 'images/users/Kevin.png',
                'story' => "Merasakan kasih Tuhan yang baru dan setia setiap hari membuat saya rindu untuk menyalurkan kasih setia itu. Disitulah saya bertemu dengan Rebuilding Project. Bagi saya ini bukan suatu kebetulan. Namun ada rencana Tuhan yang harus digenapi lewat Rebuilding Project yang berfokus untuk menunjang pendidikan bagi anak-anak yatim. Karena hanya dengan jalur pendidikanlah, anak-anak dapat menyambut masa depan yang lebih terjamin. Dan itulah yang selalu kami utamakan dan kejar di Rebuilding Project. "
            ],
            [
                'name' => 'Bella Dewanti',
                'position_id' => Position::where('name', 'Program Development Team')->get(['id'])[0]->id,
                'image' => 'images/users/Bella.png',
                'story' => "Pendidikan yang berkualitas, baik formal maupun non-formal merupakan salah satu aspek yang menentukan masa depan seseorang. Sayangnya, tidak semua orang punya akses untuk itu. Akibatnya, terjadilah ketimpangan sosial yang kian hari semakin jauh. Maka dari itu, Rebuilding Project menjadi saluran untuk saling berbagi. Harapannya, anak-anak dapat menggapai mimpi mereka dan mampu bersaing di dunia kerja yang ada di masa yang akan datang."
            ],
            [
                'name' => 'Celine Miranda',
                'position_id' => Position::where('name', 'Program Development Team')->get(['id'])[0]->id,
                'image' => 'images/users/Celine.png',
                'story' => "When someone mentions the word \"education\", my mind goes straight into my high school days—how I spent my hours studying, working on my assignments, socializing, having fun... those were the days I cherish the most for they have shaped me into who I am today. However, I discovered that I was appreciative of my youth because I had a supportive environment and those I could trust by my side. Education isn't merely about knowing mathematical equations and how to count taxes, it isn't just about writing a flawless essay and avoiding as many grammatical errors as possible: it is the joy of finding yourself, finding a purpose and finding those you wish to share those memories with. I want the journey to be accessible to all, even for those who thought they weren't born with the privilege. Sharing that little bit of joy, I hope the world can become a better place and people can live with happier hearts. It might not seem easy, it might seem too far-fetched, but shouldn't we try taking the first step to see where the road could possibly lead to? Rebuilding Project could be the start of the change we all wish to see."
            ],
        ]);
    }
}
