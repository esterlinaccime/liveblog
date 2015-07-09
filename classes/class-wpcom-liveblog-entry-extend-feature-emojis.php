<?php

/**
 * Class WPCOM_Liveblog_Entry_Extend_Feature_Emojis
 *
 * The base class for autocomplete features.
 */
class WPCOM_Liveblog_Entry_Extend_Feature_Emojis extends WPCOM_Liveblog_Entry_Extend_Feature {

	/**
	 * The class prefix.
	 *
	 * @var string
	 */
	protected $class_prefix = 'emoji-';

	/**
	 * The emojis.
	 *
	 * @var string
	 */
	protected $emojis = array(
		'+1' => '+1',
		'-1' => '-1',
		'100' => '100',
		'1234' => '1234',
		'8ball' => '8ball',
		'a' => 'a',
		'ab' => 'ab',
		'abc' => 'abc',
		'abcd' => 'abcd',
		'accept' => 'accept',
		'aerial_tramway' => 'aerial_tramway',
		'airplane' => 'airplane',
		'alarm_clock' => 'alarm_clock',
		'alien' => 'alien',
		'ambulance' => 'ambulance',
		'anchor' => 'anchor',
		'angel' => 'angel',
		'anger' => 'anger',
		'angry' => 'angry',
		'anguished' => 'anguished',
		'ant' => 'ant',
		'apple' => 'apple',
		'aquarius' => 'aquarius',
		'aries' => 'aries',
		'arrow_backward' => 'arrow_backward',
		'arrow_double_down' => 'arrow_double_down',
		'arrow_double_up' => 'arrow_double_up',
		'arrow_down' => 'arrow_down',
		'arrow_down_small' => 'arrow_down_small',
		'arrow_forward' => 'arrow_forward',
		'arrow_heading_down' => 'arrow_heading_down',
		'arrow_heading_up' => 'arrow_heading_up',
		'arrow_left' => 'arrow_left',
		'arrow_lower_left' => 'arrow_lower_left',
		'arrow_lower_right' => 'arrow_lower_right',
		'arrow_right' => 'arrow_right',
		'arrow_right_hook' => 'arrow_right_hook',
		'arrow_up' => 'arrow_up',
		'arrow_up_down' => 'arrow_up_down',
		'arrow_up_small' => 'arrow_up_small',
		'arrow_upper_left' => 'arrow_upper_left',
		'arrow_upper_right' => 'arrow_upper_right',
		'arrows_clockwise' => 'arrows_clockwise',
		'arrows_counterclockwise' => 'arrows_counterclockwise',
		'art' => 'art',
		'articulated_lorry' => 'articulated_lorry',
		'astonished' => 'astonished',
		'atm' => 'atm',
		'b' => 'b',
		'baby' => 'baby',
		'baby_bottle' => 'baby_bottle',
		'baby_chick' => 'baby_chick',
		'baby_symbol' => 'baby_symbol',
		'back' => 'back',
		'baggage_claim' => 'baggage_claim',
		'balloon' => 'balloon',
		'ballot_box_with_check' => 'ballot_box_with_check',
		'bamboo' => 'bamboo',
		'banana' => 'banana',
		'bangbang' => 'bangbang',
		'bank' => 'bank',
		'bar_chart' => 'bar_chart',
		'barber' => 'barber',
		'baseball' => 'baseball',
		'basketball' => 'basketball',
		'bath' => 'bath',
		'bathtub' => 'bathtub',
		'battery' => 'battery',
		'bear' => 'bear',
		'bee' => 'bee',
		'beer' => 'beer',
		'beers' => 'beers',
		'beetle' => 'beetle',
		'beginner' => 'beginner',
		'bell' => 'bell',
		'bento' => 'bento',
		'bicyclist' => 'bicyclist',
		'bike' => 'bike',
		'bikini' => 'bikini',
		'bird' => 'bird',
		'birthday' => 'birthday',
		'black_circle' => 'black_circle',
		'black_joker' => 'black_joker',
		'black_medium_small_square' => 'black_medium_small_square',
		'black_medium_square' => 'black_medium_square',
		'black_nib' => 'black_nib',
		'black_small_square' => 'black_small_square',
		'black_square' => 'black_square',
		'black_square_button' => 'black_square_button',
		'blossom' => 'blossom',
		'blowfish' => 'blowfish',
		'blue_book' => 'blue_book',
		'blue_car' => 'blue_car',
		'blue_heart' => 'blue_heart',
		'blush' => 'blush',
		'boar' => 'boar',
		'boat' => 'boat',
		'bomb' => 'bomb',
		'book' => 'book',
		'bookmark' => 'bookmark',
		'bookmark_tabs' => 'bookmark_tabs',
		'books' => 'books',
		'boom' => 'boom',
		'boot' => 'boot',
		'bouquet' => 'bouquet',
		'bow' => 'bow',
		'bowling' => 'bowling',
		'bowtie' => 'bowtie',
		'boy' => 'boy',
		'bread' => 'bread',
		'bride_with_veil' => 'bride_with_veil',
		'bridge_at_night' => 'bridge_at_night',
		'briefcase' => 'briefcase',
		'broken_heart' => 'broken_heart',
		'bug' => 'bug',
		'bulb' => 'bulb',
		'bullettrain_front' => 'bullettrain_front',
		'bullettrain_side' => 'bullettrain_side',
		'bus' => 'bus',
		'busstop' => 'busstop',
		'bust_in_silhouette' => 'bust_in_silhouette',
		'busts_in_silhouette' => 'busts_in_silhouette',
		'cactus' => 'cactus',
		'cake' => 'cake',
		'calendar' => 'calendar',
		'calling' => 'calling',
		'camel' => 'camel',
		'camera' => 'camera',
		'cancer' => 'cancer',
		'candy' => 'candy',
		'capital_abcd' => 'capital_abcd',
		'capricorn' => 'capricorn',
		'car' => 'car',
		'card_index' => 'card_index',
		'carousel_horse' => 'carousel_horse',
		'cat' => 'cat',
		'cat2' => 'cat2',
		'cd' => 'cd',
		'chart' => 'chart',
		'chart_with_downwards_trend' => 'chart_with_downwards_trend',
		'chart_with_upwards_trend' => 'chart_with_upwards_trend',
		'checkered_flag' => 'checkered_flag',
		'cherries' => 'cherries',
		'cherry_blossom' => 'cherry_blossom',
		'chestnut' => 'chestnut',
		'chicken' => 'chicken',
		'children_crossing' => 'children_crossing',
		'chocolate_bar' => 'chocolate_bar',
		'christmas_tree' => 'christmas_tree',
		'church' => 'church',
		'cinema' => 'cinema',
		'circus_tent' => 'circus_tent',
		'city_sunrise' => 'city_sunrise',
		'city_sunset' => 'city_sunset',
		'cl' => 'cl',
		'clap' => 'clap',
		'clapper' => 'clapper',
		'clipboard' => 'clipboard',
		'clock1' => 'clock1',
		'clock10' => 'clock10',
		'clock1030' => 'clock1030',
		'clock11' => 'clock11',
		'clock1130' => 'clock1130',
		'clock12' => 'clock12',
		'clock1230' => 'clock1230',
		'clock130' => 'clock130',
		'clock2' => 'clock2',
		'clock230' => 'clock230',
		'clock3' => 'clock3',
		'clock330' => 'clock330',
		'clock4' => 'clock4',
		'clock430' => 'clock430',
		'clock5' => 'clock5',
		'clock530' => 'clock530',
		'clock6' => 'clock6',
		'clock630' => 'clock630',
		'clock7' => 'clock7',
		'clock730' => 'clock730',
		'clock8' => 'clock8',
		'clock830' => 'clock830',
		'clock9' => 'clock9',
		'clock930' => 'clock930',
		'closed_book' => 'closed_book',
		'closed_lock_with_key' => 'closed_lock_with_key',
		'closed_umbrella' => 'closed_umbrella',
		'cloud' => 'cloud',
		'clubs' => 'clubs',
		'cn' => 'cn',
		'cocktail' => 'cocktail',
		'coffee' => 'coffee',
		'cold_sweat' => 'cold_sweat',
		'collision' => 'collision',
		'computer' => 'computer',
		'confetti_ball' => 'confetti_ball',
		'confounded' => 'confounded',
		'confused' => 'confused',
		'congratulations' => 'congratulations',
		'construction' => 'construction',
		'construction_worker' => 'construction_worker',
		'convenience_store' => 'convenience_store',
		'cookie' => 'cookie',
		'cool' => 'cool',
		'cop' => 'cop',
		'copyright' => 'copyright',
		'corn' => 'corn',
		'couple' => 'couple',
		'couple_with_heart' => 'couple_with_heart',
		'couplekiss' => 'couplekiss',
		'cow' => 'cow',
		'cow2' => 'cow2',
		'credit_card' => 'credit_card',
		'crescent_moon' => 'crescent_moon',
		'crocodile' => 'crocodile',
		'crossed_flags' => 'crossed_flags',
		'crown' => 'crown',
		'cry' => 'cry',
		'crying_cat_face' => 'crying_cat_face',
		'crystal_ball' => 'crystal_ball',
		'cupid' => 'cupid',
		'curly_loop' => 'curly_loop',
		'currency_exchange' => 'currency_exchange',
		'curry' => 'curry',
		'custard' => 'custard',
		'customs' => 'customs',
		'cyclone' => 'cyclone',
		'dancer' => 'dancer',
		'dancers' => 'dancers',
		'dango' => 'dango',
		'dart' => 'dart',
		'dash' => 'dash',
		'date' => 'date',
		'de' => 'de',
		'deciduous_tree' => 'deciduous_tree',
		'department_store' => 'department_store',
		'diamond_shape_with_a_dot_inside' => 'diamond_shape_with_a_dot_inside',
		'diamonds' => 'diamonds',
		'disappointed' => 'disappointed',
		'disappointed_relieved' => 'disappointed_relieved',
		'dizzy' => 'dizzy',
		'dizzy_face' => 'dizzy_face',
		'do_not_litter' => 'do_not_litter',
		'dog' => 'dog',
		'dog2' => 'dog2',
		'dollar' => 'dollar',
		'dolls' => 'dolls',
		'dolphin' => 'dolphin',
		'donut' => 'donut',
		'door' => 'door',
		'doughnut' => 'doughnut',
		'dragon' => 'dragon',
		'dragon_face' => 'dragon_face',
		'dress' => 'dress',
		'dromedary_camel' => 'dromedary_camel',
		'droplet' => 'droplet',
		'dvd' => 'dvd',
		'e-mail' => 'e-mail',
		'ear' => 'ear',
		'ear_of_rice' => 'ear_of_rice',
		'earth_africa' => 'earth_africa',
		'earth_americas' => 'earth_americas',
		'earth_asia' => 'earth_asia',
		'egg' => 'egg',
		'eggplant' => 'eggplant',
		'eight' => 'eight',
		'eight_pointed_black_star' => 'eight_pointed_black_star',
		'eight_spoked_asterisk' => 'eight_spoked_asterisk',
		'electric_plug' => 'electric_plug',
		'elephant' => 'elephant',
		'email' => 'email',
		'end' => 'end',
		'envelope' => 'envelope',
		'es' => 'es',
		'euro' => 'euro',
		'european_castle' => 'european_castle',
		'european_post_office' => 'european_post_office',
		'evergreen_tree' => 'evergreen_tree',
		'exclamation' => 'exclamation',
		'expressionless' => 'expressionless',
		'eyeglasses' => 'eyeglasses',
		'eyes' => 'eyes',
		'facepunch' => 'facepunch',
		'factory' => 'factory',
		'fallen_leaf' => 'fallen_leaf',
		'family' => 'family',
		'fast_forward' => 'fast_forward',
		'fax' => 'fax',
		'fearful' => 'fearful',
		'feelsgood' => 'feelsgood',
		'feet' => 'feet',
		'ferris_wheel' => 'ferris_wheel',
		'file_folder' => 'file_folder',
		'finnadie' => 'finnadie',
		'fire' => 'fire',
		'fire_engine' => 'fire_engine',
		'fireworks' => 'fireworks',
		'first_quarter_moon' => 'first_quarter_moon',
		'first_quarter_moon_with_face' => 'first_quarter_moon_with_face',
		'fish' => 'fish',
		'fish_cake' => 'fish_cake',
		'fishing_pole_and_fish' => 'fishing_pole_and_fish',
		'fist' => 'fist',
		'five' => 'five',
		'flags' => 'flags',
		'flashlight' => 'flashlight',
		'floppy_disk' => 'floppy_disk',
		'flower_playing_cards' => 'flower_playing_cards',
		'flushed' => 'flushed',
		'foggy' => 'foggy',
		'football' => 'football',
		'fork_and_knife' => 'fork_and_knife',
		'fountain' => 'fountain',
		'four' => 'four',
		'four_leaf_clover' => 'four_leaf_clover',
		'fr' => 'fr',
		'free' => 'free',
		'fried_shrimp' => 'fried_shrimp',
		'fries' => 'fries',
		'frog' => 'frog',
		'frowning' => 'frowning',
		'fu' => 'fu',
		'fuelpump' => 'fuelpump',
		'full_moon' => 'full_moon',
		'full_moon_with_face' => 'full_moon_with_face',
		'game_die' => 'game_die',
		'gb' => 'gb',
		'gem' => 'gem',
		'gemini' => 'gemini',
		'ghost' => 'ghost',
		'gift' => 'gift',
		'gift_heart' => 'gift_heart',
		'girl' => 'girl',
		'globe_with_meridians' => 'globe_with_meridians',
		'goat' => 'goat',
		'goberserk' => 'goberserk',
		'godmode' => 'godmode',
		'golf' => 'golf',
		'grapes' => 'grapes',
		'green_apple' => 'green_apple',
		'green_book' => 'green_book',
		'green_heart' => 'green_heart',
		'grey_exclamation' => 'grey_exclamation',
		'grey_question' => 'grey_question',
		'grimacing' => 'grimacing',
		'grin' => 'grin',
		'grinning' => 'grinning',
		'guardsman' => 'guardsman',
		'guitar' => 'guitar',
		'gun' => 'gun',
		'haircut' => 'haircut',
		'hamburger' => 'hamburger',
		'hammer' => 'hammer',
		'hamster' => 'hamster',
		'hand' => 'hand',
		'handbag' => 'handbag',
		'hankey' => 'hankey',
		'hash' => 'hash',
		'hatched_chick' => 'hatched_chick',
		'hatching_chick' => 'hatching_chick',
		'headphones' => 'headphones',
		'hear_no_evil' => 'hear_no_evil',
		'heart' => 'heart',
		'heart_decoration' => 'heart_decoration',
		'heart_eyes' => 'heart_eyes',
		'heart_eyes_cat' => 'heart_eyes_cat',
		'heartbeat' => 'heartbeat',
		'heartpulse' => 'heartpulse',
		'hearts' => 'hearts',
		'heavy_check_mark' => 'heavy_check_mark',
		'heavy_division_sign' => 'heavy_division_sign',
		'heavy_dollar_sign' => 'heavy_dollar_sign',
		'heavy_exclamation_mark' => 'heavy_exclamation_mark',
		'heavy_minus_sign' => 'heavy_minus_sign',
		'heavy_multiplication_x' => 'heavy_multiplication_x',
		'heavy_plus_sign' => 'heavy_plus_sign',
		'helicopter' => 'helicopter',
		'herb' => 'herb',
		'hibiscus' => 'hibiscus',
		'high_brightness' => 'high_brightness',
		'high_heel' => 'high_heel',
		'hocho' => 'hocho',
		'honey_pot' => 'honey_pot',
		'honeybee' => 'honeybee',
		'horse' => 'horse',
		'horse_racing' => 'horse_racing',
		'hospital' => 'hospital',
		'hotel' => 'hotel',
		'hotsprings' => 'hotsprings',
		'hourglass' => 'hourglass',
		'hourglass_flowing_sand' => 'hourglass_flowing_sand',
		'house' => 'house',
		'house_with_garden' => 'house_with_garden',
		'hurtrealbad' => 'hurtrealbad',
		'hushed' => 'hushed',
		'ice_cream' => 'ice_cream',
		'icecream' => 'icecream',
		'id' => 'id',
		'ideograph_advantage' => 'ideograph_advantage',
		'imp' => 'imp',
		'inbox_tray' => 'inbox_tray',
		'incoming_envelope' => 'incoming_envelope',
		'information_desk_person' => 'information_desk_person',
		'information_source' => 'information_source',
		'innocent' => 'innocent',
		'interrobang' => 'interrobang',
		'iphone' => 'iphone',
		'it' => 'it',
		'izakaya_lantern' => 'izakaya_lantern',
		'jack_o_lantern' => 'jack_o_lantern',
		'japan' => 'japan',
		'japanese_castle' => 'japanese_castle',
		'japanese_goblin' => 'japanese_goblin',
		'japanese_ogre' => 'japanese_ogre',
		'jeans' => 'jeans',
		'joy' => 'joy',
		'joy_cat' => 'joy_cat',
		'jp' => 'jp',
		'key' => 'key',
		'keycap_ten' => 'keycap_ten',
		'kimono' => 'kimono',
		'kiss' => 'kiss',
		'kissing' => 'kissing',
		'kissing_cat' => 'kissing_cat',
		'kissing_closed_eyes' => 'kissing_closed_eyes',
		'kissing_face' => 'kissing_face',
		'kissing_heart' => 'kissing_heart',
		'kissing_smiling_eyes' => 'kissing_smiling_eyes',
		'koala' => 'koala',
		'koko' => 'koko',
		'kr' => 'kr',
		'large_blue_circle' => 'large_blue_circle',
		'large_blue_diamond' => 'large_blue_diamond',
		'large_orange_diamond' => 'large_orange_diamond',
		'last_quarter_moon' => 'last_quarter_moon',
		'last_quarter_moon_with_face' => 'last_quarter_moon_with_face',
		'laughing' => 'laughing',
		'leaves' => 'leaves',
		'ledger' => 'ledger',
		'left_luggage' => 'left_luggage',
		'left_right_arrow' => 'left_right_arrow',
		'leftwards_arrow_with_hook' => 'leftwards_arrow_with_hook',
		'lemon' => 'lemon',
		'leo' => 'leo',
		'leopard' => 'leopard',
		'libra' => 'libra',
		'light_rail' => 'light_rail',
		'link' => 'link',
		'lips' => 'lips',
		'lipstick' => 'lipstick',
		'lock' => 'lock',
		'lock_with_ink_pen' => 'lock_with_ink_pen',
		'lollipop' => 'lollipop',
		'loop' => 'loop',
		'loudspeaker' => 'loudspeaker',
		'love_hotel' => 'love_hotel',
		'love_letter' => 'love_letter',
		'low_brightness' => 'low_brightness',
		'm' => 'm',
		'mag' => 'mag',
		'mag_right' => 'mag_right',
		'mahjong' => 'mahjong',
		'mailbox' => 'mailbox',
		'mailbox_closed' => 'mailbox_closed',
		'mailbox_with_mail' => 'mailbox_with_mail',
		'mailbox_with_no_mail' => 'mailbox_with_no_mail',
		'man' => 'man',
		'man_with_gua_pi_mao' => 'man_with_gua_pi_mao',
		'man_with_turban' => 'man_with_turban',
		'mans_shoe' => 'mans_shoe',
		'maple_leaf' => 'maple_leaf',
		'mask' => 'mask',
		'massage' => 'massage',
		'meat_on_bone' => 'meat_on_bone',
		'mega' => 'mega',
		'melon' => 'melon',
		'memo' => 'memo',
		'mens' => 'mens',
		'metal' => 'metal',
		'metro' => 'metro',
		'microphone' => 'microphone',
		'microscope' => 'microscope',
		'milky_way' => 'milky_way',
		'minibus' => 'minibus',
		'minidisc' => 'minidisc',
		'mobile_phone_off' => 'mobile_phone_off',
		'money_with_wings' => 'money_with_wings',
		'moneybag' => 'moneybag',
		'monkey' => 'monkey',
		'monkey_face' => 'monkey_face',
		'monorail' => 'monorail',
		'mortar_board' => 'mortar_board',
		'mount_fuji' => 'mount_fuji',
		'mountain_bicyclist' => 'mountain_bicyclist',
		'mountain_cableway' => 'mountain_cableway',
		'mountain_railway' => 'mountain_railway',
		'mouse' => 'mouse',
		'mouse2' => 'mouse2',
		'movie_camera' => 'movie_camera',
		'moyai' => 'moyai',
		'muscle' => 'muscle',
		'mushroom' => 'mushroom',
		'musical_keyboard' => 'musical_keyboard',
		'musical_note' => 'musical_note',
		'musical_score' => 'musical_score',
		'mute' => 'mute',
		'nail_care' => 'nail_care',
		'name_badge' => 'name_badge',
		'neckbeard' => 'neckbeard',
		'necktie' => 'necktie',
		'negative_squared_cross_mark' => 'negative_squared_cross_mark',
		'neutral_face' => 'neutral_face',
		'new' => 'new',
		'new_moon' => 'new_moon',
		'new_moon_with_face' => 'new_moon_with_face',
		'newspaper' => 'newspaper',
		'ng' => 'ng',
		'nine' => 'nine',
		'no_bell' => 'no_bell',
		'no_bicycles' => 'no_bicycles',
		'no_entry' => 'no_entry',
		'no_entry_sign' => 'no_entry_sign',
		'no_good' => 'no_good',
		'no_mobile_phones' => 'no_mobile_phones',
		'no_mouth' => 'no_mouth',
		'no_pedestrians' => 'no_pedestrians',
		'no_smoking' => 'no_smoking',
		'non-potable_water' => 'non-potable_water',
		'nose' => 'nose',
		'notebook' => 'notebook',
		'notebook_with_decorative_cover' => 'notebook_with_decorative_cover',
		'notes' => 'notes',
		'nut_and_bolt' => 'nut_and_bolt',
		'o' => 'o',
		'o2' => 'o2',
		'ocean' => 'ocean',
		'octocat' => 'octocat',
		'octopus' => 'octopus',
		'oden' => 'oden',
		'office' => 'office',
		'ok' => 'ok',
		'ok_hand' => 'ok_hand',
		'ok_woman' => 'ok_woman',
		'older_man' => 'older_man',
		'older_woman' => 'older_woman',
		'on' => 'on',
		'oncoming_automobile' => 'oncoming_automobile',
		'oncoming_bus' => 'oncoming_bus',
		'oncoming_police_car' => 'oncoming_police_car',
		'oncoming_taxi' => 'oncoming_taxi',
		'one' => 'one',
		'open_file_folder' => 'open_file_folder',
		'open_hands' => 'open_hands',
		'open_mouth' => 'open_mouth',
		'ophiuchus' => 'ophiuchus',
		'orange_book' => 'orange_book',
		'outbox_tray' => 'outbox_tray',
		'ox' => 'ox',
		'package' => 'package',
		'page_facing_up' => 'page_facing_up',
		'page_with_curl' => 'page_with_curl',
		'pager' => 'pager',
		'palm_tree' => 'palm_tree',
		'panda_face' => 'panda_face',
		'paperclip' => 'paperclip',
		'parking' => 'parking',
		'part_alternation_mark' => 'part_alternation_mark',
		'partly_sunny' => 'partly_sunny',
		'passport_control' => 'passport_control',
		'paw_prints' => 'paw_prints',
		'peach' => 'peach',
		'pear' => 'pear',
		'pencil' => 'pencil',
		'pencil2' => 'pencil2',
		'penguin' => 'penguin',
		'pensive' => 'pensive',
		'performing_arts' => 'performing_arts',
		'persevere' => 'persevere',
		'person_frowning' => 'person_frowning',
		'person_with_blond_hair' => 'person_with_blond_hair',
		'person_with_pouting_face' => 'person_with_pouting_face',
		'phone' => 'phone',
		'pig' => 'pig',
		'pig2' => 'pig2',
		'pig_nose' => 'pig_nose',
		'pill' => 'pill',
		'pineapple' => 'pineapple',
		'pisces' => 'pisces',
		'pizza' => 'pizza',
		'plus1' => 'plus1',
		'point_down' => 'point_down',
		'point_left' => 'point_left',
		'point_right' => 'point_right',
		'point_up' => 'point_up',
		'point_up_2' => 'point_up_2',
		'police_car' => 'police_car',
		'poodle' => 'poodle',
		'poop' => 'poop',
		'post_office' => 'post_office',
		'postal_horn' => 'postal_horn',
		'postbox' => 'postbox',
		'potable_water' => 'potable_water',
		'pouch' => 'pouch',
		'poultry_leg' => 'poultry_leg',
		'pound' => 'pound',
		'pouting_cat' => 'pouting_cat',
		'pray' => 'pray',
		'princess' => 'princess',
		'punch' => 'punch',
		'purple_heart' => 'purple_heart',
		'purse' => 'purse',
		'pushpin' => 'pushpin',
		'put_litter_in_its_place' => 'put_litter_in_its_place',
		'question' => 'question',
		'rabbit' => 'rabbit',
		'rabbit2' => 'rabbit2',
		'racehorse' => 'racehorse',
		'radio' => 'radio',
		'radio_button' => 'radio_button',
		'rage' => 'rage',
		'rage1' => 'rage1',
		'rage2' => 'rage2',
		'rage3' => 'rage3',
		'rage4' => 'rage4',
		'railway_car' => 'railway_car',
		'rainbow' => 'rainbow',
		'raised_hand' => 'raised_hand',
		'raised_hands' => 'raised_hands',
		'raising_hand' => 'raising_hand',
		'ram' => 'ram',
		'ramen' => 'ramen',
		'rat' => 'rat',
		'recycle' => 'recycle',
		'red_car' => 'red_car',
		'red_circle' => 'red_circle',
		'registered' => 'registered',
		'relaxed' => 'relaxed',
		'relieved' => 'relieved',
		'repeat' => 'repeat',
		'repeat_one' => 'repeat_one',
		'restroom' => 'restroom',
		'revolving_hearts' => 'revolving_hearts',
		'rewind' => 'rewind',
		'ribbon' => 'ribbon',
		'rice' => 'rice',
		'rice_ball' => 'rice_ball',
		'rice_cracker' => 'rice_cracker',
		'rice_scene' => 'rice_scene',
		'ring' => 'ring',
		'rocket' => 'rocket',
		'roller_coaster' => 'roller_coaster',
		'rooster' => 'rooster',
		'rose' => 'rose',
		'rotating_light' => 'rotating_light',
		'round_pushpin' => 'round_pushpin',
		'rowboat' => 'rowboat',
		'ru' => 'ru',
		'rugby_football' => 'rugby_football',
		'runner' => 'runner',
		'running' => 'running',
		'running_shirt_with_sash' => 'running_shirt_with_sash',
		'sa' => 'sa',
		'sagittarius' => 'sagittarius',
		'sailboat' => 'sailboat',
		'sake' => 'sake',
		'sandal' => 'sandal',
		'santa' => 'santa',
		'satellite' => 'satellite',
		'satisfied' => 'satisfied',
		'saxophone' => 'saxophone',
		'school' => 'school',
		'school_satchel' => 'school_satchel',
		'scissors' => 'scissors',
		'scorpius' => 'scorpius',
		'scream' => 'scream',
		'scream_cat' => 'scream_cat',
		'scroll' => 'scroll',
		'seat' => 'seat',
		'secret' => 'secret',
		'see_no_evil' => 'see_no_evil',
		'seedling' => 'seedling',
		'seven' => 'seven',
		'shaved_ice' => 'shaved_ice',
		'sheep' => 'sheep',
		'shell' => 'shell',
		'ship' => 'ship',
		'shipit' => 'shipit',
		'shirt' => 'shirt',
		'shit' => 'shit',
		'shoe' => 'shoe',
		'shower' => 'shower',
		'signal_strength' => 'signal_strength',
		'six' => 'six',
		'six_pointed_star' => 'six_pointed_star',
		'ski' => 'ski',
		'skull' => 'skull',
		'sleeping' => 'sleeping',
		'sleepy' => 'sleepy',
		'slot_machine' => 'slot_machine',
		'small_blue_diamond' => 'small_blue_diamond',
		'small_orange_diamond' => 'small_orange_diamond',
		'small_red_triangle' => 'small_red_triangle',
		'small_red_triangle_down' => 'small_red_triangle_down',
		'smile' => 'smile',
		'smile_cat' => 'smile_cat',
		'smiley' => 'smiley',
		'smiley_cat' => 'smiley_cat',
		'smiling_imp' => 'smiling_imp',
		'smirk' => 'smirk',
		'smirk_cat' => 'smirk_cat',
		'smoking' => 'smoking',
		'snail' => 'snail',
		'snake' => 'snake',
		'snowboarder' => 'snowboarder',
		'snowflake' => 'snowflake',
		'snowman' => 'snowman',
		'sob' => 'sob',
		'soccer' => 'soccer',
		'soon' => 'soon',
		'sos' => 'sos',
		'sound' => 'sound',
		'space_invader' => 'space_invader',
		'spades' => 'spades',
		'spaghetti' => 'spaghetti',
		'sparkle' => 'sparkle',
		'sparkler' => 'sparkler',
		'sparkles' => 'sparkles',
		'sparkling_heart' => 'sparkling_heart',
		'speak_no_evil' => 'speak_no_evil',
		'speaker' => 'speaker',
		'speech_balloon' => 'speech_balloon',
		'speedboat' => 'speedboat',
		'squirrel' => 'squirrel',
		'star' => 'star',
		'star2' => 'star2',
		'stars' => 'stars',
		'station' => 'station',
		'statue_of_liberty' => 'statue_of_liberty',
		'steam_locomotive' => 'steam_locomotive',
		'stew' => 'stew',
		'straight_ruler' => 'straight_ruler',
		'strawberry' => 'strawberry',
		'stuck_out_tongue' => 'stuck_out_tongue',
		'stuck_out_tongue_closed_eyes' => 'stuck_out_tongue_closed_eyes',
		'stuck_out_tongue_winking_eye' => 'stuck_out_tongue_winking_eye',
		'sun_with_face' => 'sun_with_face',
		'sunflower' => 'sunflower',
		'sunglasses' => 'sunglasses',
		'sunny' => 'sunny',
		'sunrise' => 'sunrise',
		'sunrise_over_mountains' => 'sunrise_over_mountains',
		'surfer' => 'surfer',
		'sushi' => 'sushi',
		'suspect' => 'suspect',
		'suspension_railway' => 'suspension_railway',
		'sweat' => 'sweat',
		'sweat_drops' => 'sweat_drops',
		'sweat_smile' => 'sweat_smile',
		'sweet_potato' => 'sweet_potato',
		'swimmer' => 'swimmer',
		'symbols' => 'symbols',
		'syringe' => 'syringe',
		'tada' => 'tada',
		'tanabata_tree' => 'tanabata_tree',
		'tangerine' => 'tangerine',
		'taurus' => 'taurus',
		'taxi' => 'taxi',
		'tea' => 'tea',
		'telephone' => 'telephone',
		'telephone_receiver' => 'telephone_receiver',
		'telescope' => 'telescope',
		'tennis' => 'tennis',
		'tent' => 'tent',
		'thought_balloon' => 'thought_balloon',
		'three' => 'three',
		'thumbsdown' => 'thumbsdown',
		'thumbsup' => 'thumbsup',
		'ticket' => 'ticket',
		'tiger' => 'tiger',
		'tiger2' => 'tiger2',
		'tired_face' => 'tired_face',
		'tm' => 'tm',
		'toilet' => 'toilet',
		'tokyo_tower' => 'tokyo_tower',
		'tomato' => 'tomato',
		'tongue' => 'tongue',
		'top' => 'top',
		'tophat' => 'tophat',
		'tractor' => 'tractor',
		'traffic_light' => 'traffic_light',
		'train' => 'train',
		'train2' => 'train2',
		'tram' => 'tram',
		'triangular_flag_on_post' => 'triangular_flag_on_post',
		'triangular_ruler' => 'triangular_ruler',
		'trident' => 'trident',
		'triumph' => 'triumph',
		'trolleybus' => 'trolleybus',
		'trollface' => 'trollface',
		'trophy' => 'trophy',
		'tropical_drink' => 'tropical_drink',
		'tropical_fish' => 'tropical_fish',
		'truck' => 'truck',
		'trumpet' => 'trumpet',
		'tshirt' => 'tshirt',
		'tulip' => 'tulip',
		'turtle' => 'turtle',
		'tv' => 'tv',
		'twisted_rightwards_arrows' => 'twisted_rightwards_arrows',
		'two' => 'two',
		'two_hearts' => 'two_hearts',
		'two_men_holding_hands' => 'two_men_holding_hands',
		'two_women_holding_hands' => 'two_women_holding_hands',
		'u5272' => 'u5272',
		'u5408' => 'u5408',
		'u55b6' => 'u55b6',
		'u6307' => 'u6307',
		'u6708' => 'u6708',
		'u6709' => 'u6709',
		'u6e80' => 'u6e80',
		'u7121' => 'u7121',
		'u7533' => 'u7533',
		'u7981' => 'u7981',
		'u7a7a' => 'u7a7a',
		'uk' => 'uk',
		'umbrella' => 'umbrella',
		'unamused' => 'unamused',
		'underage' => 'underage',
		'unlock' => 'unlock',
		'up' => 'up',
		'us' => 'us',
		'v' => 'v',
		'vertical_traffic_light' => 'vertical_traffic_light',
		'vhs' => 'vhs',
		'vibration_mode' => 'vibration_mode',
		'video_camera' => 'video_camera',
		'video_game' => 'video_game',
		'violin' => 'violin',
		'virgo' => 'virgo',
		'volcano' => 'volcano',
		'vs' => 'vs',
		'walking' => 'walking',
		'waning_crescent_moon' => 'waning_crescent_moon',
		'waning_gibbous_moon' => 'waning_gibbous_moon',
		'warning' => 'warning',
		'watch' => 'watch',
		'water_buffalo' => 'water_buffalo',
		'watermelon' => 'watermelon',
		'wave' => 'wave',
		'wavy_dash' => 'wavy_dash',
		'waxing_crescent_moon' => 'waxing_crescent_moon',
		'waxing_gibbous_moon' => 'waxing_gibbous_moon',
		'wc' => 'wc',
		'weary' => 'weary',
		'wedding' => 'wedding',
		'whale' => 'whale',
		'whale2' => 'whale2',
		'wheelchair' => 'wheelchair',
		'white_check_mark' => 'white_check_mark',
		'white_circle' => 'white_circle',
		'white_flower' => 'white_flower',
		'white_large_square' => 'white_large_square',
		'white_medium_small_square' => 'white_medium_small_square',
		'white_medium_square' => 'white_medium_square',
		'white_small_square' => 'white_small_square',
		'white_square_button' => 'white_square_button',
		'wind_chime' => 'wind_chime',
		'wine_glass' => 'wine_glass',
		'wink' => 'wink',
		'wolf' => 'wolf',
		'woman' => 'woman',
		'womans_clothes' => 'womans_clothes',
		'womans_hat' => 'womans_hat',
		'womens' => 'womens',
		'worried' => 'worried',
		'wrench' => 'wrench',
		'x' => 'x',
		'yellow_heart' => 'yellow_heart',
		'yen' => 'yen',
		'yum' => 'yum',
		'zap' => 'zap',
		'zero' => 'zero',
		'zzz' => 'zzz',
	);

	/**
	 * The character prefixes.
	 *
	 * @var array
	 */
	protected $prefixes = array( ':', '\x{003a}' );

	/**
	 * Called by WPCOM_Liveblog_Entry_Extend::load()
	 *
	 * @return void
	 */
	public function load() {
		$this->class_prefix = apply_filters( 'liveblog_emoji_class', $this->class_prefix );
		$this->emojis       = apply_filters( 'liveblog_active_emojis', $this->emojis );

		add_filter( 'comment_class', array( $this, 'add_emoji_class_to_entry' ), 10, 3 );
	}

	/**
	 * Gets the autocomplete config.
	 *
	 * @param array $config
	 * @return array
	 */
	public function get_config( $config ) {
		$emojis = array();
		foreach ($this->get_emojis() as $key => $val) {
			$emojis[] = array( 'key' => $key, 'name' => $val );
		}

		$config[] = array(
			'at'         => $this->get_prefixes()[0],
			'data'       => $emojis,
			'displayTpl' => '<li>${name} <img src="'.plugins_url('../images/emojis', __FILE__).'/${key}.png"  height="20" width="20" /></li>',
			'insertTpl'  => '<img src="'.plugins_url('../images/emojis', __FILE__).'/${key}.png" class="liveblog-emoji '.$this->class_prefix.'${key}" data-emoji="${key}">',
		);

		return $config;
	}

	/**
	 * Maps an emoji for at.js.
	 *
	 * @param string $val
	 * @param string $key
	 * @return array
	 */
	public function map_emoji($val) {
		return array( 'key' => $key, 'name' => $val );
	}

	/**
	 * Get all the available emojis.
	 *
	 * @return array
	 */
	public function get_emojis() {
		return $this->emojis;
	}

	/**
	 * Sets the regex.
	 *
	 * @param string $regex
	 * @return void
	 */
	public function set_regex( $regex ) {
		$regex_prefix = substr($regex, 0, strlen($regex) - 3);
		$regex_postfix = substr($regex, strlen($regex) - 3);
		$this->regex = $regex_prefix.'(?:'.implode( '|', $this->get_prefixes() ).')'.$regex_postfix;
	}

	/**
	 * Filters the input.
	 *
	 * @param mixed $entry
	 * @return mixed
	 */
	public function filter( $entry ) {
		$entry['content'] = preg_replace_callback( $this->get_regex(), function ($match) {
			if ( ! isset( $this->emojis[$match[1]] ) ) {
				return $match[0];
			}

			return '<img src="'.plugins_url('../images/emojis/'.$match[1].'.png', __FILE__).'" class="liveblog-emoji '.$this->class_prefix.$match[1].'" data-emoji="'.$match[1].'">';
		}, $entry['content']);

		return $entry;
	}

	/**
	 * Adds emoji-{emoji} class to entry
	 *
	 * @param array  $classes
	 * @param string $class
	 * @param int    $comment_id
	 * @return array
	 */
	public function add_emoji_class_to_entry( $classes, $class, $comment_id ) {
		$emojis   = array();
		$comment = get_comment( $comment_id );

		if ( 'liveblog' == $comment->comment_type ) {
			preg_match_all( '/(?<!\w)'.preg_quote( $this->class_prefix ).'\w+/', $comment->comment_content, $emojis );
			$classes = array_merge( $classes, $emojis[0] );
		}

		return $classes;
	}

}
