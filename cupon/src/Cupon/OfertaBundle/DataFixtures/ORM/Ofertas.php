<?
namespace Cupon\OfertaBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\OfertaBundle\Entity\Oferta;

class Ofertas implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 400; $i++)
        {
            $oferta = new Oferta();
            $oferta->setNombre('Oferta '.$i);
            $oferta->setDescripcion('Descripcion'.$i);
            $oferta->setCondiciones('Condiciones'.$i);
            $oferta->setFoto('Foto'.$i);
            $oferta->setPrecio(rand(1, 100));
            $oferta->setDescuento(rand(1.0, 100));
            $oferta->setFechaPublicacion(new \DateTime());
            $oferta->setFechaExpiracion(new \DateTime());
            $oferta->setCompras(0);
            $oferta->setUmbral(rand(25, 100));
            $oferta->setCiudad($ciudad);
            $oferta->setTienda($tienda);
            
            $manager->persist($oferta);
        }
        $manager->flush();
    }

}
