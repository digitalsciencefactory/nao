<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * User
 *
 * @ORM\Table(name="fnat_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @UniqueEntity(fields={"mail"}, message="Cet e-mail est déjà utilisé.", groups={"obs","nat"})
 * @UniqueEntity(fields={"pseudo"}, message="Ce pseudonyme est déjà utilisé.", groups={"obs","nat"})
 * @ORM\HasLifecycleCallbacks
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, unique=true)
     * @Assert\NotBlank(groups={"login"})
     * @Assert\NotBlank(groups={"nat"})
     * @Assert\NotBlank(groups={"obs"})
     * @Assert\Email
     */
    private $mail;

    /**
     * @var string
     * @ORM\Column(name="pseudo", type="string", length=20, unique=true)
     * @Assert\NotBlank(groups={"login"})
     * @Assert\NotBlank(groups={"nat"})
     * @Assert\NotBlank(groups={"obs"})
     * @Assert\Length(
     *     min        = 4,
     *     max        = 20,
     *     minMessage = "Votre pseudonyme doit faire au moins { min } caractères",
     *     maxMessage = "Votre psudonyme ne peut exéder { max } caractères.")
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=65)
     *
     */
    private $mdp;

    /**
     * @Assert\NotBlank(groups={"login"})
     * @Assert\Length(max=4096, groups={"login"})
     * @Assert\Length(max=4096, groups={"nat"})
     * @Assert\Length(max=4096, groups={"obs"})
     */
    private $plainPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     * @Assert\Length(max=45, groups={"update"})
     * @Assert\Length(max=45)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     * @Assert\Length(max=45, groups={"update"})
     * @Assert\Length(max=45)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=true)
     * @Assert\Length(max=1)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=5, nullable=true)
     * @Assert\Length(min=5, max=5, minMessage="Le code postal doit être composé de 5 chiffres", maxMessage="Le code postal doit être composé de 5 chiffres", groups={"update"})
     */
    private $codePostal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ddn", type="date", nullable=true)
     * @Assert\Date(message="La date doit être au format JJ/MM/YYYY", groups={"update"})
     */
    private $ddn;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     * @Assert\Length(max=255, groups={"update"})
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="carte", type="string", length=255, nullable=true, unique=true)
     *
     * @Assert\Length(max=255)
     */
    private $carte;

    /**
     * @var UploadedFile
     * @Assert\NotBlank(groups={"nat"})
     * @Assert\File(maxSize="5M", maxSizeMessage="Le fichier est trop volumineux, la limite est {{ size }} {{suffix}}.", mimeTypes={"jpeg","png","image/png","image/jpeg","image/jpg"}, mimeTypesMessage="Seuls les fichiers de type {{ types }} sont autorisés. Votre fichier est de type {{ type }}",disallowEmptyMessage="Le fichier envoyé ne peut être vide.", notFoundMessage="Le fichier ne peut être trouvé.", notReadableMessage="Le fichier n'est pas lisible", groups={"nat"})
     */
    private $file;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Observation", mappedBy="observateur")
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=14)
     */
    private $statut;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array")
     */
    private $roles = array();

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=65, nullable=true)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dcree", type="datetime")
     */
    private $dcree;

    /* *** CONSTRUCTEUR *** */

    /**
     * User constructor.
     */
    public function __construct()
    {
    $this->photo = "avatar1.png";
    }

    /* *** METHODES *** */

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }



    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return User
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return User
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ddn
     *
     * @param \DateTime $ddn
     *
     * @return User
     */
    public function setDdn($ddn)
    {
        $this->ddn = $ddn;

        return $this;
    }

    /**
     * Get ddn
     *
     * @return \DateTime
     */
    public function getDdn()
    {
        return $this->ddn;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set carte
     *
     * @param string $carte
     *
     * @return User
     */
    public function setCarte($carte)
    {
        $this->carte = $carte;

        return $this;
    }

    /**
     * Get carte
     *
     * @return string
     */
    public function getCarte()
    {
        return $this->carte;
    }

    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
    }



    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return User
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return User
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set dcree
     *
     * @param \DateTime $dcree
     *
     * @return User
     */
    public function setDcree($dcree)
    {
        $this->dcree = $dcree;

        return $this;
    }

    /**
     * Get dcree
     *
     * @return \DateTime
     */
    public function getDcree()
    {
        return $this->dcree;
    }

    /**
     * Add observation
     *
     * @param \AppBundle\Entity\Observation $observation
     *
     * @return User
     */
    public function addObservation(\AppBundle\Entity\Observation $observation)
    {
        $this->observations[] = $observation;

        return $this;
    }

    /**
     * Remove observation
     *
     * @param \AppBundle\Entity\Observation $observation
     */
    public function removeObservation(\AppBundle\Entity\Observation $observation)
    {
        $this->observations->removeElement($observation);
    }

    /**
     * Get observations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return $this->mdp;
    }

    /**
     * bcrypt used so return null
     *
     * @return null
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * @return string The username
     * Retourne l'email en lieu et place de l'username,
     * utile pour berner l'implémentation de UserInterface
     */
    public function getUsername()
    {
        return $this->mail;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->mail,
            $this->mdp,
            $this->nom,
            $this->prenom,
            $this->sexe,
            $this->codePostal,
            $this->ddn,
            $this->photo,
            $this->carte,
            $this->token,
            $this->roles,
            $this->statut,
            $this->dcree
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->mail,
            $this->mdp,
            $this->nom,
            $this->prenom,
            $this->sexe,
            $this->codePostal,
            $this->ddn,
            $this->photo,
            $this->carte,
            $this->token,
            $this->roles,
            $this->statut,
            $this->dcree
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function upload()
    {
        // Si jamais il n'y a pas de fichier (champ facultatif pour les non naturalistes), on ne fait rien
        if (null === $this->file) {
            return;
        }

        $name = substr(bin2hex(random_bytes(30)),0,25) . "." . $this->file->getClientOriginalExtension();

        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->file->move($this->getUploadRootDir(), $name);

        // On sauvegarde le nom de fichier dans notre attribut $url
        $this->carte = $name;

    }

    public function getUploadDir()
    {
        return 'assets/fnat/naturalistes';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }
}
