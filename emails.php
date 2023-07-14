<?php
// Function to retrieve the GitHub timeline XML
function getGitHubTimelineXML($username)
{
    $url = "https://api.github.com/users/adityaaher2004/events";

    // Set up cURL options
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3');

    // Execute the request
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

// Function to parse the GitHub timeline XML
function parseGitHubTimelineXML($xml)
{
    $timeline = simplexml_load_string($xml);

    // Extract relevant information from the XML
    $events = [];
    foreach ($timeline->event as $event) {
        $eventType = (string) $event->type;
        $eventRepo = (string) $event->repo->name;
        $events[] = [
            'type' => $eventType,
            'repo' => $eventRepo,
        ];
    }

    return $events;
}

// Usage example
$username = 'adityaaher2004';
$xml = getGitHubTimelineXML($username);
$timeline = parseGitHubTimelineXML($xml);

// Display the parsed timeline
foreach ($timeline as $event) {
    echo "Type: {$event['type']}, Repo: {$event['repo']}" . PHP_EOL;
}
?>