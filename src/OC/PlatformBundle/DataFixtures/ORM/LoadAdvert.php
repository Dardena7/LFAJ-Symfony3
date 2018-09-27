<?php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;
use OC\PlatformBundle\Entity\Category;
use OC\PlatformBundle\Entity\Skill;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\AdvertSkill;
use Symfony\Component\Console\Tester\ApplicationTester;

class LoadCategory implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {

    //Load Categories
    $category1 = new Category();
    $category2 = new Category();
    $category3 = new Category();
    $category4 = new Category();
    $category5 = new Category();

    $category1->setName('Développement web');
    $category2->setName('Développement mobile');
    $category3->setName('Graphisme');
    $category4->setName('Intégration');
    $category5->setName('Réseau');

    $manager->persist($category1);
    $manager->persist($category2);
    $manager->persist($category3);
    $manager->persist($category4);
    $manager->persist($category5);

    //Load skills
    $skill1 = new Skill();
    $skill2 = new Skill();
    $skill3 = new Skill();
    $skill4 = new Skill();
    $skill5 = new Skill();

    $skill1->setName('PHP');
    $skill2->setName('Symfony');
    $skill3->setName('C++');
    $skill4->setName('Java');
    $skill5->setName('Photoshop');

    $manager->persist($skill1);
    $manager->persist($skill2);
    $manager->persist($skill3);
    $manager->persist($skill4);
    $manager->persist($skill5);


    //Preapre images
    $image1 = new Image();
    $image2 = new Image();
    $image3 = new Image();
    $image4 = new Image();
    $image5 = new Image();
    $image6 = new Image();
    $image7 = new Image();
    $image8 = new Image();
    $image9 = new Image();
    $image10 = new Image();

    $image1->setUrl('https://cdn.lynda.com/course/520220/520220-636136853521823826-16x9.jpg');
    $image2->setUrl('http://blogs.worldbank.org/files/education/step3.jpg');
    $image3->setUrl('http://developnig.com/wp-content/uploads/2017/03/Developmental23Initiatives.jpg');
    $image4->setUrl('http://blogs.worldbank.org/files/education/step3.jpg');
    $image5->setUrl('https://cdn.lynda.com/course/520220/520220-636136853521823826-16x9.jpg');
    $image6->setUrl('http://developnig.com/wp-content/uploads/2017/03/Developmental23Initiatives.jpg');
    $image7->setUrl('http://blogs.worldbank.org/files/education/step3.jpg');
    $image8->setUrl('http://blogs.worldbank.org/files/education/step3.jpg');
    $image9->setUrl('http://developnig.com/wp-content/uploads/2017/03/Developmental23Initiatives.jpg');
    $image10->setUrl('https://cdn.lynda.com/course/520220/520220-636136853521823826-16x9.jpg');

    $image1->setAlt('image-alt');
    $image2->setAlt('image-alt');
    $image3->setAlt('image-alt');
    $image4->setAlt('image-alt');
    $image5->setAlt('image-alt');
    $image6->setAlt('image-alt');
    $image7->setAlt('image-alt');
    $image8->setAlt('image-alt');
    $image9->setAlt('image-alt');
    $image10->setAlt('image-alt');

    //Load AdvertSkill
    $advert1 = new Advert();
    $advert2 = new Advert();
    $advert3 = new Advert();
    $advert4 = new Advert();
    $advert5 = new Advert();
    $advert6 = new Advert();
    $advert7 = new Advert();
    $advert8 = new Advert();
    $advert9 = new Advert();
    $advert10 = new Advert();

    $advert1->setTitle('Développeur php Senior');
    $advert2->setTitle('Webdesigner/Intégrateur');
    $advert3->setTitle('Développeur junior motivé');
    $advert4->setTitle('Infographiste');
    $advert5->setTitle('Gestionnaire de réseau');
    $advert6->setTitle('Helpdesk autonome');
    $advert7->setTitle('Développeur front-end');
    $advert8->setTitle('Dev Nodejs/socket.io');
    $advert9->setTitle('Dev java medior');
    $advert10->setTitle('Software developer');

    $advert1->setAuthor('IBM');
    $advert2->setAuthor('Actito');
    $advert3->setAuthor('Microsoft');
    $advert4->setAuthor('Adecco');
    $advert5->setAuthor('Google');
    $advert6->setAuthor('Daoust');
    $advert7->setAuthor('Trane');
    $advert8->setAuthor('Fortis');
    $advert9->setAuthor('Dexia');
    $advert10->setAuthor('WebAddict');

    $advert1->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert2->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert3->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert4->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert5->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert6->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert7->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert8->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert9->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert10->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');

    $advert1->setImage($image1);
    $advert2->setImage($image2);
    $advert3->setImage($image3);
    $advert4->setImage($image4);
    $advert5->setImage($image5);
    $advert6->setImage($image6);
    $advert7->setImage($image7);
    $advert8->setImage($image8);
    $advert9->setImage($image9);
    $advert10->setImage($image10);

    $advert1->addCategory($category1);
    $advert2->addCategory($category1);
    $advert3->addCategory($category1);
    $advert4->addCategory($category3);
    $advert5->addCategory($category4);
    $advert6->addCategory($category4);
    $advert7->addCategory($category5);
    $advert8->addCategory($category2);
    $advert9->addCategory($category2);
    $advert10->addCategory($category1);

    $advert1->addCategory($category2);
    $advert2->addCategory($category2);
    $advert3->addCategory($category3);
    $advert4->addCategory($category5);
    $advert5->addCategory($category1);
    $advert7->addCategory($category1);
    $advert8->addCategory($category5);
    $advert10->addCategory($category4);

    $advert1->addCategory($category5);
    $advert2->addCategory($category4);
    $advert3->addCategory($category5);
    $advert10->addCategory($category3);

    $manager->persist($advert1);
    $manager->persist($advert2);
    $manager->persist($advert3);
    $manager->persist($advert4);
    $manager->persist($advert5);
    $manager->persist($advert6);
    $manager->persist($advert7);
    $manager->persist($advert8);
    $manager->persist($advert9);
    $manager->persist($advert10);

    //Load applications

    $application1 = new Application();
    $application2 = new Application();
    $application3 = new Application();
    $application4 = new Application();
    $application5 = new Application();
    $application6 = new Application();
    $application7 = new Application();
    $application8 = new Application();
    $application9 = new Application();
    $application10 = new Application();
    $application11 = new Application();
    $application12 = new Application();
    $application13 = new Application();
    $application14 = new Application();
    $application15 = new Application();

    $application1->setAuthor('Alexis Dardenne');
    $application2->setAuthor('Corentin Duboix');
    $application3->setAuthor('Gerad watelet');
    $application4->setAuthor('Dupond Mathieu');
    $application5->setAuthor('Gerard Darmon');
    $application6->setAuthor('Alain Chabat');
    $application7->setAuthor('Dominique Farougia');
    $application8->setAuthor('Gad El Maleh');
    $application9->setAuthor('Jamel Debouzze');
    $application10->setAuthor('Florent Payre');
    $application11->setAuthor('Eden Hazard');
    $application12->setAuthor('Mathieu Balmon');
    $application13->setAuthor('Dimitri Payet');
    $application14->setAuthor('Romelu Lukaku');
    $application15->setAuthor('Thomas Meunier');

    $application1->setContent('Je suis ultra motivé');
    $application2->setContent('Je suis un autodidacte');
    $application3->setContent('J\'ai une expérience hors du commun');
    $application4->setContent('Je sors d\'une école d\'ingénieur');
    $application5->setContent('Je suis un perfectionniste');
    $application6->setContent('Je suis un bon à rien');
    $application7->setContent('J\'ai des objectifs très élevé');
    $application8->setContent('Je suis prêt à relever ce challenge!');
    $application9->setContent('Je veux beaucoup d\'argent');
    $application10->setContent('Je suis le futur Bill gates');
    $application11->setContent('Je suis un petit génie de l\'informatique');
    $application12->setContent('Faites le bon choix, c\'est moi !');
    $application13->setContent('Voici mon cv et ma lettre de motivation');
    $application14->setContent('Bonjour je me présente enchanté');
    $application15->setContent('Cherche job URGENT !');

    $application1->setAdvert($advert1);
    $application2->setAdvert($advert1);
    $application3->setAdvert($advert1);
    $application4->setAdvert($advert3);
    $application5->setAdvert($advert4);
    $application6->setAdvert($advert4);
    $application7->setAdvert($advert6);
    $application8->setAdvert($advert7);
    $application9->setAdvert($advert7);
    $application10->setAdvert($advert7);
    $application11->setAdvert($advert7);
    $application12->setAdvert($advert8);
    $application13->setAdvert($advert8);
    $application14->setAdvert($advert8);
    $application15->setAdvert($advert9);


    $manager->persist($application1);
    $manager->persist($application2);
    $manager->persist($application3);
    $manager->persist($application4);
    $manager->persist($application5);
    $manager->persist($application6);
    $manager->persist($application7);
    $manager->persist($application8);
    $manager->persist($application9);
    $manager->persist($application10);
    $manager->persist($application11);
    $manager->persist($application12);
    $manager->persist($application13);
    $manager->persist($application14);
    $manager->persist($application15);

    //Load advertSkills

    $advertSkill1 = new AdvertSkill();
    $advertSkill2 = new AdvertSkill();
    $advertSkill3 = new AdvertSkill();
    $advertSkill4 = new AdvertSkill();
    $advertSkill5 = new AdvertSkill();
    $advertSkill6 = new AdvertSkill();
    $advertSkill7 = new AdvertSkill();
    $advertSkill8 = new AdvertSkill();
    $advertSkill9 = new AdvertSkill();
    $advertSkill10 = new AdvertSkill();
    $advertSkill11 = new AdvertSkill();
    $advertSkill12 = new AdvertSkill();
    $advertSkill13 = new AdvertSkill();
    $advertSkill14 = new AdvertSkill();
    $advertSkill15 = new AdvertSkill();
    $advertSkill16 = new AdvertSkill();
    $advertSkill17 = new AdvertSkill();
    $advertSkill18 = new AdvertSkill();
    $advertSkill19 = new AdvertSkill();
    $advertSkill20 = new AdvertSkill();

    $advertSkill1->setLevel('medium');
    $advertSkill2->setLevel('expert');
    $advertSkill3->setLevel('novice');
    $advertSkill4->setLevel('expert');
    $advertSkill5->setLevel('novice');
    $advertSkill6->setLevel('expert');
    $advertSkill7->setLevel('medium');
    $advertSkill8->setLevel('medium');
    $advertSkill9->setLevel('expert');
    $advertSkill10->setLevel('novice');
    $advertSkill11->setLevel('medium');
    $advertSkill12->setLevel('expert');
    $advertSkill13->setLevel('novice');
    $advertSkill14->setLevel('expert');
    $advertSkill15->setLevel('novice');
    $advertSkill16->setLevel('medium');
    $advertSkill17->setLevel('expert');
    $advertSkill18->setLevel('novice');
    $advertSkill19->setLevel('medium');
    $advertSkill20->setLevel('medium');

    $advertSkill1->setLevel('medium');
    $advertSkill2->setLevel('expert');
    $advertSkill3->setLevel('novice');
    $advertSkill4->setLevel('expert');
    $advertSkill5->setLevel('novice');
    $advertSkill6->setLevel('expert');
    $advertSkill7->setLevel('medium');
    $advertSkill8->setLevel('medium');
    $advertSkill9->setLevel('expert');
    $advertSkill10->setLevel('novice');
    $advertSkill11->setLevel('medium');
    $advertSkill12->setLevel('expert');
    $advertSkill13->setLevel('novice');
    $advertSkill14->setLevel('expert');
    $advertSkill15->setLevel('novice');
    $advertSkill16->setLevel('medium');
    $advertSkill17->setLevel('expert');
    $advertSkill18->setLevel('novice');
    $advertSkill19->setLevel('medium');
    $advertSkill20->setLevel('medium');

    $advertSkill1->setAdvert($advert1);
    $advertSkill2->setAdvert($advert1);
    $advertSkill3->setAdvert($advert2);
    $advertSkill4->setAdvert($advert3);
    $advertSkill5->setAdvert($advert3);
    $advertSkill6->setAdvert($advert3);
    $advertSkill7->setAdvert($advert4);
    $advertSkill8->setAdvert($advert4);
    $advertSkill9->setAdvert($advert6);
    $advertSkill10->setAdvert($advert6);
    $advertSkill11->setAdvert($advert6);
    $advertSkill12->setAdvert($advert7);
    $advertSkill13->setAdvert($advert8);
    $advertSkill14->setAdvert($advert8);
    $advertSkill15->setAdvert($advert8);
    $advertSkill16->setAdvert($advert9);
    $advertSkill17->setAdvert($advert9);
    $advertSkill18->setAdvert($advert10);
    $advertSkill19->setAdvert($advert10);
    $advertSkill20->setAdvert($advert10);

    $advertSkill1->setSkill($skill1);
    $advertSkill2->setSkill($skill2);
    $advertSkill3->setSkill($skill1);
    $advertSkill4->setSkill($skill3);
    $advertSkill5->setSkill($skill4);
    $advertSkill6->setSkill($skill5);
    $advertSkill7->setSkill($skill1);
    $advertSkill8->setSkill($skill5);
    $advertSkill9->setSkill($skill1);
    $advertSkill10->setSkill($skill2);
    $advertSkill11->setSkill($skill4);
    $advertSkill12->setSkill($skill4);
    $advertSkill13->setSkill($skill2);
    $advertSkill14->setSkill($skill4);
    $advertSkill15->setSkill($skill5);
    $advertSkill16->setSkill($skill1);
    $advertSkill17->setSkill($skill3);
    $advertSkill18->setSkill($skill2);
    $advertSkill19->setSkill($skill3);
    $advertSkill20->setSkill($skill5);

    $manager->persist($advertSkill1);
    $manager->persist($advertSkill2);
    $manager->persist($advertSkill3);
    $manager->persist($advertSkill4);
    $manager->persist($advertSkill5);
    $manager->persist($advertSkill6);
    $manager->persist($advertSkill7);
    $manager->persist($advertSkill8);
    $manager->persist($advertSkill9);
    $manager->persist($advertSkill10);
    $manager->persist($advertSkill11);
    $manager->persist($advertSkill12);
    $manager->persist($advertSkill13);
    $manager->persist($advertSkill14);
    $manager->persist($advertSkill15);
    $manager->persist($advertSkill16);
    $manager->persist($advertSkill17);
    $manager->persist($advertSkill18);
    $manager->persist($advertSkill19);
    $manager->persist($advertSkill20);

    $manager->flush();
  }
}


?>
