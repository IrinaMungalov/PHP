<? 
    namespace Student\Booking\routes;

    class RouteParam implements RouterStrategy {

        private string $path; // <--- router set on this route
        private string $pattern;
        private array $params = [];

        public function __construct(string $path) {
            $this->pattern = '/^' . preg_replace('/{.*}/','([0-9\-a-b]+)', str_replace('/', '\/', $path)) . '/';    // '/^\/tour\/([0-9\-a-b]+)/'
            
            $this->path = $path; // <--- '/tour/{id}'
        }

        //                          http from client
        //                            v
        public function match(string $url): bool {
            return preg_match($this->pattern, $url);
        }

        public function execute(/* ... ??? */) /*: ??? */{
            
        }
    
    }
