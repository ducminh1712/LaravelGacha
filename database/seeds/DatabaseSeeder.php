<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('ItemSeeder');
		$this->call('GachaSeeder');
		$this->call('GachaProbabilitySeeder');
	}

}

class ItemSeeder extends Seeder {
	public function run()
	{
		DB::table('items')->delete();

		DB::table('items')->insert(array(
			array(	'name' => 'Abaddon',
				'rarity' => 'common',
				'img' => "images/Abaddon_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Alchemist',
				'rarity' => 'common',
				'img' => "images/Alchemist_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Ancient Apparition',
				'rarity' => 'common',
				'img' => "images/Ancient_Apparition_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Anti-Mage',
				'rarity' => 'common',
				'img' => "images/Anti-Mage_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Axe',
				'rarity' => 'uncommon',
				'img' => "images/Axe_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Bane',
				'rarity' => 'uncommon',
				'img' => "images/Bane_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Batrider',
				'rarity' => 'uncommon',
				'img' => "images/Batrider_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Beastmaster',
				'rarity' => 'rare',
				'img' => "images/Beastmaster_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Bloodseeker',
				'rarity' => 'rare',
				'img' => "images/Bloodseeker_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Bounty Hunter',
				'rarity' => 'superrare',
				'img' => "images/Bounty_Hunter_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Brewmaster',
				'rarity' => 'common',
				'img' => "images/Brewmaster_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Bristleback',
				'rarity' => 'common',
				'img' => "images/Bristleback_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Broodmother',
				'rarity' => 'common',
				'img' => "images/Broodmother_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Centaur Warrunner',
				'rarity' => 'common',
				'img' => "images/Centaur_Warrunner_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Chaos Knight',
				'rarity' => 'uncommon',
				'img' => "images/Chaos_Knight_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Chen',
				'rarity' => 'uncommon',
				'img' => "images/Chen_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Clinkz',
				'rarity' => 'uncommon',
				'img' => "images/Clinkz_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Clockwerk',
				'rarity' => 'rare',
				'img' => "images/Clockwerk_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Crystal Maiden',
				'rarity' => 'rare',
				'img' => "images/Crystal_Maiden_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Dark Seer',
				'rarity' => 'superrare',
				'img' => "images/Dark_Seer_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Dazzle',
				'rarity' => 'common',
				'img' => "images/Dazzle_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Death Prophet',
				'rarity' => 'common',
				'img' => "images/Death_Prophet_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Disruptor',
				'rarity' => 'common',
				'img' => "images/Disruptor_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Doom',
				'rarity' => 'common',
				'img' => "images/Doom_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Dragon Knight',
				'rarity' => 'uncommon',
				'img' => "images/Dragon_Knight_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Drow Ranger',
				'rarity' => 'uncommon',
				'img' => "images/Drow_Ranger_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Earth Spirit',
				'rarity' => 'uncommon',
				'img' => "images/Earth_Spirit_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Earthshaker',
				'rarity' => 'rare',
				'img' => "images/Earthshaker_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Elder Titan',
				'rarity' => 'rare',
				'img' => "images/Elder_Titan_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Ember Spirit',
				'rarity' => 'superrare',
				'img' => "images/Ember_Spirit_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Enchantress',
				'rarity' => 'common',
				'img' => "images/Enchantress_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Enigma',
				'rarity' => 'common',
				'img' => "images/Enigma_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Faceless Void',
				'rarity' => 'common',
				'img' => "images/Faceless_Void_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Gyrocopter',
				'rarity' => 'common',
				'img' => "images/Gyrocopter_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Huskar',
				'rarity' => 'uncommon',
				'img' => "images/Huskar_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Invoker',
				'rarity' => 'uncommon',
				'img' => "images/Invoker_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Io',
				'rarity' => 'uncommon',
				'img' => "images/Io_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Jakiro',
				'rarity' => 'rare',
				'img' => "images/Jakiro_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Juggernaut',
				'rarity' => 'rare',
				'img' => "images/Juggernaut_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Keeper of the Light',
				'rarity' => 'superrare',
				'img' => "images/Keeper_of_the_Light_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Kunkka',
				'rarity' => 'common',
				'img' => "images/Kunkka_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Legion Commander',
				'rarity' => 'common',
				'img' => "images/Legion_Commander_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Leshrac',
				'rarity' => 'common',
				'img' => "images/Leshrac_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Lich',
				'rarity' => 'common',
				'img' => "images/Lich_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Lifestealer',
				'rarity' => 'uncommon',
				'img' => "images/Lifestealer_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Lina',
				'rarity' => 'uncommon',
				'img' => "images/Lina_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Lion',
				'rarity' => 'uncommon',
				'img' => "images/Lion_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Lone Druid',
				'rarity' => 'rare',
				'img' => "images/Lone_Druid_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Luna',
				'rarity' => 'rare',
				'img' => "images/Luna_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Lycan',
				'rarity' => 'superrare',
				'img' => "images/Lycan_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Magnus',
				'rarity' => 'common',
				'img' => "images/Magnus_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Medusa',
				'rarity' => 'common',
				'img' => "images/Medusa_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Meepo',
				'rarity' => 'common',
				'img' => "images/Meepo_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Mirana',
				'rarity' => 'common',
				'img' => "images/Mirana_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Morphling',
				'rarity' => 'uncommon',
				'img' => "images/Morphling_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Naga Siren',
				'rarity' => 'uncommon',
				'img' => "images/Naga_Siren_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Nature\'s Prophet',
				'rarity' => 'uncommon',
				'img' => "images/Nature's_Prophet_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Necrophos',
				'rarity' => 'rare',
				'img' => "images/Necrophos_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Night Stalker',
				'rarity' => 'rare',
				'img' => "images/Night_Stalker_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Nyx Assassin',
				'rarity' => 'superrare',
				'img' => "images/Nyx_Assassin_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Ogre Magi',
				'rarity' => 'common',
				'img' => "images/Ogre_Magi_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Omniknight',
				'rarity' => 'common',
				'img' => "images/Omniknight_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Oracle',
				'rarity' => 'common',
				'img' => "images/Oracle_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Outworld Devourer',
				'rarity' => 'common',
				'img' => "images/Outworld_Devourer_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Phantom Assassin',
				'rarity' => 'uncommon',
				'img' => "images/Phantom_Assassin_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Phantom Lancer',
				'rarity' => 'uncommon',
				'img' => "images/Phantom_Lancer_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Phoenix',
				'rarity' => 'uncommon',
				'img' => "images/Phoenix_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Puck',
				'rarity' => 'rare',
				'img' => "images/Puck_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Pudge',
				'rarity' => 'rare',
				'img' => "images/Pudge_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Pugna',
				'rarity' => 'superrare',
				'img' => "images/Pugna_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Queen of Pain',
				'rarity' => 'common',
				'img' => "images/Queen_of_Pain_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Razor',
				'rarity' => 'common',
				'img' => "images/Razor_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Riki',
				'rarity' => 'common',
				'img' => "images/Riki_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Rubick',
				'rarity' => 'common',
				'img' => "images/Rubick_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Sand King',
				'rarity' => 'uncommon',
				'img' => "images/Sand_King_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Shadow Demon',
				'rarity' => 'uncommon',
				'img' => "images/Shadow_Demon_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Shadow Fiend',
				'rarity' => 'uncommon',
				'img' => "images/Shadow_Fiend_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Shadow Shaman',
				'rarity' => 'rare',
				'img' => "images/Shadow_Shaman_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Silencer',
				'rarity' => 'rare',
				'img' => "images/Silencer_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Skywrath Mage',
				'rarity' => 'superrare',
				'img' => "images/Skywrath Mage_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Slardar',
				'rarity' => 'common',
				'img' => "images/Slardar_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Slark',
				'rarity' => 'common',
				'img' => "images/Slark_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Sniper',
				'rarity' => 'common',
				'img' => "images/Sniper_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Spectre',
				'rarity' => 'common',
				'img' => "images/Spectre_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Spirit Breaker',
				'rarity' => 'uncommon',
				'img' => "images/Spirit_Breaker_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Storm Spirit',
				'rarity' => 'uncommon',
				'img' => "images/Storm_Spirit_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Sven',
				'rarity' => 'uncommon',
				'img' => "images/Sven_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Techies',
				'rarity' => 'rare',
				'img' => "images/Techies_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Templar Assassin',
				'rarity' => 'rare',
				'img' => "images/Templar Assassin_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Terrorblade',
				'rarity' => 'superrare',
				'img' => "images/Terrorblade_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Tidehunter',
				'rarity' => 'common',
				'img' => "images/Tidehunter_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Timbersaw',
				'rarity' => 'common',
				'img' => "images/Timbersaw_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Tinker',
				'rarity' => 'common',
				'img' => "images/Tinker_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Tiny',
				'rarity' => 'common',
				'img' => "images/Tiny_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Treant Protector',
				'rarity' => 'uncommon',
				'img' => "images/Treant_Protector_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Troll Warlord',
				'rarity' => 'uncommon',
				'img' => "images/Troll Warlord_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Tusk',
				'rarity' => 'uncommon',
				'img' => "images/Tusk_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Undying',
				'rarity' => 'rare',
				'img' => "images/Undying_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Ursa',
				'rarity' => 'rare',
				'img' => "images/Ursa_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Vengeful Spirit',
				'rarity' => 'superrare',
				'img' => "images/Vengeful_Spirit_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Venomancer',
				'rarity' => 'common',
				'img' => "images/Venomancer_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Viper',
				'rarity' => 'common',
				'img' => "images/Viper_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Visage',
				'rarity' => 'common',
				'img' => "images/Visage_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Warlock',
				'rarity' => 'common',
				'img' => "images/Warlock_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Weaver',
				'rarity' => 'uncommon',
				'img' => "images/Weaver_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Windranger',
				'rarity' => 'uncommon',
				'img' => "images/Windranger_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Winter Wyvern',
				'rarity' => 'uncommon',
				'img' => "images/Winter_Wyvern_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Witch Doctor',
				'rarity' => 'rare',
				'img' => "images/Witch_Doctor_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Wraith King',
				'rarity' => 'rare',
				'img' => "images/Wraith_King_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Zeus',
				'rarity' => 'superrare',
				'img' => "images/Zeus_icon.png",
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
		));
	}
}

class GachaSeeder extends Seeder {
	public function run()
	{
		DB::table('gachas')->delete();

		DB::table('gachas')->insert(array(
			array(	'name' => 'Normal Gacha',
				'description' => "Can be drawn free once per 1 hour. 100 coins for each time",
				'cost' => 100,
				'reset_interval' => 3600,
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Exclusive Gacha',
				'description' => "Can be drawn free once daily. 1000 coins for each time",
				'cost' => 1000,
				'reset_interval' => 86400,
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
			array(	'name' => 'Box Gacha',
				'description' => "The box will be reset daily. 500 coins for each time",
				'cost' => 500,
				'reset_interval' => null,
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
		));
	}
}

class GachaProbabilitySeeder extends Seeder {
	public function run()
	{
		DB::table('gacha_probabilities')->delete();

		DB::table('gacha_probabilities')->insert(array(
			array(
				'gacha_id' => 1,
				'common_probability' => 70,
				'uncommon_probability' => 95,
				'rare_probability' => 99,
				'superrare_probability' => 100,
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
			),
			array(
				'gacha_id' => 2,
				'common_probability' => 10,
				'uncommon_probability' => 60,
				'rare_probability' => 90,
				'superrare_probability' => 100,
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
			),
		));
	}
}