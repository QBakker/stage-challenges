<?php

use Illuminate\Database\Seeder;

class ChallengesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('challenges')->insert([
            [
                'title' => 'Challenge 1',

                'subtitle' => 'Text Cleanup',

                'content' => 'You have a list of words. 
                    Letters of these words are mixed with extra symbols, 
                    so it is hard to define the beginning and end of each word. 
                     Write a program that will clean up the words from extra numbers and symbols.',

                'assignment' => '><Hello#521paddawan2==)
                    Today---you0[]learn.,.-important.stuff
             
                    *&Episode238I(&
                    #$--THE33PHANTOM]}]MENACE[[
             
                    &^%$Turmoil32<<has!-engulfed#2the:
                    ))-Galactic-3-0Republic.2€The8&&taxation
                    @)of#)#trade^@#*routes""{}to}}[outlying239{star
                    13-systems%%$is@%^in!235%dispute.23
             
                    <,<Hoping><>#to81*resolve*--_the(-)matter*!*#
                    with??a??.blockade;\;of*&^*deadly??
                    battleships,@#%99the158*greedy%@*)Trade]}0-
                    Federation@#%3has@#@%3"stopped>?>all<#4
                    shipping9(8to(*&the&&$small$!@planet$#*
                    #@#T&of!?Naboo.$

                    While38*the-Congress==+of#&&@the!#@
                    Republic$@:;endlessly?%#debates|}[
                    this235#%$^alarming_()8chain&)(@$of*&events,3
                    {[{--the0Supreme--=+Chancellor+09*has]
                    secretly@#]dispatched!!two%%$Jedi%:;
                    Knights,%the::guardians*&of+-
                    peace()and][3justice)&^}in@{the^}$
                    galaxy,8to##settle%@the@#%conflict....',
            ],
            [
                'title' => 'Challenge 2',
                
                'subtitle' => 'FIZZ BUZZ',

                'content' => 'Players generally sit in a circle.
                The first player says the number “1”, and each player says next number in turn.
                However, any number divisible by X (for example, three) is replaced by the word fizz, 
                and any divisible by Y (for example, five) by the word buzz.
                Numbers divisible by both become fizz buzz. A player who hesitates, 
                or makes a mistake is eliminated from the game.
                
                Write a program that prints out the final series of numbers where those divisible by X, 
                Y and both are replaced by “F” for fizz, “B” for buzz and “FB” for fizz buzz.',

                'assignment' => 'Write a function which loops from 1 to 100 and accepts 2 parameters (Fizz & Buzz)
                - Output the loop from 1 to 100 where the given parameters are correctly replaced with the words (or first letter of): Fizz or Buzz.',
            ],
        ]);
    }
}
