<? 
    namespace Student\Booking\routes;

    class Route implements RouterStrategy {

        private string $path; // <--- router set on this route

        public function __construct(string $path) {
            $this->path = $path;
        }

        //                          http from client
        //                            v
        public function match(string $url): bool {
            return $url === $this->path;
        }

        public function execute(/* ... ??? */) /*: ??? */{
            
        }
    
    }
