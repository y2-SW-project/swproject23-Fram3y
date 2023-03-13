<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = new Movie();
        $movies->title = "Puss in Boots: The Last Wish";
        $movies->synopsis = "This year, everyone’s favourite leche-loving...";
        $movies->director = "Joel Crawford, Januel Mercado";
        $movies->starring = "Da'Vine Joy Randolph, Wagner Moura, Samson Kayo, Harvey Guillén, John Mulaney, Anthony Mendez, Ray Winstone, Florence Pugh, Olivia Colman, Antonio Banderas, Salma Hayek";
        $movies->release_date = "2023-2-2";
        $movies->genre_id = "7";
        $movies->save();

        $movies = new Movie();
        $movies->title = "Scream VI";
        $movies->synopsis = "Following the latest Ghostface killings, the four survivors leave Woodsboro behind and start a fresh chapter. In Scream VI, Melissa Barrera (“Sam Carpenter”), Jasmin Savoy Brown...";
        $movies->director = "Matt Bettinelli-Olpin, Tyler Gillett";
        $movies->starring = "Jenna Ortega, Dermot Mulroney, Henry Czerny, Jasmin Savoy Brown, Melissa Barrera, Mason Gooding, Liana Liberato, Hayden Panettiere, Jack Champion, Devyn Nekoda, Josh Segarra, Tony Revolori, Courteney Cox, Samara Weaving";
        $movies->release_date = "2023-3-9";
        $movies->genre_id = "4";
        $movies->save();

        $movies = new Movie();
        $movies->title = "The Super Mario Bros. Movie";
        $movies->synopsis = "A plumber named Mario travels through an underground labyrinth with his brother, Luigi, trying to save a captured princess. Feature film adaptation of the popular video game...";
        $movies->director = "Michael Jelenic, Aaron Horvath";
        $movies->starring = "Seth Rogen, Charlie Day, Kevin Michael Richardson, Fred Armisen, Sebastian Maniscalco, Jack Black, Keegan-Michael Key, Chris Pratt, Anya Taylor-Joy";
        $movies->release_date = "2023-4-5";
        $movies->genre_id = "7";
        $movies->save();

        $movies = new Movie();
        $movies->title = "Creed III";
        $movies->synopsis = "After dominating the boxing world, Adonis Creed (Michael B. Jordan) has been thriving in both his career and family life...";
        $movies->director = "Michael B. Jordan";
        $movies->starring = "Florian Munteanu, Tessa Thompson, Wood Harris, Jonathan Majors, Michael B. Jordan, Phylicia Rashad";
        $movies->release_date = "2023-2-3";
        $movies->genre_id = "2";
        $movies->save();

        $movies = new Movie();
        $movies->title = "65";
        $movies->synopsis = "After a catastrophic crash on an unknown planet, pilot Mills (Adam Driver) quickly discovers he’s actually stranded on Earth… 65 million years ago. Now, with only one chance at rescue, Mills and the only other survivor...";
        $movies->director = "Scott Beck, Bryan Woods";
        $movies->starring = "Adam Driver, Chloe Coleman, Ariana Greenblatt";
        $movies->release_date = "2023-2-10";
        $movies->genre_id = "2";
        $movies->save();

        $movies = new Movie();
        $movies->title = "Cocaine Bear";
        $movies->synopsis = "Inspired by the 1985 true story of a drug runner's plane crash...";
        $movies->director = "Elizabeth Banks";
        $movies->starring = "Kristofer Hivju, Brooklynn Prince, Alden Ehrenreich, Jesse Tyler Ferguson, Christian Convery, Kahyun Kim, Scott Seiss, Margo Martindale, O'Shea Jackson Jr., Keri Russell, Ray Liotta";
        $movies->release_date = "2023-2-10";
        $movies->genre_id = "8";
        $movies->save();

        $movies = new Movie();
        $movies->title = "Guardians of The Galaxy Vol.3";
        $movies->synopsis = "In Marvel Studios “Guardians of the Galaxy Vol. 3” our beloved band of misfits are looking a bit different these days. Peter Quill, still reeling from the loss of Gamora...";
        $movies->director = "James Gunn";
        $movies->starring = "Bradley Cooper, Elizabeth Debicki, Dave Bautista, Vin Diesel, Will Poulter, Maria Bakalova, Chukwudi Iwuji, Karen Gillan, Chris Pratt, Zoe Saldana, Pom Klementieff, Sean Gunn";
        $movies->release_date = "2023-2-10";
        $movies->genre_id = "2";
        $movies->save();

        $movies = new Movie();
        $movies->title = "What's Love Got to do With it?";
        $movies->synopsis = "How do you find lasting love in today's world? For documentary filmmaker Zoe (Lily James), swiping right to find Mr Right has only delivered bad dates and funny anecdotes...";
        $movies->director = "Shekhar Kapur";
        $movies->starring = "Lily James, Shazad Latif, Asim Chaudhry, Sajal Ali, Shabana Azmi, Emma Thompson";
        $movies->release_date = "2023-2-24";
        $movies->genre_id = "3";
        $movies->save();

        $movies = new Movie();
        $movies->title = "Indiana Jones And The Dial of Destiny";
        $movies->synopsis = "Harrison Ford returns as the legendary hero archaeologist in the highly anticipated fifth installment of the iconic “Indiana Jones” franchise...";
        $movies->director = "James Mangold";
        $movies->starring = "Harrison Ford, John Rhys-Davies, Toby Jones, Boyd Holbrook, Thomas Kretschmann, Shaunette Renee Wilson, Oliver Richters, Ethann Isidore, Phoebe Waller-Bridge, Antonio Banderas, Mads Mikkelsen";
        $movies->release_date = "2023-5-30";
        $movies->genre_id = "2";
        $movies->save();

        $movies = new Movie();
        $movies->title = "Rendfield";
        $movies->synopsis = "Evil doesn’t span eternity without a little help. In this modern monster tale of Dracula’s loyal servant, Nicholas Hoult...";
        $movies->director = "Chris McKay";
        $movies->starring = "Ben Schwartz, Nicolas Cage, Adrian Martinez, Awkwafina , Shohreh Aghdashloo, Nicholas Hoult";
        $movies->release_date = "2023-4-14";
        $movies->genre_id = "4";
        $movies->save();

        $movies = new Movie();
        $movies->title = "Shazam! Fury of The Gods";
        $movies->synopsis = "From New Line Cinema comes “Shazam! Fury of the Gods,” which continues the story of teenage Billy Batson...";
        $movies->director = "David F. Sandberg";
        $movies->starring = "Lucy Liu, Rachel Zegler, Adam Brody, Zachary Levi, Asher Angel, Marta Milans, Helen Mirren, Jack Dylan Grazer";
        $movies->release_date = "2023-3-17";
        $movies->genre_id = "1";
        $movies->save();

        $movies = new Movie();
        $movies->title = "Spider-Man: Across The Spider-Verse";
        $movies->synopsis = "Miles Morales returns for the next chapter of the Oscar®-winning Spider-Verse saga...";
        $movies->director = "Joaquim Dos Santos, Justin K. Thompson, Kemp Powers";
        $movies->starring = "Oscar Isaac, Shea Whigham, Issa Rae, Jason Schwartzman, Rachel Dratch, Luna Lauren Velez, Greta Lee, Brian Tyree Henry, Hailee Steinfeld, Shameik Moore, Jorma Taccone";
        $movies->release_date = "2023-6-2";
        $movies->genre_id = "7";
        $movies->save();
    }
}
