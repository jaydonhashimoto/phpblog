<?php
    class Blog
    {
        //attributes
        private $id;
        private $title;
        private $body;

        /**
         * This method returns blog id
         * @return $id
         */
        public function getBlogId()
        {
            return $id;
        }

        /**
         * This method sets blog id
         * @param $i
         */
        public function setBlogId($i)
        {
            $id = $i;
        }

        /**
         * This method returns blog title
         * @return $title
         */
        public function getTitle()
        {
            return $title;
        }

        /**
         * This method sets blog title
         * @param $t
         */
        public function setTitle($t)
        {
            $title = $t;
        }
        
        /**
         * This method returns blog body
         * @return $body
         */
        public function getBody()
        {
            return $body;
        }

        /**
         * This method sets blog body
         * @param $b
         */
        public function setBody($b)
        {
            $body = $b;
        }
    }
?>