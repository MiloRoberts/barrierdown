<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\Developer;
use App\Models\Game;
use App\Models\GameDeveloperCompany;
use App\Models\GameGenre;
use App\Models\GameSection;
use App\Models\GameSectionLexeme;
use App\Models\Genre;
use App\Models\Kanji;
use App\Models\KanjiMeaning;
use App\Models\KanjiReading;
use App\Models\KanjiSymbol;
use App\Models\Lexeme;
use App\Models\LexemeItem;
use App\Models\LexemeLexicalClass;
use App\Models\LexemeMeaning;
use App\Models\LexemeReading;
use App\Models\LexicalClass;
use App\Models\Platform;
use App\Models\Publisher;
use App\Models\Title;
use App\Models\VocabSize;
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
            'english_title' => 'Culdcept Expansion Plus',
            'japanese_title' => 'カルドセプト エキスパンション・プラス'
        ]);

        $super_puyo_puyo_tsuu_remix = Title::create([
            'english_title' => 'Super Puyo Puyo Tsuu Remix',
            'japanese_title' => 'すーぱーぷよぷよ通リミックス'
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

        $cardBattle = Genre::create([
            'name' => 'Card Battle',
            'slug' => 'card-battle'
        ]);

        $boardGame = Genre::create([
            'name' => 'Board Game',
            'slug' => 'board-game'
        ]);

        $puzzle = Genre::create([
            'name' => 'Puzzle',
            'slug' => 'puzzle'
        ]);
        
        $tileMatching = Genre::create([
            'name' => 'Tile Matching',
            'slug' => 'tile-matching'
        ]);

        $light = VocabSize::create([
            'size' => 'light'
        ]);

        $moderate = VocabSize::create([
            'size' => 'moderate'
        ]);

        $heavy = VocabSize::create([
            'size' => 'heavy'
        ]);

        Game::create([
            'platform_id' => $sony_playstation->id,
            'title_id' => $culdcept_expansion_plus->id,
            'slug' => 'culdcept-expansion-plus-sony-playstation',
            'as_publisher_company_id' => $mediaFactory->id,
            'vocab_size_id' => $moderate->id,
            'year_released' => 2000,
            'short_description' => 'Strategy game with customizable decks of spells and monsters'
        ]);

        Game::create([
            'platform_id' => $nintendo_super_famicom->id,
            'title_id' => $super_puyo_puyo_tsuu_remix->id,
            'slug' => 'super-puyo-puyo-tsuu-remix-super-famicom',
            'as_publisher_company_id' => $compile->id,
            'vocab_size_id' => $light->id,
            'year_released' => 1996,
            'short_description' => 'Competitive puzzle game with cast of charmingly wacky characters'
        ]);
        
        GameGenre::create([
            'game_id' => $culdcept_expansion_plus->id,
            'genre_id' => $cardBattle->id
        ]);

        GameGenre::create([
            'game_id' => $culdcept_expansion_plus->id,
            'genre_id' => $boardGame->id
        ]);

        GameGenre::create([
            'game_id' => $nintendo_super_famicom->id,
            'genre_id' => $tileMatching->id
        ]);

        GameGenre::create([
            'game_id' => $nintendo_super_famicom->id,
            'genre_id' => $puzzle->id
        ]);

        GameDeveloperCompany::create([
            'game_id' => $culdcept_expansion_plus->id,
            'company_id' => $omiyaSoft->id
        ]);
        
        GameDeveloperCompany::create([
            'game_id' => $nintendo_super_famicom->id,
            'company_id' => $compile->id
        ]);

        GameDeveloperCompany::create([
            'game_id' => $culdcept_expansion_plus->id,
            'company_id' => $compile->id
        ]);

        GameSection::create([
            'game_id' => $culdcept_expansion_plus->id,
            'name' => 'menus and starter cards'
        ]);

        GameSection::create([
            'game_id' => $culdcept_expansion_plus->id,
            'name' => 'common cards'
        ]);

        LexicalClass::create([
            'class' => 'noun'
        ]);

        LexicalClass::create([
            'class' => 'ichidan verb, transitive'
        ]);

        LexemeItem::create([
            'item' => '日本'
        ]);

        LexemeItem::create([
            'item' => 'やめる'
        ]);

        LexemeMeaning::create([
            'meaning' => 'Japan'
        ]);

        LexemeMeaning::create([
            'meaning' => 'to quit'
        ]);

        LexemeReading::create([
            'reading' => 'にほん'
        ]);

        LexemeReading::create([
            'reading' => ''
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

        Kanji::create([
            'kanji_symbol_id' => 1,
            'kanji_meaning_id' => 1,
            'kanji_reading_id' => 1,
        ]);

        Lexeme::create([
            'lexeme_item_id' => 1,
            'lexeme_meaning_id' => 1,
            'lexeme_reading_id' => 1
        ]);

        Lexeme::create([
            'lexeme_item_id' => 2,
            'lexeme_meaning_id' => 2,
            'lexeme_reading_id' => 2
        ]);

        LexemeLexicalClass::create([
            'lexeme_id' => 1,
            'lexical_class_id' => 1,
        ]);

        GameSectionLexeme::create([
            'game_section_id' => $culdcept_expansion_plus->id,
            'lexeme_id' => 1
        ]);
    }
}
