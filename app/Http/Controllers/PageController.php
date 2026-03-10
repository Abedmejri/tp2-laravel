<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $articles = [
        1 => [
            'id' => 1,
            'title' => 'Introduction à Laravel 12',
            'author' => 'Jean Dupont',
            'date' => '2025-03-10',
            'excerpt' => 'Découvrez les fondamentaux du framework PHP le plus populaire au monde...',
            'content' => 'Laravel 12 apporte de nombreuses améliorations en termes de performance et d\'expérience développeur. Dans cet article, nous explorons les nouvelles fonctionnalités, la structure simplifiée des dossiers et comment démarrer votre premier projet en quelques minutes.',
            'image' => 'laravel.png'
        ],
        2 => [
            'id' => 2,
            'title' => 'Les nouveautés de PHP 8.4',
            'author' => 'Marie Curie',
            'date' => '2025-03-08',
            'excerpt' => 'PHP continue d\'évoluer avec des performances accrues et de nouveaux types...',
            'content' => 'La version 8.4 de PHP introduit des concepts passionnants comme les hooks de propriété (property hooks), l\'instanciation sans parenthèses et des optimisations JIT. C\'est une étape majeure pour la robustesse du langage.',
            'image' => 'php.png'
        ],
        3 => [
            'id' => 3,
            'title' => 'Pourquoi choisir un design Minimaliste ?',
            'author' => 'Sacha Lopez',
            'date' => '2025-02-25',
            'excerpt' => 'Le minimalisme en web design n\'est pas seulement une tendance, c\'est une stratégie...',
            'content' => 'Un design minimaliste permet de réduire la charge cognitive des utilisateurs. En se concentrant sur l\'essentiel, on améliore la conversion et la clarté du message. Nous voyons ici comment appliquer ces principes avec élégance.',
            'image' => 'minimalist.png'
        ],
        4 => [
            'id' => 4,
            'title' => 'Le futur du Développement Web',
            'author' => 'Alan Turing',
            'date' => '2025-02-15',
            'excerpt' => 'IA, Web3, Edge Computing : où va le web en 2025 ?',
            'content' => 'Le paysage du développement web change radicalement avec l\'intégration de l\'IA générative directement dans les flux de travail. L\'Edge computing réduit la latence à presque zéro, transformant l\'expérience utilisateur globale.',
            'image' => 'future.png'
        ],
        5 => [
            'id' => 5,
            'title' => 'Maîtriser les composants Blade',
            'author' => 'Ada Lovelace',
            'date' => '2025-02-01',
            'excerpt' => 'Réutilisez votre code efficacement avec les composants Laravel Blade...',
            'content' => 'Blade est un moteur de template puissant. Les composants permettent de créer des éléments UI réutilisables, testables et organisés. Apprenez à passer des variables, utiliser des slots et gérer les attributs de manière dynamique.',
            'image' => 'blade.png'
        ],
    ];

    public function index()
    {
        return view('home', ['title' => 'Accueil']);
    }

    public function about()
    {
        return view('about', ['title' => 'À Propos']);
    }

    public function services()
    {
        $services = [
            'Développement Web' => 'Création de sites modernes et performants.',
            'Design UI/UX' => 'Conception d\'interfaces intuitives et esthétiques.',
            'SEO & Marketing' => 'Optimisation pour les moteurs de recherche.',
            'Maintenance' => 'Suivi et mise à jour de vos applications.'
        ];
        return view('services', ['title' => 'Nos Services', 'services' => $services]);
    }

    public function blog()
    {
        return view('blog.index', [
            'title' => 'Notre Blog',
            'articles' => $this->articles
        ]);
    }

    public function showArticle($id)
    {
        if (!isset($this->articles[$id])) {
            abort(404);
        }

        return view('blog.show', [
            'title' => $this->articles[$id]['title'],
            'article' => $this->articles[$id]
        ]);
    }

    public function contact()
    {
        return view('contact', ['title' => 'Contactez-nous']);
    }
}
