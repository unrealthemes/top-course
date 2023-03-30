<?php
/**
 * Template name: Test
 */

get_header(); 

// global $wpdb;
// $table  = $wpdb->prefix . 'commentmeta';
// $delete = $wpdb->query("TRUNCATE TABLE $table");

// echo '<pre>';
// print_r( $delete );
// echo '</pre>';

/*

$start = microtime(true);
// Set your OpenAI API key
// $openai_key = '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';
$openai_key = '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';

// Set the request URL and headers
$url = 'https://api.openai.com/v1/completions';
$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $openai_key,
);

// Set the prompts and parameters for the API request
$data = array(
    'model' => 'text-davinci-003',
    'prompt' => [
        'rewrite this text in Russian no more than 250 characters without line breaks "Всем доброго дня. Хочу поделиться фидбеком о курсе java-разработчик. Хочу похвалить подачу материала, объясняют все крайне понятно и подробно для новичков, но и лишней воды нет. Лекции не затянутые, смотреть приятно, а главное быстро получаешь новые знания, которые потом оттачиваешь на практических заданиях. Их кстати довольно много, у меня они занимают большую часть обучения. К менторам часто хожу с вопросами, когда что-то не понятно. Отвечают всегда в течение дня, очень дружелюбные и всегда готовы помочь"',
        'rewrite this text in Russian no more than 250 characters without line breaks "Пришел на курс по питону по рекомендации знакомого, он в айтишке работает и меня зазывал, рассказывал много про питон. Я полазил, повыбирал курсы, посравнивал отзывы. Остановился на продуктстаре из-за цены и материалов, которые они предлагали. Плюс подкупила гарантия трудоустройства, много людей писали про нее в отзывах. Что скажу: курс своих денег стоит. Лекции смотрелись быстро, основную часть обучения занимала сама практика. Мой знакомый подсказал мне проект для портфолио, поэтому все дз я делал для этого проекта. Хорошая обратная связь от ментора, всегда отвечал в течение суток и давал развернутый фидбек по моим ошибкам. Курсом крайне доволен, готов рекомендовать к приобритению"',
        'rewrite this text in Russian no more than 250 characters without line breaks "Обучаюсь в МАЕД на курсе «Менеджер по маркетплейсам». Выбирала школу по высокому рейтингу, адекватной стоимости курса, удобной форме оплаты и рада, что не ошиблась. Получаю новые для меня знания и навыки в профессии благодаря обширной базе курса. Удобная форма подачи материала, можно обучаться в своем режиме. Много домашних заданий для закрепления знаний, ссылок на материалы для получения дополнительной информации. Каждую неделю проводятся вебинары. Спасибо МАЕД и кураторам курса!"',
        'rewrite this text in Russian no more than 500 characters without line breaks "Закончил обучаться на большом курсе по Java, вчера получил свой диплом. Хочу похвалить менторов, за то что терпиливо отвечали на все вопросы, ежедневно правили мои работы и поддерживали, когда чувствовал спад мотивации. По программе нареканий нет, все четко, подробно и понятно. Занимался на протяжении 10 месяцев по 2 часа после работы, где-то чуть больше, где-то меньше. Сейчас активно ищу работу с карьерным центром, девушка-консультант отзывчивая и со всем максимально помогает. Часто рекоммендую курсы своим знакомым, и всем остальным тоже советую, не прогадаете."',
        'rewrite this text in Russian no more than 250 characters without line breaks "Достоинства: Кураторы Подача Недостатки: Для меня не было В декабре 2022 закончил курс "дизайн логотипа и фирменного стиля". Круто, что доступ к курсу не пропадает после его прохождения, интересующие моменты всегда можно освежить. Приятная подача лекционного материала, понятные презентации с примерами. До этого имел опыт прохождения курсов на других платформах, хочется похвалить звук и приятную обратную связь. Благодаря курсу узнал новые фишки для себя. Курс хорошо подойдёт начинающим дизайнерам, даёт грамотное погружение в профессию. Топ за свои деньги"',
    ],
    'max_tokens' => 1024,
    'temperature' => 0.8
);

// Send the API request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Handle the API response
if ($response) {
    $json = json_decode($response);

    $time = microtime(true) - $start; 

    echo '<pre>';
    print_r( $json );
    echo '</pre>';
    
    echo '<pre>';
    print_r( $time );
    echo '</pre>';

    // if ($json->choices) {
    //     foreach ($json->choices as $choice) {
    //         $text = $choice->text;
    //         // $text = str_replace('<br>', '', $text);
    //         echo $text . "\n\n\n";
    //     }
    // } else {
    //     echo 'No completions found';
    // }
} else {
    echo 'API request failed';
}

*/

/*
$per_page = 5;
$pagenum = $page;
$offset = ($pagenum - 1) * $per_page;
$query = new WP_Comment_Query;
$comments = $query->query( [
    'offset' => $offset,
    'number' => $per_page,
    'no_found_rows' => false,
    'meta_query' => array(
		'relation' => 'OR',
		array(
			'key' => '_rewrite',
			'value' => true,
            'compare' => '!='
		),
		array(
			'key' => '_rewrite',
			'compare' => 'NOT EXISTS'
		)
	)
] );



foreach ( $comments as $comment ) {
    $content = strip_tags($comment->comment_content);
    $content = str_replace(["\r\n", "\r", "\n", "'"], '', $content);
    $content = mb_strimwidth($content, 0, 150, ''); // substr($content, 0, 300);

    echo '<pre>';
    print_r( $content );
    echo '</pre>';
    
    echo '<pre>';
    print_r( ut_help()->parser->rewrite_review( 'rewrite this text in Russian no more than 250 characters: "'.$content.'"') );
    echo '</pre>';
    
    echo '<pre>';
    print_r( '-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-' );
    echo '</pre>';
}
*/

get_footer();