<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\CompanyGame;
use App\Models\Developer;
use App\Models\Game;
use App\Models\KanjiMeaning;
use App\Models\KanjiReading;
use App\Models\KanjiSymbol;
use App\Models\LexemeItem;
use App\Models\LexemeMeaning;
use App\Models\LexemeReading;
use App\Models\LexicalClass;
use App\Models\Platform;
use App\Models\Publisher;
use App\Models\Title;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Platform::truncate();
        // Title::truncate();
        // Game::truncate();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $culdcept_expansion_plus = Title::create([
            'english_name' => 'Culdcept Expansion Plus',
            'japanese_name' => 'カルドセプト エキスパンション・プラス'
        ]);

        $super_puyo_puyo_tsuu_remix = Title::create([
            'english_name' => 'Super Puyo Puyo Tsuu Remix',
            'japanese_name' => 'すーぱーぷよぷよ通リミックス'
        ]);
        
        $sony_playstation = Platform::create([
            'full_name' => 'Sony PlayStation',
            'short_name' => 'PlayStation',
            'slug' => 'sony-playstation'
        ]);

        $nintendo_super_famicom = Platform::create([
            'full_name' => 'Nintendo Super Famicom',
            'short_name' => 'Super Famicom',
            'slug' => 'nintendo-super-famicom'
        ]);
        
        Game::create([
            'platform_id' => $sony_playstation->id,
            'title_id' => $culdcept_expansion_plus->id,
            'slug' => 'culdcept-expansion-plus-sony-playstation',
            'year_released' => 2000
        ]);

        Game::create([
            'platform_id' => $nintendo_super_famicom->id,
            'title_id' => $super_puyo_puyo_tsuu_remix->id,
            'slug' => 'super-puyo-puyo-tsuu-remix-super-famicom',
            'year_released' => 1996
        ]);

        $omiyaSoft = Company::create([
            'name' => 'Omiya Soft',
            'slug' => 'omiya-soft'
        ]);
        
        $mediaFactory = Company::create([
            'name' => 'Media Factory',
            'slug' => 'media-factory'
        ]);
        
        $compile = Company::create([
            'name' => 'Compile',
            'slug' => 'compile'
        ]);
        
        CompanyGame::create([
            'game_id' => $culdcept_expansion_plus->id,
            'company_id' => $omiyaSoft->id,
            'is_developer' => true
        ]);
        
        CompanyGame::create([
            'game_id' => $culdcept_expansion_plus->id,
            'company_id' => $mediaFactory->id,
            'is_publisher' => true
        ]);        
        
        CompanyGame::create([
            'game_id' => $nintendo_super_famicom->id,
            'company_id' => $compile->id,
            'is_developer' => true,
            'is_publisher' => true
        ]);

        LexicalClass::create([
           'class' => 'noun'
        ]);

        LexemeItem::create([
            'item' => '日本'
        ]);

        LexemeMeaning::create([
           'meaning' => 'Japan'
        ]);

        LexemeReading::create([
           'reading' => 'にほん'
        ]);

        KanjiSymbol::create([
           'symbol' => '日',
           'reference' => 'a12.b3'
        ]);

        KanjiMeaning::create([
           'meaning' => 'day'
        ]);

        KanjiReading::create([
           'reading' => '二'
        ]);
    }
}
