<?php

class DBMajor
{
    public static function getMajors()
    {
        return [
            'interactive-multimedia' => [
                'id' => 'interactive-multimedia',
                'name' => 'Interactive Multimedia',
                'description' => '',
                'image' => '/images/interactive-multimedia.jpg',
                'courses' => [
                    [
                        'id' => 1,
                        'title' => 'Human and Computer Interaction',
                        'slug' => 'human-and-computer-interaction',
                        'description' => 'Mempelajari bagaimana manusia berinteraksi dengan komputer serta bagaimana antarmuka digital dirancang agar mudah dan efisien digunakan.',
                        'release_date' => '2024-01-15',
                        'writer' => 'Raka Putra Wicaksono',
                        'image' => '/images/HCI.png',
                        'full_description' => 'Human and Computer Interaction (HCI) adalah bidang ilmu yang mempelajari bagaimana manusia berinteraksi dengan komputer serta bagaimana antarmuka digital dirancang agar mudah, nyaman, dan efisien digunakan. Dalam course ini, mahasiswa akan memahami konsep dasar interaksi manusia-komputer, prinsip usability, user-centered design, serta teknik evaluasi antarmuka. HCI membantu desainer menciptakan sistem yang ramah pengguna, efektif, dan dapat digunakan oleh berbagai kalangan.'
                    ],
                    [
                        'id' => 2,
                        'title' => 'User Experience',
                        'slug' => 'user-experience',
                        'description' => 'Fokus pada bagaimana pengalaman pengguna saat berinteraksi dengan produk digital seperti aplikasi atau website.',
                        'release_date' => '2024-02-20',
                        'writer' => 'Raka Putra Wicaksono',
                        'image' => '/images/User-Expirience.png',
                        'full_description' => 'User Experience (UX) adalah bidang yang fokus pada bagaimana pengalaman pengguna saat berinteraksi dengan sebuah produk digital, seperti aplikasi atau website. Course ini membahas metode riset pengguna, perancangan alur interaksi, pembuatan wireframe, serta pengujian usability untuk memastikan produk mudah dipahami dan menyenangkan digunakan. Melalui UX, mahasiswa belajar menciptakan solusi digital yang tidak hanya berfungsi, tetapi juga memberi nilai dan pengalaman positif bagi pengguna.'
                    ],
                    [
                        'id' => 3,
                        'title' => 'User Experience for Digital Immersive Technology',
                        'slug' => 'user-experience-digital-immersive-technology',
                        'description' => 'Merancang pengalaman pengguna dalam teknologi digital imersif seperti Virtual Reality (VR) dan Augmented Reality (AR).',
                        'release_date' => '2024-03-10',
                        'writer' => 'Raka Putra Wicaksono',
                        'image' => '/images/User Experience for Digital Immersive Technology.jpg',
                        'full_description' => 'Course ini membahas bagaimana merancang pengalaman pengguna dalam teknologi digital imersif seperti Virtual Reality (VR) dan Augmented Reality (AR). Mahasiswa akan belajar prinsip interaksi dalam lingkungan 3D, navigasi ruang virtual, ergonomi VR, motion sickness, serta bagaimana menyajikan informasi secara efektif dalam ruang tiga dimensi. Course ini sangat relevan untuk pengembangan aplikasi metaverse, simulasi VR, game AR, dan teknologi imersif lainnya.'
                    ]
                ]
            ],
            'software-engineering' => [
                'id' => 'software-engineering',
                'name' => 'Software Engineering',
                'description' => '',
                'image' => '/images/software-engineering.jpg',
                'courses' => [
                    [
                        'id' => 4,
                        'title' => 'Pattern Software Design',
                        'slug' => 'pattern-software-design',
                        'description' => 'Mempelajari pola-pola desain perangkat lunak yang efektif untuk menyelesaikan masalah umum dalam pengembangan aplikasi.',
                        'release_date' => '2024-01-20',
                        'writer' => 'Bia Mecca Annica',
                        'image' => '/images/Pattern-Software-Design.png',
                        'full_description' => 'Pattern Software Design membahas pola-pola desain perangkat lunak yang telah terbukti efektif untuk menyelesaikan masalah umum dalam pengembangan aplikasi. Course ini mencakup pattern seperti Singleton, Factory, Observer, dan Model-View-Controller (MVC). Mahasiswa akan memahami bagaimana menggunakan pola desain untuk meningkatkan struktur kode, mengurangi kompleksitas, serta membuat aplikasi lebih mudah dipelihara dan dikembangkan.'
                    ],
                    [
                        'id' => 5,
                        'title' => 'Agile Software Development',
                        'slug' => 'agile-software-development',
                        'description' => 'Menjelaskan pendekatan Agile dalam pengembangan perangkat lunak yang fleksibel, iteratif, dan mudah beradaptasi.',
                        'release_date' => '2024-02-15',
                        'writer' => 'Bia Mecca Annica',
                        'image' => '/images/Agile-Software-Development.png',
                        'full_description' => 'Course ini menjelaskan pendekatan Agile dalam pengembangan perangkat lunak, yaitu metode kerja yang fleksibel, iteratif, dan mudah beradaptasi terhadap perubahan kebutuhan. Mahasiswa akan mempelajari framework seperti Scrum dan Kanban, peran dalam tim Agile, sprint planning, daily standup, dan proses continuous delivery. Agile membantu tim menghasilkan produk berkualitas tinggi dengan cepat melalui kolaborasi, evaluasi rutin, dan peningkatan berkelanjutan.'
                    ],
                    [
                        'id' => 6,
                        'title' => 'Code Reengineering',
                        'slug' => 'code-reengineering',
                        'description' => 'Membahas teknik untuk mengevaluasi, memperbaiki, dan merestrukturisasi kode yang sudah ada tanpa mengubah fungsionalitasnya.',
                        'release_date' => '2024-03-05',
                        'writer' => 'Bia Mecca Annica',
                        'image' => '/images/Code-Reengineering.png',
                        'full_description' => 'Code Reengineering membahas teknik untuk mengevaluasi, memperbaiki, dan merestrukturisasi kode yang sudah ada tanpa mengubah fungsionalitasnya. Course ini mencakup konsep refactoring, optimalisasi kode, pengurangan technical debt, dan peningkatan performa aplikasi. Mahasiswa akan belajar bagaimana menjaga kualitas codebase tetap baik meskipun aplikasi terus berkembang, sehingga lebih mudah dikelola dan diperbarui di masa depan.'
                    ]
                ]
            ]
        ];
    }

    public static function getMajorBySlug($slug)
    {
        $majors = self::getMajors();
        return $majors[$slug] ?? null;
    }

    public static function getCourseById($courseId)
    {
        $majors = self::getMajors();
        foreach ($majors as $major) {
            foreach ($major['courses'] as $course) {
                if ($course['id'] == $courseId) {
                    return $course;
                }
            }
        }
        return null;
    }

    public static function getCourseBySlug($courseSlug)
    {
        $majors = self::getMajors();
        foreach ($majors as $major) {
            foreach ($major['courses'] as $course) {
                if ($course['slug'] == $courseSlug) {
                    return $course;
                }
            }
        }
        return null;
    }

    public static function getWriters()
    {
        return [
            'raka-putra-wicaksono' => [
                'id' => 'raka-putra-wicaksono',
                'name' => 'Raka Putra Wicaksono',
                'specialty' => 'Spesialist Interactive Multimedia',
                'image' => '/images/Raka.png'
            ],
            'bia-mecca-annica' => [
                'id' => 'bia-mecca-annica',
                'name' => 'Bia Mecca Annica',
                'specialty' => 'Spesialist Software Engineer',
                'image' => '/images/Bia.png'
            ],
            'abi-firmansyah' => [
                'id' => 'abi-firmansyah',
                'name' => 'Abi Firmansyah',
                'specialty' => 'Spesialist Network Security',
                'image' => '/images/Abi.png'
            ]
        ];
    }

    public static function getWriterBySlug($writerSlug)
    {
        $writers = self::getWriters();
        return $writers[$writerSlug] ?? null;
    }

    public static function getCoursesByWriter($writerName)
    {
        $courses = [];
        $majors = self::getMajors();
        foreach ($majors as $major) {
            foreach ($major['courses'] as $course) {
                if ($course['writer'] == $writerName) {
                    $courses[] = $course;
                }
            }
        }
        return $courses;
    }

    public static function getPopularCourses()
    {
        $allCourses = [];
        $majors = self::getMajors();
        foreach ($majors as $major) {
            foreach ($major['courses'] as $course) {
                $allCourses[] = $course;
            }
        }
        return $allCourses;
    }

    public static function getPopularCoursesWithPagination($page = 1, $perPage = 3)
    {
        $courses = self::getPopularCourses();
        $totalCourses = count($courses);
        $totalPages = ceil($totalCourses / $perPage);
        $offset = ($page - 1) * $perPage;
        $coursesForPage = array_slice($courses, $offset, $perPage);

        return [
            'courses' => $coursesForPage,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalCourses' => $totalCourses
        ];
    }
}
