<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : '';
    $lastName = isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : '';
    $subject = isset($_POST['flexRadioDefault']) ? htmlspecialchars($_POST['flexRadioDefault']) : '';
    $messageContent = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    $newsletter = isset($_POST['newsletter']) ? 'istiyor' : 'istemiyor';

    if (isset($_FILES['additional']) && $_FILES['additional']['error'] == 0) {
        $fileTmpPath = $_FILES['additional']['tmp_name'];
        $fileName = $_FILES['additional']['name'];
        $fileSize = $_FILES['additional']['size'];
        $fileType = $_FILES['additional']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Dosyanın yükleneceği dizin
        $uploadFileDir = './uploaded_files/';
        $dest_path = $uploadFileDir . $fileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $uploadMessage = 'Dosya başarıyla yüklendi.';
        } else {
            $uploadMessage = 'Dosya yüklenirken bir hata oluştu. Lütfen yükleme dizininin web sunucusu tarafından yazılabilir olduğundan emin olun.';
        }
    } else {
        $uploadMessage = 'Dosya yüklenmedi.';
    }

    $countryList = array(
        'turkey' => 'Türkiye',
        'usa' => 'ABD',
        'germany' => 'Almanya'
    );

    $countryDisplay = isset($countryList[$country]) ? $countryList[$country] : 'Bilinmeyen';

    $subjectList = array(
        'flexRadioDefault1' => 'Talep',
        'flexRadioDefault2' => 'Öneri',
        'flexRadioDefault3' => 'Şikayet'
    );

    $subjectDisplay = isset($subjectList[$subject]) ? $subjectList[$subject] : 'Diğer';

    echo "İsim: " . $firstName . "<br>";
    echo "Soyisim: " . $lastName . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "Ülke: " . $countryDisplay . "<br>";
    echo "Konu: " . $subjectDisplay . "<br>";
    echo "Mesaj: " . $messageContent . "<br>";
    echo "Mesaja geri dönüş " . $newsletter . "<br>";
    echo $uploadMessage;
}
?>