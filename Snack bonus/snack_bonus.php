<?php
$paragraph = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet sit voluptatum obcaecati nulla suscipit natus dolorum aliquid optio, quibusdam ex! Adipisci aspernatur amet similique iusto recusandae possimus natus. Officia, maiores!
Voluptatibus nostrum deleniti, incidunt sequi iure voluptatum, ipsam consequuntur, fuga odit quia perspiciatis recusandae ullam laudantium enim commodi nobis ratione maxime doloremque. Ab, amet consectetur ullam commodi perspiciatis porro! Nam!
Fuga veritatis quaerat dolorum nemo. Blanditiis tempora asperiores ipsam dolores, consequuntur id iste ut dolore nesciunt architecto quo! Repellat totam natus nobis molestias id accusamus, quam asperiores. Ab, provident. Fugiat.
Reiciendis iusto dolores quis facere voluptates dicta similique laborum minima vel eius. Sequi, placeat sint quo, deserunt minus fugit dolorum id inventore magni excepturi reiciendis, accusantium impedit obcaecati aliquam rem?
Esse, ab voluptas alias sint voluptatibus architecto ut, vero beatae totam, libero qui eaque obcaecati perferendis. Praesentium deleniti deserunt corrupti consequuntur, a eos officia adipisci aliquid voluptas nam impedit eaque.
Quo provident nostrum omnis reiciendis consectetur voluptatibus, porro esse asperiores ab, similique molestiae accusantium. In quo, ab sed, ea nulla optio dignissimos aliquam iure nam temporibus non assumenda officia delectus.
Harum ipsam maxime, iusto nisi ipsum vel sapiente iure reprehenderit, dolorem alias pariatur! Vitae sequi accusamus voluptate totam optio quaerat quos corporis excepturi nihil, eum, nisi veniam maxime fuga libero.
Excepturi maiores reprehenderit aut itaque molestiae voluptate impedit perspiciatis minima, corrupti dolore nostrum doloremque hic numquam optio labore quibusdam nihil quis fuga nam, mollitia eius quae. Sunt blanditiis dolore rem?
Sed corporis repellat ea molestiae ab obcaecati est voluptatem veniam voluptas ratione libero natus ex assumenda sunt eos blanditiis modi dignissimos inventore, aliquam aspernatur sint! Praesentium voluptas aperiam minima et.
Sed voluptatum culpa consequuntur, maxime, debitis, labore iste hic pariatur repudiandae porro ad quisquam nostrum impedit accusamus perferendis quis? Veniam voluptates expedita minima debitis suscipit dicta inventore corrupti tenetur incidunt!
Enim delectus tenetur vel voluptatem architecto voluptates neque. Quae voluptates sapiente natus autem quia fuga labore rerum voluptatem vero, suscipit consequuntur quibusdam, id voluptas repudiandae asperiores itaque ratione expedita! Aliquid!
Consequuntur alias minima ipsum autem eligendi. Quam atque iste minima, ad saepe ipsa laborum ipsam repellat ullam tempore facere doloremque a dolor esse totam eius voluptates sapiente eaque tenetur placeat?
Rem, dicta quidem ipsum quis minima fugit necessitatibus nesciunt temporibus. Aliquid accusantium facere blanditiis quis unde nihil deserunt harum! Facilis architecto blanditiis ea optio explicabo nihil corrupti temporibus neque natus.
";

$phrases = explode('.', $paragraph);

foreach ($phrases as $phrase) {
    $phrase = trim($phrase);
    if ($phrase !== '') {
        echo "<p>$phrase.</p>";
    }
}
