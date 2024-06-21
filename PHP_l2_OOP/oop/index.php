<?

class Style {
    // properties
    public $background;
    public $color;
    public $padding;
    public $margin;

    // constructor
    public function __construct ($background,$color,$padding,$margin) {
        $this->background = $background;
        $this->color = $color;
        $this->padding = $padding;
        $this->margin = $margin;
    }

    public function toCSS() {
        return "
            background: {$this->background};
            color:      {$this->color};
            padding:    {$this->padding};
            margin:     {$this->margin};
        ";
    }
}

?>


<?  $style1 = new Style("black","white","10px","10px") ?>
<?  $style2 = new Style("orange","black", "10px", "10px") ?>

<div style="<?= $style1->toCSS() ?>">ELEMENT 1</div>
<div style="<?= $style2->toCSS() ?>">ELEMENT 2</div>




<?


// HW1: create a few profile objects and render them on the page
class Profile
{
    public $name;
    public $avatar;
    public $email;
    public $age;

    public function __construct ($name, $avatar, $email, $age) {
        $this->name = $name;
        $this->avatar = $avatar;
        $this->email = $email;
        $this->age = $age;
    }

    public function toHTML() {
        return "
            <div class='profile'>
                <img src='{$this->avatar}'>
                <h2>{$this->name}</h2>
                <p>{$this->email}</p>
                <p>{$this->age} years old</p>
            </div>
        ";
    }
}

?>

<? $profile1 = new Profile("John Doe", "https://avataaars.io/?avatarStyle=Circle&topType=ShortHairTheCaesarSidePart&accessoriesType=Prescription02&hairColor=Platinum&facialHairType=BeardMajestic&facialHairColor=Platinum&clotheType=Hoodie&clotheColor=PastelRed&eyeType=Close&eyebrowType=UpDownNatural&mouthType=Twinkle&skinColor=DarkBrown", "john@example.com", "24") ?>
<? $profile2 = new Profile("Robert Brown", "https://avataaars.io/?avatarStyle=Circle&topType=ShortHairDreads01&accessoriesType=Prescription02&hairColor=Blue&facialHairType=BeardMedium&facialHairColor=BrownDark&clotheType=Overall&clotheColor=Gray01&eyeType=EyeRoll&eyebrowType=RaisedExcitedNatural&mouthType=Grimace&skinColor=Pale", "robert@example.com", "29") ?>
<? $profile3 = new Profile("Peter Pan", "https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortCurly&accessoriesType=Kurt&hairColor=SilverGray&facialHairType=MoustacheFancy&facialHairColor=Black&clotheType=Hoodie&clotheColor=Pink&eyeType=EyeRoll&eyebrowType=UpDownNatural&mouthType=Serious&skinColor=Brown", "peter@example.com", "22") ?>

<?= $profile1->toHTML() ?>
<?= $profile2->toHTML() ?>
<?= $profile3->toHTML() ?>