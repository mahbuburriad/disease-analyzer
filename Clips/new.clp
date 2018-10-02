(defrule headache-determine
=>
(printout t "Do you feel headache? (yes or no): " crlf)
(assert (headache (read))))

(defrule headache-yes
?headache <-
(headache ?headache-read&yes|y)
=>
(retract ?headache)
(printout t "Do you feel any temperature? : yes or no : " crlf)
(assert (temp (read))))

(defrule headache-no
?headache <-
(headache ?headache-read&no|n)
=>
(retract ?headache)
(printout t "Do you feel abdominal-pain? : yes or no : " crlf)
(assert (abdominal (read))))



