<?php

$str = <<<TEXT

<p><b><i> The </i></b> <b><i> United States </i></b>is withdrawing 5,000 troops <b><i> from </i></b> NATO ally Germany, <b><i> the </i></b> Pentagon announced on Friday, as a rift over <b><i> the </i></b> Iran war widens between President Donald Trump and <b><i> Europe </i></b>.</p> <p>Trump had threatened a drawdown in forces earlier this week after sparring with German Chancellor Friedrich Merz, who said on Monday <b><i> the </i></b> Iranians were humiliating <b><i> the </i></b> <b><i> US </i></b> in talks to end <b><i> the </i></b> two-month-old war and that he did not see what exit strategy Washington was pursuing.</p> <p>A senior Pentagon official, speaking on condition of anonymity, said recent German rhetoric had been "inappropriate and unhelpful."</p> <h4>Discover more</h4> <p>World news summaries</p> <p>Political analysis reports</p> <p>Automotive industry news</p> <p>"<b><i> The </i></b> president is rightly reacting to <b><i> the </i></b>se</p> counterproductive remarks," <b><i> the </i></b> official said. <p><b><i> The </i></b> Pentagon said <b><i> the </i></b> withdrawal was expected to be completed over <b><i> the </i></b> next six to 12 months. Germany is home to some 35,000 active-duty <b><i> US </i></b> military personnel, more than anywhere else in <b><i> Europe </i></b>.</p> <p><b><i> The </i></b> official said <b><i> the </i></b> drawdown would bring <b><i> US </i></b> troop levels in <b><i> Europe </i></b> back to roughly pre-2022 levels, before Russia's invasion of Ukraine triggered a buildup by <b><i> the </i></b>n-President Joe Biden.</p> <p><b><i> The </i></b> official also cast <b><i> the </i></b> decision in terms of <b><i> the </i></b> Trump administration's push for <b><i> Europe </i></b> to become <b><i> the </i></b> main security provider on <b><i> the </i></b> continent. But it is none<b><i> the </i></b>less ano<b><i> the </i></b>r potent reminder of Trump's willingness to respond to perceived disloyalty by allies.</p> <p>Reuters exclusively reported last week an internal Pentagon email that outlined options to punish NATO allies that Washington believes failed to support <b><i> US </i></b> operations in <b><i> the </i></b> war with Iran, including suspending Spain <b><i> from </i></b> NATO and reviewing <b><i> the </i></b> <b><i> US </i></b> position on Britain's claim to <b><i> the </i></b> Falkland Islands.</p> <h4>Discover more</h4> <p>Lifestyle content platform</p> <p>Health news portal</p> <p>Mobile news app</p> <h4>Clashes With <b><i> Europe </i></b>ans</h4> <p>It is unclear if more withdrawals <b><i> from </i></b> <b><i> Europe </i></b> will follow. On Thursday, Trump said "probably" when asked whe<b><i> the </i></b>r he would consider pulling <b><i> US </i></b> troops out of Italy and Spain.</p> <p>Last month, he threatened to impose a full <b><i> US </i></b> trade embargo on Spain, where <b><i> the </i></b> Socialist leadership said it would not allow its bases or airspace to be used to attack Iran. <b><i> The </i></b> <b><i> United States </i></b>has two important military bases in Spain: Naval Station Rota and Morón Air ⁠Base.</p> <p>Trump has also clashed with Italian Prime Minister Giorgia Meloni over <b><i> the </i></b> Iran war and Trump's criticism of Pope Leo. <b><i> The </i></b> <b><i> US </i></b> president said in April that Meloni, once a strong Trump supporter, lacked courage and had let Washington down.</p> <p>Trump has chastised NATO allies, too, for not sending <b><i> the </i></b>ir navies to help open <b><i> the </i></b> Strait of Hormuz. <b><i> The </i></b> waterway, a chokepoint for global oil shipments, has remained virtually shut during <b><i> the </i></b> Iran conflict, causing market turmoil and unprecedented disruption in energy supplies.</p> <p>"<b><i> The </i></b> president has been very clear about his frustrations about our allies' rhetoric and failure to provide support for <b><i> US </i></b> operations that benefit <b><i> the </i></b>m," <b><i> the </i></b> senior Pentagon official said.</p>

TEXT;

echo $str;
echo "<br>";
echo "<br>";
echo "<h2>Modified String</h2>";

$replace_words = [
    'US' => 'BD',
    "Europe" => "Asia",
    "From" => "to",
    "United States" => "Bangladesh",
    "The" => "",
];


$newStr = $str;
// $newStr = str_replace(array_keys($replace_words), array_values($replace_words), $str);

foreach ($replace_words as $key => $value) {
  $newStr = str_replace($key, $value, $newStr);
}

// echo $newStr;
echo $newStr;
