<?php

require_once( MWAI_PATH . '/constants/models.php' );

// Thisi
define( 'MWAI_CHATBOT_DEFAULT_PARAMS', [
	// UI Parameters
	'aiName' => "AI: ",
	'userName' => "User: ",
	'guestName' => "Guest: ",
	'textSend' => 'Send',
	'textClear' => 'Clear',
	'textInputPlaceholder' => 'Type your message...',
	'textInputMaxLength' => 512,
	'textCompliance' => '',
	'startSentence' => "Hi! How can I help you?",
	'maxSentences' => 15,
	'themeId' => 'chatgpt',
	'window' => false,
	'icon' => '',
	'iconText' => '',
	'iconAlt' => 'AI Chatbot Avatar',
	'iconPosition' => 'bottom-right',
	'fullscreen' => false,
	'copyButton' => false,
	'localMemory' => true,
	// Chatbot System Parameters
	'chatId' => null,
	'context' => "Converse as if you were an AI assistant. Be friendly, creative.",
	'env' => 'chatbot',
	'mode' => 'chat',
	'contentAware' => false,
	'embeddingsIndex' => '',
	'casuallyFineTuned' => false,
	'promptEnding' => null,
	'completionEnding' => null,
	// AI Parameters
	'model' => 'gpt-3.5-turbo',
	'temperature' => 0.8,
	'maxTokens' => 1024,
	'maxResults' => 1,
	'apiKey' => null,
	'service' => 'openai'
] );

// This is the defaults for the old chatbot (Vanilla JS)
define( 'MWAI_CHATBOT_PARAMS', [
	// UI Parameters
	'id' => '',
	'env' => 'chatbot',
	'mode' => 'chat',
	'context' => "Converse as if you were an AI assistant. Be friendly, creative.",
	'ai_name' => "AI: ",
	'user_name' => "User: ",
	'guest_name' => "Guest: ",
	'sys_name' => "System: ",
	'start_sentence' => "Hi! How can I help you?",
	'text_send' => 'Send',
	'text_clear' => 'Clear',
	'text_input_placeholder' => 'Type your message...',
	'text_input_maxlength' => '512',
	'text_compliance' => '',
	'max_sentences' => 15,
	'style' => 'chatgpt', // This is only used in the old version of Chatbot
	'themeId' => 'chatgpt',
	'window' => false,
	'icon' => '',
	'icon_text' => '',
	'icon_alt' => 'AI Chatbot Avatar',
	'icon_position' => 'bottom-right',
	'fullscreen' => false,
	'copy_button' => false,
	'localMemory' => true,
	// Chatbot System Parameters
	'casually_fine_tuned' => false,
	'content_aware' => false,
	'embeddings_index' => '',
	'prompt_ending' => null,
	'completion_ending' => null,
	// AI Parameters
	'model' => 'gpt-3.5-turbo',
	'temperature' => 0.8,
	'max_tokens' => 1024,
	'max_results' => 1,
	'api_key' => null,
	'service' => 'openai'
] );

define( 'MWAI_LANGUAGES', [
  'en' => 'English',
	'de' => 'German',
	'fr' => 'French',
  'es' => 'Spanish',
  'it' => 'Italian',
	'zh' => 'Chinese',
	'ja' => 'Japanese',
  'pt' => 'Portuguese',
  //'ru' => 'Russian',
] );

define ( 'MWAI_LIMITS', [
	'enabled' => true,
	'guests' => [
		'credits' => 3,
		'creditType' => 'queries',
		'timeFrame' => 'day',
		'isAbsolute' => false,
		'overLimitMessage' => "You have reached the limit.",
	],
	'users' => [
		'credits' => 10,
		'creditType' => 'price',
		'timeFrame' => 'month',
		'isAbsolute' => false,
		'overLimitMessage' => "You have reached the limit.",
		'ignoredUsers' => "administrator,editor",
	],
	'system' => [
		'credits' => 20,
		'creditType' => 'price',
		'timeFrame' => 'month',
		'isAbsolute' => false,
		'overLimitMessage' => "Our chatbot went to sleep. Please try again later.",
		'ignoredUsers' => "",
	],
] );

define( 'MWAI_OPTIONS', [
	'module_suggestions' => true,
	'module_woocommerce' => true,
	'module_forms' => false,
	'module_blocks' => false,
	'module_playground' => true,
	'module_generator_content' => true,
	'module_generator_images' => true,
	'module_moderation' => false,
	'module_statistics' => false,
	'module_finetunes' => false,
	'module_embeddings' => false,
	'module_audio' => false,
	'shortcode_chat' => true,
	'shortcode_chat_params' => MWAI_CHATBOT_PARAMS,
	'shortcode_chat_params_override' => false,
	'shortcode_chat_html' => true,
	'shortcode_chat_formatting' => true,
	'shortcode_chat_typewriter' => false,
	'speech_recognition' => false,
	'speech_synthesis' => false,
	'shortcode_chat_discussions' => true,
	'shortcode_chat_moderation' => false,
	'shortcode_chat_syntax_highlighting' => false,
	'shortcode_chat_logs' => '', // 'file', 'db', 'file,db'
	'shortcode_chat_inject' => false,
	'shortcode_chat_styles' => [],
	'limits' => MWAI_LIMITS,
	'openai_apikey' => false,
	'openai_service' => '', // 'openai', 'azure' (if not set here, it will use the Settings)
	'openai_usage' => [],
	'openai_models' => MWAI_OPENAI_MODELS,
	'openai_azure_endpoint' => '',
	'openai_azure_apikey' => '',
	'openai_azure_deployments' => [],
	'openai_finetunes' => [], // Used by AI Engine
	'openai_finetunes_all' => [], // All finetunes listed by OpenAI
	'openai_finetunes_deleted' => [], // The finetunes that have been deleted
	'pinecone' => [
		'apikey' => false,
		'server' => 'us-east1-gcp',
		'namespace' => 'mwai',
		'indexes' => [],
		'index' => null
	],
	'embeddings' => [
		'rewriteContent' => true,
		'rewritePrompt' => "Rewrite the content concisely in {LANGUAGE}, maintaining the same style and information. The revised text should be under 800 words, with paragraphs ranging from 160-280 words each. Omit non-textual elements and avoid unnecessary repetition. Conclude with a statement directing readers to find more information at {URL}. If you cannot meet these requirements, please leave a blank response.\n\n{CONTENT}",
		'forceRecreate' => false,
		'maxSelect' => 1,
		'minScore' => 75,
		'syncPosts' => false,
		'syncPostTypes' => ['post', 'page', 'product'],
		'syncPostStatus' => ['publish'],
	],
	'extra_models' => "",
	'debug_mode' => true,
	'resolve_shortcodes' => false,
	'dynamic_max_tokens' => true,
	'context_max_tokens' => 1024,
	'assistants_model' => 'gpt-3.5-turbo',
	'banned_words' => [],
	'banned_ips' => [],
	'languages' => MWAI_LANGUAGES
] );

define( 'MWAI_ALL_LANGUAGES', [
	'aa' => 'Afar',
	'ab' => 'Abkhazian',
	'af' => 'Afrikaans',
	'ak' => 'Akan',
	'sq' => 'Albanian',
	'am' => 'Amharic',
	'ar' => 'Arabic',
	'an' => 'Aragonese',
	'hy' => 'Armenian',
	'as' => 'Assamese',
	'av' => 'Avaric',
	'ae' => 'Avestan',
	'ay' => 'Aymara',
	'az' => 'Azerbaijani',
	'ba' => 'Bashkir',
	'bm' => 'Bambara',
	'eu' => 'Basque',
	'be' => 'Belarusian',
	'bn' => 'Bengali',
	'bh' => 'Bihari',
	'bi' => 'Bislama',
	'bs' => 'Bosnian',
	'br' => 'Breton',
	'bg' => 'Bulgarian',
	'my' => 'Burmese',
	'ca' => 'Catalan; Valencian',
	'ch' => 'Chamorro',
	'ce' => 'Chechen',
	'zh' => 'Chinese',
	'cu' => 'Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic',
	'cv' => 'Chuvash',
	'kw' => 'Cornish',
	'co' => 'Corsican',
	'cr' => 'Cree',
	'cs' => 'Czech',
	'da' => 'Danish',
	'dv' => 'Divehi; Dhivehi; Maldivian',
	'nl' => 'Dutch; Flemish',
	'dz' => 'Dzongkha',
	'en' => 'English',
	'eo' => 'Esperanto',
	'et' => 'Estonian',
	'ee' => 'Ewe',
	'fo' => 'Faroese',
	'fj' => 'Fijjian',
	'fi' => 'Finnish',
	'fr' => 'French',
	'fy' => 'Western Frisian',
	'ff' => 'Fulah',
	'ka' => 'Georgian',
	'de' => 'German',
	'gd' => 'Gaelic; Scottish Gaelic',
	'ga' => 'Irish',
	'gl' => 'Galician',
	'gv' => 'Manx',
	'el' => 'Greek, Modern',
	'gn' => 'Guarani',
	'gu' => 'Gujarati',
	'ht' => 'Haitian; Haitian Creole',
	'ha' => 'Hausa',
	'he' => 'Hebrew',
	'hz' => 'Herero',
	'hi' => 'Hindi',
	'ho' => 'Hiri Motu',
	'hu' => 'Hungarian',
	'ig' => 'Igbo',
	'is' => 'Icelandic',
	'io' => 'Ido',
	'ii' => 'Sichuan Yi',
	'iu' => 'Inuktitut',
	'ie' => 'Interlingue',
	'ia' => 'Interlingua (International Auxiliary Language Association)',
	'id' => 'Indonesian',
	'ik' => 'Inupiaq',
	'it' => 'Italian',
	'jv' => 'Javanese',
	'ja' => 'Japanese',
	'kl' => 'Kalaallisut; Greenlandic',
	'kn' => 'Kannada',
	'ks' => 'Kashmiri',
	'kr' => 'Kanuri',
	'kk' => 'Kazakh',
	'km' => 'Central Khmer',
	'ki' => 'Kikuyu; Gikuyu',
	'rw' => 'Kinyarwanda',
	'ky' => 'Kirghiz; Kyrgyz',
	'kv' => 'Komi',
	'kg' => 'Kongo',
	'ko' => 'Korean',
	'kj' => 'Kuanyama; Kwanyama',
	'ku' => 'Kurdish',
	'lo' => 'Lao',
	'la' => 'Latin',
	'lv' => 'Latvian',
	'li' => 'Limburgan; Limburger; Limburgish',
	'ln' => 'Lingala',
	'lt' => 'Lithuanian',
	'lb' => 'Luxembourgish; Letzeburgesch',
	'lu' => 'Luba-Katanga',
	'lg' => 'Ganda',
	'mk' => 'Macedonian',
	'mh' => 'Marshallese',
	'ml' => 'Malayalam',
	'mi' => 'Maori',
	'mr' => 'Marathi',
	'ms' => 'Malay',
	'mg' => 'Malagasy',
	'mt' => 'Maltese',
	'mo' => 'Moldavian',
	'mn' => 'Mongolian',
	'na' => 'Nauru',
	'nv' => 'Navajo; Navaho',
	'nr' => 'Ndebele, South; South Ndebele',
	'nd' => 'Ndebele, North; North Ndebele',
	'ng' => 'Ndonga',
	'ne' => 'Nepali',
	'nn' => 'Norwegian Nynorsk; Nynorsk, Norwegian',
	'nb' => 'Bokmål, Norwegian, Norwegian Bokmål',
	'no' => 'Norwegian',
	'ny' => 'Chichewa; Chewa; Nyanja',
	'oc' => 'Occitan, Provençal',
	'oj' => 'Ojibwa',
	'or' => 'Oriya',
	'om' => 'Oromo',
	'os' => 'Ossetian; Ossetic',
	'pa' => 'Panjabi; Punjabi',
	'fa' => 'Persian',
	'pi' => 'Pali',
	'pl' => 'Polish',
	'pt' => 'Portuguese',
	'ps' => 'Pushto',
	'qu' => 'Quechua',
	'rm' => 'Romansh',
	'ro' => 'Romanian',
	'rn' => 'Rundi',
	'ru' => 'Russian',
	'sg' => 'Sango',
	'sa' => 'Sanskrit',
	'sr' => 'Serbian',
	'hr' => 'Croatian',
	'si' => 'Sinhala; Sinhalese',
	'sk' => 'Slovak',
	'sl' => 'Slovenian',
	'se' => 'Northern Sami',
	'sm' => 'Samoan',
	'sn' => 'Shona',
	'sd' => 'Sindhi',
	'so' => 'Somali',
	'st' => 'Sotho, Southern',
	'es' => 'Spanish; Castilian',
	'sc' => 'Sardinian',
	'ss' => 'Swati',
	'su' => 'Sundanese',
	'sw' => 'Swahili',
	'sv' => 'Swedish',
	'ty' => 'Tahitian',
	'ta' => 'Tamil',
	'tt' => 'Tatar',
	'te' => 'Telugu',
	'tg' => 'Tajik',
	'tl' => 'Tagalog',
	'th' => 'Thai',
	'bo' => 'Tibetan',
	'ti' => 'Tigrinya',
	'to' => 'Tonga (Tonga Islands)',
	'tn' => 'Tswana',
	'ts' => 'Tsonga',
	'tk' => 'Turkmen',
	'tr' => 'Turkish',
	'tw' => 'Twi',
	'ug' => 'Uighur; Uyghur',
	'uk' => 'Ukrainian',
	'ur' => 'Urdu',
	'uz' => 'Uzbek',
	've' => 'Venda',
	'vi' => 'Vietnamese',
	'vo' => 'Volapük',
	'cy' => 'Welsh',
	'wa' => 'Walloon',
	'wo' => 'Wolof',
	'xh' => 'Xhosa',
	'yi' => 'Yiddish',
	'yo' => 'Yoruba',
	'za' => 'Zhuang; Chuang',
	'zu' => 'Zulu',
] );