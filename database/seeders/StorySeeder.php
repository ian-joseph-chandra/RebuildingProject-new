<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stories')->insert([
                [
                    'writer' => 'Joshlyne Edwina',
                    'title' => 'Test 1',
                    'category_id' => '1',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.

Nibh massa placerat ut convallis sit neque tristique aliquam imperdiet. Lorem ac est fermentum fermentum nisi, leo aliquam fames. Pharetra commodo massa dapibus faucibus ornare morbi scelerisque nulla lacus. Senectus adipiscing maecenas nunc, sed varius. Ut semper ornare mauris posuere. Est eleifend velit egestas adipiscing elit amet. Semper duis vitae enim montes, viverra habitant vitae sit massa. Volutpat vitae elit dictum potenti maecenas tellus duis nulla velit. Pretium tristique molestie sed habitasse volutpat condimentum rhoncus.

Nec dolor nibh integer sed integer. Diam eu cursus et et duis viverra amet. Et gravida gravida diam velit nam risus, orci, turpis viverra. Faucibus placerat nulla pellentesque etiam condimentum purus. Proin elementum, dui aliquam lacus.

Nec euismod facilisis luctus feugiat consectetur consectetur risus. Amet, condimentum sed consequat tristique. Etiam tempus, ullamcorper consectetur tristique tincidunt ultrices sit mattis tincidunt. Platea feugiat tellus sit facilisis eget facilisi maecenas purus. Sed proin nunc odio.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.",
                    'created_at' => '2021-03-07 02:33:51'
                ],
                [
                    'writer' => 'Angelica Lucyane',
                    'title' => 'Test 2',
                    'category_id' => '1',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.

Nibh massa placerat ut convallis sit neque tristique aliquam imperdiet. Lorem ac est fermentum fermentum nisi, leo aliquam fames. Pharetra commodo massa dapibus faucibus ornare morbi scelerisque nulla lacus. Senectus adipiscing maecenas nunc, sed varius. Ut semper ornare mauris posuere. Est eleifend velit egestas adipiscing elit amet. Semper duis vitae enim montes, viverra habitant vitae sit massa. Volutpat vitae elit dictum potenti maecenas tellus duis nulla velit. Pretium tristique molestie sed habitasse volutpat condimentum rhoncus.

Nec dolor nibh integer sed integer. Diam eu cursus et et duis viverra amet. Et gravida gravida diam velit nam risus, orci, turpis viverra. Faucibus placerat nulla pellentesque etiam condimentum purus. Proin elementum, dui aliquam lacus.

Nec euismod facilisis luctus feugiat consectetur consectetur risus. Amet, condimentum sed consequat tristique. Etiam tempus, ullamcorper consectetur tristique tincidunt ultrices sit mattis tincidunt. Platea feugiat tellus sit facilisis eget facilisi maecenas purus. Sed proin nunc odio.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.",
                    'created_at' => '2021-03-07 02:33:52'
                ],
                [
                    'writer' => 'Celine Miranda',
                    'title' => 'Test 3',
                    'category_id' => '1',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.

Nibh massa placerat ut convallis sit neque tristique aliquam imperdiet. Lorem ac est fermentum fermentum nisi, leo aliquam fames. Pharetra commodo massa dapibus faucibus ornare morbi scelerisque nulla lacus. Senectus adipiscing maecenas nunc, sed varius. Ut semper ornare mauris posuere. Est eleifend velit egestas adipiscing elit amet. Semper duis vitae enim montes, viverra habitant vitae sit massa. Volutpat vitae elit dictum potenti maecenas tellus duis nulla velit. Pretium tristique molestie sed habitasse volutpat condimentum rhoncus.

Nec dolor nibh integer sed integer. Diam eu cursus et et duis viverra amet. Et gravida gravida diam velit nam risus, orci, turpis viverra. Faucibus placerat nulla pellentesque etiam condimentum purus. Proin elementum, dui aliquam lacus.

Nec euismod facilisis luctus feugiat consectetur consectetur risus. Amet, condimentum sed consequat tristique. Etiam tempus, ullamcorper consectetur tristique tincidunt ultrices sit mattis tincidunt. Platea feugiat tellus sit facilisis eget facilisi maecenas purus. Sed proin nunc odio.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.",
                    'created_at' => '2021-03-07 02:33:53'
                ],
                [
                    'writer' => 'Bella Dewanti',
                    'title' => 'Test 4',
                    'category_id' => '1',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.

Nibh massa placerat ut convallis sit neque tristique aliquam imperdiet. Lorem ac est fermentum fermentum nisi, leo aliquam fames. Pharetra commodo massa dapibus faucibus ornare morbi scelerisque nulla lacus. Senectus adipiscing maecenas nunc, sed varius. Ut semper ornare mauris posuere. Est eleifend velit egestas adipiscing elit amet. Semper duis vitae enim montes, viverra habitant vitae sit massa. Volutpat vitae elit dictum potenti maecenas tellus duis nulla velit. Pretium tristique molestie sed habitasse volutpat condimentum rhoncus.

Nec dolor nibh integer sed integer. Diam eu cursus et et duis viverra amet. Et gravida gravida diam velit nam risus, orci, turpis viverra. Faucibus placerat nulla pellentesque etiam condimentum purus. Proin elementum, dui aliquam lacus.

Nec euismod facilisis luctus feugiat consectetur consectetur risus. Amet, condimentum sed consequat tristique. Etiam tempus, ullamcorper consectetur tristique tincidunt ultrices sit mattis tincidunt. Platea feugiat tellus sit facilisis eget facilisi maecenas purus. Sed proin nunc odio.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.",
                    'created_at' => '2021-03-07 02:33:54'
                ],
                [
                    'writer' => 'Ediva Madeleine',
                    'title' => 'Test 5',
                    'category_id' => '1',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.

Nibh massa placerat ut convallis sit neque tristique aliquam imperdiet. Lorem ac est fermentum fermentum nisi, leo aliquam fames. Pharetra commodo massa dapibus faucibus ornare morbi scelerisque nulla lacus. Senectus adipiscing maecenas nunc, sed varius. Ut semper ornare mauris posuere. Est eleifend velit egestas adipiscing elit amet. Semper duis vitae enim montes, viverra habitant vitae sit massa. Volutpat vitae elit dictum potenti maecenas tellus duis nulla velit. Pretium tristique molestie sed habitasse volutpat condimentum rhoncus.

Nec dolor nibh integer sed integer. Diam eu cursus et et duis viverra amet. Et gravida gravida diam velit nam risus, orci, turpis viverra. Faucibus placerat nulla pellentesque etiam condimentum purus. Proin elementum, dui aliquam lacus.

Nec euismod facilisis luctus feugiat consectetur consectetur risus. Amet, condimentum sed consequat tristique. Etiam tempus, ullamcorper consectetur tristique tincidunt ultrices sit mattis tincidunt. Platea feugiat tellus sit facilisis eget facilisi maecenas purus. Sed proin nunc odio.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.",
                    'created_at' => '2021-03-07 02:33:55'
                ],
                [
                    'writer' => 'Kevin Sutarman',
                    'title' => 'Test 6',
                    'category_id' => '1',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.

Nibh massa placerat ut convallis sit neque tristique aliquam imperdiet. Lorem ac est fermentum fermentum nisi, leo aliquam fames. Pharetra commodo massa dapibus faucibus ornare morbi scelerisque nulla lacus. Senectus adipiscing maecenas nunc, sed varius. Ut semper ornare mauris posuere. Est eleifend velit egestas adipiscing elit amet. Semper duis vitae enim montes, viverra habitant vitae sit massa. Volutpat vitae elit dictum potenti maecenas tellus duis nulla velit. Pretium tristique molestie sed habitasse volutpat condimentum rhoncus.

Nec dolor nibh integer sed integer. Diam eu cursus et et duis viverra amet. Et gravida gravida diam velit nam risus, orci, turpis viverra. Faucibus placerat nulla pellentesque etiam condimentum purus. Proin elementum, dui aliquam lacus.

Nec euismod facilisis luctus feugiat consectetur consectetur risus. Amet, condimentum sed consequat tristique. Etiam tempus, ullamcorper consectetur tristique tincidunt ultrices sit mattis tincidunt. Platea feugiat tellus sit facilisis eget facilisi maecenas purus. Sed proin nunc odio.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.",
                    'created_at' => '2021-03-07 02:33:56'
                ],
                [
                    'writer' => 'Karen',
                    'title' => 'Test 7',
                    'category_id' => '1',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.

Nibh massa placerat ut convallis sit neque tristique aliquam imperdiet. Lorem ac est fermentum fermentum nisi, leo aliquam fames. Pharetra commodo massa dapibus faucibus ornare morbi scelerisque nulla lacus. Senectus adipiscing maecenas nunc, sed varius. Ut semper ornare mauris posuere. Est eleifend velit egestas adipiscing elit amet. Semper duis vitae enim montes, viverra habitant vitae sit massa. Volutpat vitae elit dictum potenti maecenas tellus duis nulla velit. Pretium tristique molestie sed habitasse volutpat condimentum rhoncus.

Nec dolor nibh integer sed integer. Diam eu cursus et et duis viverra amet. Et gravida gravida diam velit nam risus, orci, turpis viverra. Faucibus placerat nulla pellentesque etiam condimentum purus. Proin elementum, dui aliquam lacus.

Nec euismod facilisis luctus feugiat consectetur consectetur risus. Amet, condimentum sed consequat tristique. Etiam tempus, ullamcorper consectetur tristique tincidunt ultrices sit mattis tincidunt. Platea feugiat tellus sit facilisis eget facilisi maecenas purus. Sed proin nunc odio.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum varius mattis placerat in. Pellentesque ac sollicitudin ac aliquam vitae. Nam fermentum ut quis auctor convallis aliquet proin sed. Aliquet leo euismod turpis erat viverra et morbi sit. Non nunc ullamcorper sapien sed augue. Ut massa faucibus vitae scelerisque enim. Eget diam vitae pharetra, nec, purus cursus sapien viverra velit. Tortor ac duis dolor enim, turpis.

Massa pharetra odio sed et vivamus augue in magna vel. Proin vitae vulputate metus, aliquam elit hendrerit diam mollis. Ante mus sed risus ridiculus tellus diam elit est. Ut neque nullam morbi ut. Commodo et nunc amet, eu dis mauris, ultrices in leo. In nulla cursus ultrices est vulputate sed ac. Tincidunt sollicitudin nunc eu amet lectus purus. Est semper in dignissim mi tempor in lectus ultricies sagittis. Est, urna, sed at nunc, lobortis leo hendrerit viverra.

Nec sed ut porta morbi ut. Lacus sit vel convallis velit lacus. Sed eu, nulla sociis urna amet. Dignissim nec sit pellentesque dui libero, mattis. In adipiscing cursus vel id at vestibulum ultrices quis sit. Netus mi sagittis quis in vestibulum habitant lorem in magna. Mattis mauris dolor sed sodales tortor risus amet. Quam mauris vel sapien, bibendum amet quis auctor congue dolor. Sem cursus ullamcorper duis et faucibus. Molestie mattis mauris non egestas lacus nisl. Tellus enim dolor non erat pretium.

Sed sagittis pharetra, ipsum sit arcu. Sollicitudin id donec proin vitae ut amet. Sed lacus, lacus non nunc mauris diam vitae in cursus. Nec amet, ut tortor eu risus, est et quam id. Congue in aliquam lacus enim sed ultrices pellentesque viverra. Tortor et ut faucibus enim nulla netus tincidunt sit dolor. Egestas mus tempor at ut interdum massa. Lorem velit justo, interdum cras. Est laoreet duis sapien, sed dis. Auctor malesuada feugiat aliquam sit amet. Sem etiam vestibulum enim sed quam interdum. Ullamcorper egestas eget viverra diam augue interdum viverra non. Nulla orci vitae libero pretium. Lobortis nunc mattis enim tortor, nulla varius.",
                    'created_at' => '2021-03-07 02:33:57'
                ]
            ]
        );
    }
}
