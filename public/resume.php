<?php

header("Content-disposition: attachment;filename=Resume.pdf;");
header("Content-type: application/pfd");
readfile("Resume.pdf");
