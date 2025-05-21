<?php

$weekday = $sanitizer->text($input->get->weekday);
$offer_type = $sanitizer->text($input->get->offer_type);
$location = $sanitizer->text($input->get->location);
$age = $sanitizer->text($input->get->age);

$selector = 'template=entry';

if (isset($weekday) && $weekday !== '' && $weekday !== '0') {
    $selector .= ", weekday=$weekday";
}

if (isset($offer_type) && $offer_type !== '' && $offer_type !== '0') {
    $selector .= ", offer_type=$offer_type";
}

if (isset($location) && $location !== '' && $location !== '0') {
    $selector .= ", location=$location";
}

if (isset($age) && $age !== '' && $age !== '0') {
    $selector .= ", age=$age";
}

$pageUrl = $page->url;



if ($pageUrl === "/ich-suche/") {
    $entries = $pages->get('/ich-suche/eintraege')->children($selector);
}

if ($pageUrl === "/ich-biete/") {
    $entries = $pages->get('/ich-biete/eintraege')->children($selector);
}

if ($pageUrl === "/angebote/") {

    // Filter by publish_from and publish_to and sort by created date
    $selector .= ", sort=-created, publish_from<=now, publish_to>=now";
    $entries = $pages->get('/angebote/eintraege')->children($selector);

}

?>

<div class="container" style="display: flex; justify-content: center; margin-bottom: 40px;">
    <div class="row justify-content-center">
        <form style="display: flex; gap: 20px;">
            <?php if ($pageUrl === "/angebote/"): ?>
                <div style="width: 200px;">
                    <div><label>Wochentag</label></div>
                    <select name="weekday" class="form-control">
                        <option <?= $weekday === "0" ? "selected" : "" ?> value="0">Alle</option>
                        <option <?= $weekday === "1" ? "selected" : "" ?> value="1">Montag</option>
                        <option <?= $weekday === "2" ? "selected" : "" ?> value="2">Dienstag</option>
                        <option <?= $weekday === "3" ? "selected" : "" ?> value="3">Mittwoch</option>
                        <option <?= $weekday === "4" ? "selected" : "" ?> value="4">Donnerstag</option>
                        <option <?= $weekday === "5" ? "selected" : "" ?> value="5">Freitag</option>
                        <option <?= $weekday === "6" ? "selected" : "" ?> value="6">Samstag</option>
                        <option <?= $weekday === "7" ? "selected" : "" ?> value="7">Sonntag</option>
                    </select>
                </div>
            <?php endif; ?>
            <div style="width: 200px;">
                <div><label>Kategorie</label></div>
                <select name="offer_type" class="form-control">
                    <option <?= $offer_type === "0" ? "selected" : "" ?> value="0">Alle</option>
                    <option <?= $offer_type === "1" ? "selected" : "" ?> value="1">Sport</option>
                    <option <?= $offer_type === "2" ? "selected" : "" ?> value="2">Kunst</option>
                    <option <?= $offer_type === "3" ? "selected" : "" ?> value="3">Förderung</option>
                    <option <?= $offer_type === "4" ? "selected" : "" ?> value="4">Musik</option>
                    <option <?= $offer_type === "5" ? "selected" : "" ?> value="5">Betreuung</option>
                    <option <?= $offer_type === "6" ? "selected" : "" ?> value="6">Fahrgemeinschaft</option>
                    <option <?= $offer_type === "100" ? "selected" : "" ?> value="100">Andere</option>
                </select>
            </div>
            <div style="width: 200px;">
                <div><label>Ort</label></div>
                <select name="location" class="form-control">
                    <option value="0">Alle</option>
                    <option value="1">Flaach</option>
                    <option value="2">Volken</option>
                    <option value="3">Dorf</option>
                    <option value="4">Berg am Irchel</option>
                    <option value="5">Buch am Irchel</option>
                    <option value="6">Gräslikon</option>
                    <option value="7">Wiler</option>
                    <option value="8">Desibach</option>
                </select>
            </div>

            <div style="width: 200px;">
                <div><label>Alter</label></div>
                <select name="age" class="form-control">
                    <option value="0">Alle</option>
                    <option value="1">0-4</option>
                    <option value="2">4-8</option>
                    <option value="3">8-12</option>
                    <option value="4">12-16</option>
                    <option value="5">16-20</option>
                    <option value="6">20+</option>
                </select>
            </div>

            <button type="submit" class="theme-btn bg-orange-copper-linear" style="">Filtern</button>
        </form>
    </div>
</div>