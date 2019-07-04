<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogBreedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Results from API call: https://dog.ceo/api/breeds/list/all
        DB::table('breeds')->insert(['breed' => 'affenpinscher']);
        DB::table('breeds')->insert(['breed' => 'african']);
        DB::table('breeds')->insert(['breed' => 'airedale']);
        DB::table('breeds')->insert(['breed' => 'akita']);
        DB::table('breeds')->insert(['breed' => 'appenzeller']);
        DB::table('breeds')->insert(['breed' => 'basenji']);
        DB::table('breeds')->insert(['breed' => 'beagle']);
        DB::table('breeds')->insert(['breed' => 'bluetick']);
        DB::table('breeds')->insert(['breed' => 'borzoi']);
        DB::table('breeds')->insert(['breed' => 'bouvier']);
        DB::table('breeds')->insert(['breed' => 'boxer']);
        DB::table('breeds')->insert(['breed' => 'brabancon']);
        DB::table('breeds')->insert(['breed' => 'briard']);
        DB::table('breeds')->insert(['breed' => 'bulldog-boston']);
        DB::table('breeds')->insert(['breed' => 'bulldog-english']);
        DB::table('breeds')->insert(['breed' => 'bulldog-french']);
        DB::table('breeds')->insert(['breed' => 'bullterrier-staffordshire']);
        DB::table('breeds')->insert(['breed' => 'cairn']);
        DB::table('breeds')->insert(['breed' => 'cattledog-australian']);
        DB::table('breeds')->insert(['breed' => 'chihuahua']);
        DB::table('breeds')->insert(['breed' => 'chow']);
        DB::table('breeds')->insert(['breed' => 'clumber']);
        DB::table('breeds')->insert(['breed' => 'cockapoo']);
        DB::table('breeds')->insert(['breed' => 'collie-border']);
        DB::table('breeds')->insert(['breed' => 'coonhound']);
        DB::table('breeds')->insert(['breed' => 'corgi-cardigan']);
        DB::table('breeds')->insert(['breed' => 'cotondetulear']);
        DB::table('breeds')->insert(['breed' => 'dachshund']);
        DB::table('breeds')->insert(['breed' => 'dalmatian']);
        DB::table('breeds')->insert(['breed' => 'dane-great']);
        DB::table('breeds')->insert(['breed' => 'deerhound-scottish']);
        DB::table('breeds')->insert(['breed' => 'dhole']);
        DB::table('breeds')->insert(['breed' => 'dingo']);
        DB::table('breeds')->insert(['breed' => 'doberman']);
        DB::table('breeds')->insert(['breed' => 'elkhound-norwegian']);
        DB::table('breeds')->insert(['breed' => 'entlebucher']);
        DB::table('breeds')->insert(['breed' => 'eskimo']);
        DB::table('breeds')->insert(['breed' => 'frise-bichon']);
        DB::table('breeds')->insert(['breed' => 'germanshepherd']);
        DB::table('breeds')->insert(['breed' => 'greyhound-italian']);
        DB::table('breeds')->insert(['breed' => 'groenendael']);
        DB::table('breeds')->insert(['breed' => 'hound-afghan']);
        DB::table('breeds')->insert(['breed' => 'hound-basset']);
        DB::table('breeds')->insert(['breed' => 'hound-blood']);
        DB::table('breeds')->insert(['breed' => 'hound-english']);
        DB::table('breeds')->insert(['breed' => 'hound-ibizan']);
        DB::table('breeds')->insert(['breed' => 'hound-walker']);
        DB::table('breeds')->insert(['breed' => 'husky']);
        DB::table('breeds')->insert(['breed' => 'keeshond']);
        DB::table('breeds')->insert(['breed' => 'kelpie']);
        DB::table('breeds')->insert(['breed' => 'komondor']);
        DB::table('breeds')->insert(['breed' => 'kuvasz']);
        DB::table('breeds')->insert(['breed' => 'labrador']);
        DB::table('breeds')->insert(['breed' => 'leonberg']);
        DB::table('breeds')->insert(['breed' => 'lhasa']);
        DB::table('breeds')->insert(['breed' => 'malamute']);
        DB::table('breeds')->insert(['breed' => 'malinois']);
        DB::table('breeds')->insert(['breed' => 'maltese']);
        DB::table('breeds')->insert(['breed' => 'mastiff-bull']);
        DB::table('breeds')->insert(['breed' => 'mastiff-english']);
        DB::table('breeds')->insert(['breed' => 'mastiff-tibetan']);
        DB::table('breeds')->insert(['breed' => 'mexicanhairless']);
        DB::table('breeds')->insert(['breed' => 'mix']);
        DB::table('breeds')->insert(['breed' => 'mountain-bernese']);
        DB::table('breeds')->insert(['breed' => 'mountain-swiss']);
        DB::table('breeds')->insert(['breed' => 'newfoundland']);
        DB::table('breeds')->insert(['breed' => 'otterhound']);
        DB::table('breeds')->insert(['breed' => 'papillon']);
        DB::table('breeds')->insert(['breed' => 'pekinese']);
        DB::table('breeds')->insert(['breed' => 'pembroke']);
        DB::table('breeds')->insert(['breed' => 'pinscher-miniature']);
        DB::table('breeds')->insert(['breed' => 'pointer-german']);
        DB::table('breeds')->insert(['breed' => 'pointer-germanlonghair']);
        DB::table('breeds')->insert(['breed' => 'pomeranian']);
        DB::table('breeds')->insert(['breed' => 'poodle-miniature']);
        DB::table('breeds')->insert(['breed' => 'poodle-standard']);
        DB::table('breeds')->insert(['breed' => 'poodle-toy']);
        DB::table('breeds')->insert(['breed' => 'pug']);
        DB::table('breeds')->insert(['breed' => 'puggle']);
        DB::table('breeds')->insert(['breed' => 'pyrenees']);
        DB::table('breeds')->insert(['breed' => 'redbone']);
        DB::table('breeds')->insert(['breed' => 'retriever-chesapeake']);
        DB::table('breeds')->insert(['breed' => 'retriever-curly']);
        DB::table('breeds')->insert(['breed' => 'retriever-flatcoated']);
        DB::table('breeds')->insert(['breed' => 'retriever-golden']);
        DB::table('breeds')->insert(['breed' => 'ridgeback-rhodesian']);
        DB::table('breeds')->insert(['breed' => 'rottweiler']);
        DB::table('breeds')->insert(['breed' => 'saluki']);
        DB::table('breeds')->insert(['breed' => 'samoyed']);
        DB::table('breeds')->insert(['breed' => 'schipperke']);
        DB::table('breeds')->insert(['breed' => 'schnauzer-giant']);
        DB::table('breeds')->insert(['breed' => 'schnauzer-miniature']);
        DB::table('breeds')->insert(['breed' => 'setter-english']);
        DB::table('breeds')->insert(['breed' => 'setter-gordon']);
        DB::table('breeds')->insert(['breed' => 'setter-irish']);
        DB::table('breeds')->insert(['breed' => 'sheepdog-english']);
        DB::table('breeds')->insert(['breed' => 'sheepdog-shetland']);
        DB::table('breeds')->insert(['breed' => 'shiba']);
        DB::table('breeds')->insert(['breed' => 'shihtzu']);
        DB::table('breeds')->insert(['breed' => 'spaniel-blenheim']);
        DB::table('breeds')->insert(['breed' => 'spaniel-brittany']);
        DB::table('breeds')->insert(['breed' => 'spaniel-cocker']);
        DB::table('breeds')->insert(['breed' => 'spaniel-irish']);
        DB::table('breeds')->insert(['breed' => 'spaniel-japanese']);
        DB::table('breeds')->insert(['breed' => 'spaniel-sussex']);
        DB::table('breeds')->insert(['breed' => 'spaniel-welsh']);
        DB::table('breeds')->insert(['breed' => 'springer-english']);
        DB::table('breeds')->insert(['breed' => 'stbernard']);
        DB::table('breeds')->insert(['breed' => 'terrier-american']);
        DB::table('breeds')->insert(['breed' => 'terrier-australian']);
        DB::table('breeds')->insert(['breed' => 'terrier-bedlington']);
        DB::table('breeds')->insert(['breed' => 'terrier-border']);
        DB::table('breeds')->insert(['breed' => 'terrier-dandie']);
        DB::table('breeds')->insert(['breed' => 'terrier-fox']);
        DB::table('breeds')->insert(['breed' => 'terrier-irish']);
        DB::table('breeds')->insert(['breed' => 'terrier-kerryblue']);
        DB::table('breeds')->insert(['breed' => 'terrier-lakeland']);
        DB::table('breeds')->insert(['breed' => 'terrier-norfolk']);
        DB::table('breeds')->insert(['breed' => 'terrier-norwich']);
        DB::table('breeds')->insert(['breed' => 'terrier-patterdale']);
        DB::table('breeds')->insert(['breed' => 'terrier-russell']);
        DB::table('breeds')->insert(['breed' => 'terrier-scottish']);
        DB::table('breeds')->insert(['breed' => 'terrier-sealyham']);
        DB::table('breeds')->insert(['breed' => 'terrier-silky']);
        DB::table('breeds')->insert(['breed' => 'terrier-tibetan']);
        DB::table('breeds')->insert(['breed' => 'terrier-toy']);
        DB::table('breeds')->insert(['breed' => 'terrier-westhighland']);
        DB::table('breeds')->insert(['breed' => 'terrier-wheaten']);
        DB::table('breeds')->insert(['breed' => 'terrier-yorkshire']);
        DB::table('breeds')->insert(['breed' => 'vizsla']);
        DB::table('breeds')->insert(['breed' => 'weimaraner']);
        DB::table('breeds')->insert(['breed' => 'whippet']);
        DB::table('breeds')->insert(['breed' => 'wolfhound-irish']);


    }
}
