<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('blog_types')->insert([
          ['name' => '研究者'],
          ['name' => 'ムギ'],
      ]);
      DB::table('media_types')->insert([
      		['name' => '写真'],
      		['name' => '動画'],
  	  ]);
      for ($i = 1; $i <= 5; $i++) {
      DB::table('blogs')->insert([
      		['title' => 'サンプルブログタイトル'.(string)$i,
           'body'=>'サンプルブログ内容'.(string)$i,
           'blog_type_id'=>1
         ],
         ['title' => 'サンプルブログタイトル'.(string)$i,
          'body'=>'サンプルブログ内容'.(string)$i,
          'blog_type_id'=>2
        ]
         ]
         );
       DB::table('blog_medias')->insert([
        		['media_type_id' => 1,
             'media_file'=>'サンプルブログメディア写真'.(string)$i,
             'blog_id'=>$i
           ],
       		['media_type_id' => 2,
            'media_file'=>'サンプルブログメディア動画'.(string)$i,
            'blog_id'=>$i
            ]]
          );
      }
    }
}
