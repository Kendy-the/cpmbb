@php 
    $comments = [
        [
            'name' => 'Jean Dupont',
            'image' => '/img/book.jpg',
            'comment' => "Le CPMB est un endroit où mon enfant a vraiment pu s'épanouir, avec des professeurs toujours à l'écoute.",
        ],
        [
            'name' => 'Marie Curie',
            'image' => '/img/class.jpg',
            'comment' => "Des infrastructures modernes et un personnel dévoué font du CPMB un établissement d'excellence.",
        ]

    ]
@endphp
<div class="bg-white md:p-20 py-10" 
     x-data="commentsSlider({{ Js::from($comments) }})">
    <div class="container px-4 mx-auto">

        <template x-for="(comment, index) in comments" :key="index">
            <div x-show="index === comment_ID" 
                 class="group flex flex-col lg:grid lg:grid-cols-3 md:px-10 transition-all duration-500 ease-in-out transform"
                 :class="animationClass">

                <!-- Client -->
                <div class="lg:grid lg:grid-rows-2 md:ps-5 mb-10 lg:mb-0">
                    <div>
                        <!-- icon -->
                        <i class="ri-double-quotes-l text-3xl lg:text-9xl"></i>
                        <div class="ps-3 lg:ps-0 text-lg md:text-xl lg:text-2xl relative">Avis Parents</div>
                    </div>

                    <!-- client name -->
                    <div class="hidden lg:flex ps-3 lg:ps-0 uppercase text-lg md:text-xl font-bold flex-col justify-end underline">
                        <div x-text="comment.name"></div>
                    </div>
                </div>

                <div class="flex items-center justify-center mb-10 lg:mb-0">
                    <div class="bg-primary h-[400px] w-[20%] lg:h-full lg:w-[50%]"></div>

                    <!-- client image -->
                    <img class="transform transition-transform duration-300 hover:scale-110 hover:shadow-4xl rounded-full w-40 h-40 md:w-50 md:h-50 lg:w-60 lg:h-60 absolute shadow-2xl"
                        :src="comment.image" 
                        alt="Image Client">

                        
                    <!-- previous -->
                    <i @click="previousComment(index)" class="ri-arrow-left-wide-fill text-7xl lg:hidden absolute left-[10%] md:left-1/4 shadow group-hover:block animate-slideDown-left"></i>
    
                    <!-- next -->
                    <i @click="nextComment(index)" class="ri-arrow-right-wide-fill text-7xl lg:hidden absolute right-[10%] md:right-1/4 shadow group-hover:block animate-slideDown-right"></i>

                </div>

                <!-- client comment -->
                <div>
                    <i class="ri-double-quotes-l text-base"></i><br>
                    <p class="italic text-base ps-5" style="line-height: 40px;" 
                       x-text="comment.comment"></p>

                    <!-- client name (mobile) -->
                    <div class="lg:hidden text-center underline uppercase text-lg md:text-xl font-bold">
                        <div x-text="comment.name"></div>
                    </div>
                </div>
            </div>
        </template>

    </div>
</div>

<script>
    function commentsSlider(comments) {
        return {
            comments: comments,
            comment_ID: 0,
            animationClass: 'opacity-100 translate-x-0',

            nextComment() {
                this.animationClass = 'opacity-0 -translate-x-10'
                setTimeout(() => {
                    this.comment_ID = (this.comment_ID + 1) % this.comments.length
                    this.animationClass = 'opacity-0 translate-x-10'
                    setTimeout(() => {
                        this.animationClass = 'opacity-100 translate-x-0'
                    }, 50)
                }, 300)
            },

            previousComment() {
                this.animationClass = 'opacity-0 translate-x-10'
                setTimeout(() => {
                    this.comment_ID = (this.comment_ID - 1 + this.comments.length) % this.comments.length
                    this.animationClass = 'opacity-0 -translate-x-10'
                    setTimeout(() => {
                        this.animationClass = 'opacity-100 translate-x-0'
                    }, 50)
                }, 300)
            }
        }
    }
</script>