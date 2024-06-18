<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];

    // Translations array
    $translations = [
        'i' => 'ꜵа',
        'you' => 'ча',
        'he' => 'ᮉо',
        'she' => 'ᮉо',
        'it' => 'ᮉо',
        'we' => 'чам',
        'you (plural)' => 'чала',
        'they' => 'ᮉон',
        'to be' => '𑩐ан',
        'to have' => '𑩐ил',
        'to do' => 'чела',
        'to make' => 'чела',
        'to go' => '𑩐илт',
        'to come' => 'ཚун',
        'to see' => 'ཚать',
        'to hear' => 'ༀарить',
        'to speak' => 'ཚудить',
        'to eat' => '𑩐есть',
        'to drink' => 'ༀидеть',
        'who' => '𑩐ума',
        'what' => '𑩐уно',
        'where' => '𑩐ука',
        'when' => '𑩐уто',
        'why' => '𑩐уза',
        'how' => '𑩐ума',
        'person' => '𑩐она',
        'man' => '𑩐амн',
        'woman' => '𑩐ена',
        'child' => 'ཚино',
        'house' => 'ༀур',
        'food' => 'ཚеда',
        'water' => 'ༀан',
        'sun' => 'ཚоница',
        'moon' => 'ꡤалн',
        'earth' => '𑩐ма',
        'sky' => 'ꜵар',
        'fire' => '𑩐ро',
        'friend' => 'чавер',
        'good' => 'ༀал',
        'bad' => '𑩐ас',
        'big' => 'ༀам',
        'small' => 'ༀара',
        'hot' => 'ༀом',
        'cold' => 'ༀич',
        'new' => '𑩐ова',
        'old' => '𑩐ик',
        'now' => '𑩐они',
        'then' => '𑩐ану',
        'here' => '𑩐уко',
        'there' => '𑩐уло',
        'always' => '𑩐уви',
        'never' => '𑩐инк',
        'and' => '𑩐а',
        'or' => '𑩐у',
        'but' => '𑩐аб',
        'because' => '𑩐аз',
        'in' => '𑩐а',
        'on' => '𑩐ан',
        'under' => '𑩐им',
        'with' => '𑩐ит',
        'without' => '𑩐ати',
        'before' => '𑩐оло',
        'after' => '𑩐они',
        'one' => '𑩐ад',
        'two' => '𑩐уб',
        'three' => '𑩐ат',
        'four' => '𑩐ин',
        'five' => '𑩐им',
        'six' => '𑩐ул',
        'seven' => '𑩐ас',
        'eight' => '𑩐ок',
        'nine' => '𑩐ун',
        'ten' => '𑩐ос',
        'hello' => '𑩐ело',
        'thank you' => '𑩐атш',
        'goodbye' => '𑩐оло',
        'please' => '𑩐ати',
        'yes' => '𑩐ай',
        'no' => '𑩐ан',
        'glory to languatera' => '𑩐ола у Лангуатера',
        'thanks ukraine' => '𑩐атш, Украина'
    ];

    $lowercaseText = strtolower($text);
    $translation = $translations[$lowercaseText] ?? 'Translation not found';

    echo $translation;
}
?>
