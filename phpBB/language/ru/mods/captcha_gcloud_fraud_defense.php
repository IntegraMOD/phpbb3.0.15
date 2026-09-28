<?php
/**
*
* captcha_gcloud_fraud_defense [Русский]
*
* @package language
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'CAPTCHA_GCLOUD_FRAUD_DEFENSE'	=> 'Google Cloud Fraud Defense',

	'GCLOUD_FD_NOT_AVAILABLE'		=> 'Чтобы использовать Google Cloud Fraud Defense, создайте проект Google Cloud с reCAPTCHA Enterprise и укажите ключ сайта, ключ API и идентификатор проекта.',
	'GCLOUD_FD_INCORRECT'			=> 'Google Cloud Fraud Defense отклонил этот запрос. Повторите попытку.',
	'GCLOUD_FD_NOSCRIPT'			=> 'Включите JavaScript в браузере, чтобы Fraud Defense мог проверить эту форму.',
	'GCLOUD_FD_EXPLAIN'				=> 'Этот сайт использует Google Cloud Fraud Defense, чтобы подтвердить, что вы не бот. Дополнительные действия не требуются.',
	'GCLOUD_FD_PREVIEW_MSG'			=> 'Fraud Defense работает незаметно. После сохранения ключа сайта, ключа API и идентификатора проекта Google оценивает отправки в фоне.',

	'GCLOUD_FD_SITEKEY'				=> 'Ключ сайта reCAPTCHA',
	'GCLOUD_FD_SITEKEY_EXPLAIN'		=> 'Ключ сайта на основе оценки из Google Cloud reCAPTCHA / Fraud Defense.',
	'GCLOUD_FD_APIKEY'				=> 'Ключ API Google Cloud',
	'GCLOUD_FD_APIKEY_EXPLAIN'		=> 'Ключ API с включённым reCAPTCHA Enterprise API. Ограничьте его recaptchaenterprise.googleapis.com.',
	'GCLOUD_FD_PROJECT'				=> 'Идентификатор проекта Google Cloud',
	'GCLOUD_FD_PROJECT_EXPLAIN'		=> 'Идентификатор проекта Google Cloud, которому принадлежит ключ reCAPTCHA.',
	'GCLOUD_FD_SCORE'				=> 'Минимальная оценка',
	'GCLOUD_FD_SCORE_EXPLAIN'		=> 'Отклонять токены ниже этого значения (0.00 — мягче, 1.00 — строже). По умолчанию 0.50.',
));
