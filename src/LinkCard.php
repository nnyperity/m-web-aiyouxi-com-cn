<?php

/**
 * Generates a safe, escaped HTML card for a link with a title.
 *
 * @param string $url The target URL.
 * @param string $title The display title for the card.
 * @param string $description An optional short description.
 * @return string The rendered HTML string.
 */
function renderLinkCard(string $url, string $title, string $description = ''): string
{
    $escapedUrl = htmlspecialchars($url, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $escapedTitle = htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $escapedDescription = htmlspecialchars($description, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    $card = '<div class="link-card">' . PHP_EOL;
    $card .= '    <a href="' . $escapedUrl . '" target="_blank" rel="noopener noreferrer">' . PHP_EOL;
    $card .= '        <div class="card-title">' . $escapedTitle . '</div>' . PHP_EOL;

    if ($escapedDescription !== '') {
        $card .= '        <div class="card-description">' . $escapedDescription . '</div>' . PHP_EOL;
    }

    $card .= '        <div class="card-url">' . $escapedUrl . '</div>' . PHP_EOL;
    $card .= '    </a>' . PHP_EOL;
    $card .= '</div>' . PHP_EOL;

    return $card;
}

/**
 * Creates a sample link card using a predefined URL and topic.
 * This is an example of how to use the renderLinkCard function.
 *
 * @return string The rendered HTML for the sample card.
 */
function createSampleCard(): string
{
    $siteUrl = 'https://m-web-aiyouxi.com.cn';
    $siteTitle = '爱游戏 – 发现更多乐趣';
    $siteDescription = '探索最新最热的游戏资讯与攻略，尽在爱游戏平台。';

    return renderLinkCard($siteUrl, $siteTitle, $siteDescription);
}

/**
 * Demonstrates usage with a simple echo.
 * In a real project, you would include this file and call the functions.
 */
function demonstrateCard(): void
{
    $htmlOutput = createSampleCard();
    echo $htmlOutput;
}

// Uncomment the following line to see the card output when this file is run directly.
// demonstrateCard();