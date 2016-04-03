<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BirthRegisterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameEnglish', 'text', [
                'label' => "Name (English)"
            ])
            ->add('name', 'text', [
                'label' => "Name"
            ])
            ->add('fatherNameEnglish', 'text', [
                'label' => "Father's Name (English)"
            ])
            ->add('fatherName', 'text', [
                'label' => "Father's Name"
            ])
            ->add('fatherNID', 'text', [
                'label' => "Father's NID"
            ])
            ->add('motherNameEnglish', 'text', [
                'label' => "Mother's Name (English)"
            ])
            ->add('motherName', 'text', [
                'label' => "Mother's Name"
            ])
            ->add('motherNID', 'text', [
                'label' => "Mother's NID"
            ])
            ->add('birthDate', 'date', [
                'widget'    => 'single_text',
                'data'      => new \DateTime(),
                'read_only' => true
            ])
            ->add('gender', 'choice', [
                'choices'  => [
                    'M' => 'Male',
                    'F' => 'Female'
                ],
                'disabled' => true
            ])
            ->add('fatherNationality', 'text', [
                'label' => "Father's Nationality",
                'attr'  => ['placeholder' => 'Bangladeshi']
            ])
            ->add('motherNationality', 'text', [
                'label' => "Mother's Nationality",
                'attr'  => ['placeholder' => 'Bangladeshi']
            ])
            ->add('birthDistrict', 'choice', [
                'label'   => 'Birth District',
                'choices' => [
                    "1"  => "Bagerhat",
                    "3"  => "Bandarban",
                    "4"  => "Barguna",
                    "6"  => "Barisal",
                    "9"  => "Bhola",
                    "10" => "Bogra",
                    "12" => "Brahmanbaria",
                    "13" => "Chandpur",
                    "70" => "Chapai Nawabganj",
                    "15" => "Chittagong",
                    "18" => "Chuadanga",
                    "19" => "Comilla",
                    "22" => "Cox's Bazar",
                    "26" => "Dhaka",
                    "27" => "Dinajpur",
                    "29" => "Faridpur",
                    "30" => "Feni",
                    "32" => "Gaibandha",
                    "33" => "Gazipur",
                    "35" => "Gopalganj",
                    "36" => "Habiganj",
                    "39" => "Jamalpur",
                    "41" => "Jessore",
                    "42" => "Jhalokati",
                    "44" => "Jhenaidah",
                    "38" => "Joypurhat",
                    "46" => "Khagrachhari",
                    "47" => "Khulna",
                    "48" => "Kishoreganj",
                    "49" => "Kurigram",
                    "50" => "Kushtia",
                    "51" => "Lakshmipur",
                    "52" => "Lalmonirhat",
                    "54" => "Madaripur",
                    "55" => "Magura",
                    "56" => "Manikganj",
                    "58" => "Maulvibazar",
                    "57" => "Meherpur",
                    "59" => "Munshiganj",
                    "61" => "Mymensingh",
                    "64" => "Naogaon",
                    "65" => "Narail",
                    "67" => "Narayanganj",
                    "68" => "Narsingdi",
                    "69" => "Natore",
                    "72" => "Netrakona",
                    "73" => "Nilphamari",
                    "75" => "Noakhali",
                    "76" => "Pabna",
                    "77" => "Panchagarh",
                    "78" => "Patuakhali",
                    "79" => "Pirojpur",
                    "82" => "Rajbari",
                    "81" => "Rajshahi",
                    "84" => "Rangamati",
                    "85" => "Rangpur",
                    "87" => "Satkhira",
                    "86" => "Shariatpur",
                    "89" => "Sherpur",
                    "88" => "Sirajganj",
                    "90" => "Sunamganj",
                    "91" => "Sylhet",
                    "93" => "Tangail",
                    "94" => "Thakurgaon",
                ],
                'empty_value' => 'Select District',
                'required' => false
            ])
            ->add('birthCountry', 'country', [
                'empty_value' => 'Select Country',
                'required' => false
            ])
            ->add('presentAddress', 'textarea', [
                'label' => 'Present Address',
                'attr'  => ['rows' => 5]
            ])
            ->add('permanentAddress', 'textarea', [
                'label' => 'Permanent Address',
                'attr'  => ['rows' => 5]
            ])
            ->add('brnNumber', 'hidden')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Birth'
        ]);
    }
}
