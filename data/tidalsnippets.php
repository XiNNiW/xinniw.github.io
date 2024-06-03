<?php
$site->data["tidalsnippets"] = [
(object)[ 'code'=> 'do
d9 $ midicmd "stop" # s "midi"
hush',],

(object)[ 'code'=> 'd9 $ midicmd "start" # s "midi"',],

(object)[ 'code'=> 'let melody = slow 6 $ "0 2 [4 8 .] [3 4 3] 8 4 9"',],

(object)[ 'code'=> 'inversion = (* (-1))',],

(object)[ 'code'=> 'generateMelodicSeed = slow 4
  $ linger 0.5
  $ repeatCycles 3
  -- $ palindrome \n
  $ (+ (slow (irand (4)+1) (sometimes (inversion) (run (irand (4)+1)))))
  $ slow ((irand 3) + 1)
  $ e ("x"<~>(irand 8)) 8
  $ "x*16"<~>(irand 5)',],

(object)[ 'comment'=> '-- scalePattern = slow 12 "<egyptian [egyptian minPent] [ritusen pelog]>"',
  'code'=> 'scalePattern = slow 12 "<egyptian egyptian minPent ritusen>"',],

(object)[ 'code'=> 'scalePattern = slow 16 "<phrygian lydian>"',],


(object)[ 'code'=> 'do
cps (86/60/2)
d9 $ midicmd "midiClock*48" # s "midi"',],

(object)[ 'code'=> 'd9 $ midicmd "start" # s "midi"',],

(object)[ 'code'=> 'hush',],

(object)[ 'code'=> 'd1
$ note
((scaleP scalePattern
  $ off 4 ((+ 2 ).slow 2)
  $ off 1 (inversion.slow 2)
  $ off 3 (inversion.slow 3)
  $ off 1.5 ((+ 2).rev.slow 2)
  $ generateMelodicSeed
))#s "[pe-gtr:10,midi]" #gain 1 #orbit 0 #midichan 1',],

(object)[ 'code'=> 'd2
$ note
((scaleP scalePattern
  $ (rotR 3.5)
  -- $ inversion \n
  $ (+ slow 8 "x" <~> ((0.5 ~>) generateMelodicSeed))
  -- $ slow 2 \n
  $ generateMelodicSeed
) - 12)#s "[pe-gtr:9,midi]" #gain 1.2 #orbit 1 #midichan 2',],

(object)[ 'code'=> 'd3
$ note
((scaleP scalePattern
  $ (rotR 4)
  $ (+ slow 8 "x" <~> ((0.25 ~>) generateMelodicSeed))
  -- $ slow 4 \n
  $ generateMelodicSeed
))#s "[pe-gtr:8,midi]" #gain 1.2 #orbit 2 #midichan 3
',],

(object)[ 'code'=> 'd4
-- $ rev \n
$ note
((scaleP scalePattern
  -- $ off 4 ((+ 2 ).slow 2) \n
  -- $ off 1 (inversion.slow 2) \n
  $(rotR 1.5 )
  $(+ slow 8 "x" <~> generateMelodicSeed)
  -- $ inversion \n
  $ generateMelodicSeed
))#s "[pe-gtr:12,midi]" #gain 1.2 #orbit 3 #midichan 4
',],]
?>
