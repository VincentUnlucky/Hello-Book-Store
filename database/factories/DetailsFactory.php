<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'=>$i,
                'book_id'=>$i,
                'author'=> $this->faker->name(),
                'publisher'=> $this->faker->name(),
                'year' =>2011,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porta metus consequat, volutpat neque a, pulvinar eros. Ut dapibus lectus ac elementum egestas. Quisque porta urna at mauris gravida, non molestie nisl rhoncus. Nulla lobortis ac tellus ac consequat. Proin eu tristique mi. Vestibulum faucibus ante a rhoncus cursus. Nullam condimentum gravida est elementum accumsan. Praesent rhoncus libero quis est viverra cursus. Ut tempor ligula ac mauris efficitur, sit amet tempor nulla lacinia. Maecenas mollis, magna non molestie euismod, libero quam viverra ipsum, eget dapibus nulla massa eget felis. Quisque auctor dolor et urna iaculis tempor. Integer et suscipit urna. Sed tempus turpis ac sapien aliquet maximus. Suspendisse et cursus enim. Sed non sem nec nulla egestas porttitor convallis at felis.

                Donec mi turpis, rhoncus eu sollicitudin vel, placerat a justo. Sed non felis magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras a aliquam nunc. Nulla finibus ex ac vulputate accumsan. Ut sit amet magna eros. Donec dictum nisi eu laoreet cursus. Nullam vehicula pulvinar dictum. Cras ipsum enim, ornare eu ullamcorper nec, rutrum in eros. Etiam quis sapien sed massa rhoncus fringilla vitae at augue.

                Fusce aliquet dolor at massa dignissim tincidunt. Vivamus hendrerit cursus est, non efficitur felis vestibulum nec. Nunc quis mauris eget velit venenatis lobortis ac vel ante. Suspendisse potenti. Donec sit amet nisi mi. Duis non eros purus. Ut nec sem ac quam faucibus semper. Nunc mollis pharetra nulla vitae porttitor. Curabitur molestie, erat id consequat feugiat, mauris dui finibus nibh, quis malesuada diam leo id lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper, tellus et commodo pellentesque, lorem felis feugiat lectus, vel tempus nisl nisi aliquet felis. Nunc vulputate faucibus leo, ut rutrum magna posuere eget. Etiam lacus nisi, ultrices quis aliquet nec, malesuada id sem.

                Duis ex elit, malesuada a mauris ut, vestibulum tincidunt metus. Donec non consectetur erat, a egestas massa. Donec vitae nisi fringilla, facilisis dui sit amet, lacinia velit. Vestibulum ut velit maximus, tempus sem nec, bibendum metus. Curabitur sed augue nisi. Vestibulum vitae neque ornare, consequat nulla id, maximus mi. Integer ullamcorper elit purus, ut sagittis erat imperdiet sit amet. Nam non porttitor sem.

                Mauris lectus nibh, tincidunt ac leo id, interdum consectetur nisi. Sed at ullamcorper velit, at euismod lacus. Donec posuere porta fringilla. In at metus felis. Proin at posuere est. Morbi tincidunt nulla quam, at consequat nibh maximus a. Proin ac nulla nec neque fringilla auctor at et nisi. Praesent in sapien purus. Sed tempor ex libero, ut mollis nibh ornare nec. Donec facilisis, tortor nec mattis accumsan, nunc nibh varius nisl, in venenatis enim orci in est. Morbi laoreet facilisis felis, ac convallis ligula pellentesque at. Nulla tempus felis vitae turpis blandit, id placerat velit volutpat. Aenean mattis euismod finibus'

        ];
    }
}
