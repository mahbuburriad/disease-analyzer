
;;;======================================================
;;;   Virtual Doctor - Disease Analyzer
;;;
;;;     This expert system diagnoses some simple
;;;     disease analyze by web and android phone.
;;;
;;;     CLIPS Version 6.3
;;;
;;;     For use need iss, perl and clips for webversion
;;;======================================================

;;;*****************
;;;* Configuration *
;;;*****************
   
(defglobal ?*target* = cgi) ; console, clipsjni, or cgi

;;; ***************************
;;; * DEFTEMPLATES & DEFFACTS *
;;; ***************************

(deftemplate MAIN::text-for-id
   (slot id)
   (slot text))

(deftemplate UI-state
   (slot id (default-dynamic (gensym*)))
   (slot display)
   (slot relation-asserted (default none))
   (slot response (default none))
   (multislot valid-answers)
   (multislot display-answers)
   (slot state (default middle)))
   
(deftemplate state-list
   (slot current)
   (multislot sequence))
  
(deffacts startup
   (state-list))

;;;***************************
;;;* DEFFUNCTION DEFINITIONS *
;;;***************************

(deffunction MAIN::find-text-for-id (?id)
   ;; Search for the text-for-id fact
   ;; with the same id as ?id
   (bind ?fact
      (find-fact ((?f text-for-id))
                  (eq ?f:id ?id)))
   (if ?fact
      then
      (fact-slot-value (nth$ 1 ?fact) text)
      else
      ?id))
      
(deffunction MAIN::translate-av (?values)
   ;; Create the return value
   (bind ?result (create$))
   ;; Iterate over each of the allowed-values
   (progn$ (?v ?values)
      ;; Find the associated text-for-id fact
      (bind ?nv
         (find-text-for-id ?v))
      ;; Add the text to the return value
      (bind ?result (create$ ?result ?nv)))
   ;; Return the return value
   ?result)

(deffunction MAIN::replace-spaces (?str)
   (bind ?len (str-length ?str))
   (bind ?i (str-index " " ?str))
   (while (neq ?i FALSE)
      (bind ?str (str-cat (sub-string 1 (- ?i 1) ?str) "-" (sub-string (+ ?i 1) ?len ?str)))
      (bind ?i (str-index " " ?str)))
   ?str)

(deffunction MAIN::sym-cat-multifield (?values)
   (bind ?rv (create$))
   (progn$ (?v ?values)
      (bind ?rv (create$ ?rv (sym-cat (replace-spaces ?v)))))
   ?rv)

(deffunction MAIN::multifield-to-delimited-string (?mv ?delimiter)
   (bind ?rv "")
   (bind ?first TRUE)
   (progn$ (?v ?mv)
      (if ?first
         then
         (bind ?first FALSE)
         (bind ?rv (str-cat ?v))
         else
         (bind ?rv (str-cat ?rv ?delimiter ?v))))
   ?rv)

;;;*****************
;;;* STATE METHODS *
;;;*****************
      
;;; Console target
   
(defmethod handle-state ((?state SYMBOL (eq ?state greeting))
                         (?target SYMBOL (eq ?target console))
                         (?display LEXEME)
                         (?relation-asserted SYMBOL)
                         (?valid-answers MULTIFIELD))
   (printout t ?display crlf)
   (str-assert (str-cat "(" ?relation-asserted " " yes ")")))

(defmethod handle-state ((?state SYMBOL (eq ?state interview))
                         (?target SYMBOL (eq ?target console))
                         (?question LEXEME)
                         (?relation-asserted SYMBOL)
                         (?response PRIMITIVE) ; default
                         (?valid-answers MULTIFIELD)
                         (?display-answers MULTIFIELD))
   (bind ?display-answers (sym-cat-multifield ?display-answers))
   (format t "%s " ?question)
   (printout t ?display-answers " ")
   (bind ?answer (read))
   (if (lexemep ?answer) 
       then (bind ?answer (lowcase ?answer)))
   (while (not (member ?answer ?display-answers)) do
      (format t "%s " ?question)
      (printout t ?display-answers " ")
      (bind ?answer (read))
      (if (lexemep ?answer) 
          then (bind ?answer (lowcase ?answer))))
   (bind ?pos (member$ ?answer ?display-answers))
   (bind ?answer (nth$ ?pos ?valid-answers))
   (str-assert (str-cat "(" ?relation-asserted " " ?answer ")")))

(defmethod handle-state ((?state SYMBOL (eq ?state conclusion))
                         (?target SYMBOL (eq ?target console))
                         (?display LEXEME))
   (assert (conclusion))
   (printout t ?display crlf)
   (halt))

;;; CGI target

(defmethod handle-state ((?state SYMBOL (eq ?state greeting))
                         (?target SYMBOL (eq ?target cgi))
                         (?display LEXEME)
                         (?relation-asserted SYMBOL)
                         (?valid-answers MULTIFIELD))
   (printout t "state=greeting" crlf)
   (printout t "display=" ?display crlf)
   (printout t "variable=greeting" crlf)
   (printout t "validAnswers=yes" crlf)
   (printout t "displayAnswers=yes" crlf)
   (printout t "prevLabel=" (find-text-for-id Prev) crlf)
   (printout t "nextLabel=" (find-text-for-id Next) crlf)
   (printout t "restartLabel=" (find-text-for-id Restart) crlf)
   (printout t "autoDemoLabel=" (find-text-for-id AutoDemo) crlf)
   (halt))

(defmethod handle-state ((?state SYMBOL (eq ?state interview))
                         (?target SYMBOL (eq ?target cgi))
                         (?message LEXEME)
                         (?relation-asserted SYMBOL)
                         (?response PRIMITIVE)
                         (?valid-answers MULTIFIELD)
                         (?display-answers MULTIFIELD))
   (printout t "state=interview" crlf)
   (printout t "display=" ?message crlf)  
   (printout t "variable=" ?relation-asserted crlf)
   (printout t "validAnswers=" (multifield-to-delimited-string ?valid-answers ":") crlf)
   (printout t "displayAnswers=" (multifield-to-delimited-string ?display-answers ":") crlf) 
   (printout t "prevLabel=" (find-text-for-id Prev) crlf)
   (printout t "nextLabel=" (find-text-for-id Next) crlf)
   (printout t "restartLabel=" (find-text-for-id Restart) crlf)
   (printout t "autoDemoLabel=" (find-text-for-id AutoDemo) crlf)
   (halt))

(defmethod handle-state ((?state SYMBOL (eq ?state conclusion))
                         (?target SYMBOL (eq ?target cgi))
                         (?display LEXEME))
   (printout t "state=conclusion" crlf)
   (printout t "display=" ?display crlf)
   (printout t "prevLabel=" (find-text-for-id Prev) crlf)
   (printout t "nextLabel=" (find-text-for-id Next) crlf)
   (printout t "restartLabel=" (find-text-for-id Restart) crlf)
   (printout t "autoDemoLabel=" (find-text-for-id AutoDemo) crlf)
   (halt))

;;; CLIPSJNI target

(defmethod handle-state ((?state SYMBOL (eq ?state greeting))
                         (?target SYMBOL (eq ?target clipsjni))
                         (?message LEXEME)
                         (?relation-asserted SYMBOL)
                         (?valid-answers MULTIFIELD))
   (assert (UI-state (display ?message)
                     (relation-asserted ?relation-asserted)
                     (state ?state)
                     (valid-answers $?valid-answers)))
   (halt))

(defmethod handle-state ((?state SYMBOL (eq ?state interview))
                         (?target SYMBOL (eq ?target clipsjni))
                         (?message LEXEME)
                         (?relation-asserted SYMBOL)
                         (?response PRIMITIVE)
                         (?valid-answers MULTIFIELD)
                         (?display-answers MULTIFIELD))
   (assert (UI-state (display ?message)
                     (relation-asserted ?relation-asserted)
                     (response ?response)
                     (valid-answers ?valid-answers)
                     (display-answers ?display-answers)))
   (halt))
   
;;;****************
;;;* STARTUP RULE *
;;;****************

(defrule system-banner ""
  (not (greeting yes))
  =>
  (handle-state greeting
                ?*target*
                (find-text-for-id WelcomeMessage)
                greeting
                (create$)))
  
;;;***************
;;;* QUERY RULES *
;;;***************

(defrule determine-headache-state ""

   (greeting yes)
   (not (headache ?))
   
   =>

   (bind ?answers (create$ no yes))
   (handle-state interview
                 ?*target*
                 (find-text-for-id headache)
                 headache
                 (nth$ 1 ?answers)
                 ?answers
                 (translate-av ?answers)))
   
(defrule determine-vomiting-normally ""
(headache yes)
   (not (vomiting ?))
   
   =>

   (bind ?answers (create$ no yes))
   (handle-state interview
                 ?*target*
                 (find-text-for-id vomiting)
                 vomiting
                 (nth$ 1 ?answers)
                 ?answers
                 (translate-av ?answers)))
                 
                 (defrule determine-suddenfever-normally ""
(headache no)
   (not (suddenfever ?))
   
   =>

   (bind ?answers (create$ no yes))
   (handle-state interview
                 ?*target*
                 (find-text-for-id suddenfever)
                 suddenfever
                 (nth$ 1 ?answers)
                 ?answers
                 (translate-av ?answers)))
                 
                 (defrule determine-musclepain-normally ""
(suddenfever yes)
   (not (musclepain ?))
   
   =>

   (bind ?answers (create$ no yes))
   (handle-state interview
                 ?*target*
                 (find-text-for-id musclepain)
                 musclepain
                 (nth$ 1 ?answers)
                 ?answers
                 (translate-av ?answers)))
                 
                 (defrule determine-diarrhea-normally ""
(musclepain yes)
   (not (diarrhea ?))
   
   =>

   (bind ?answers (create$ no yes))
   (handle-state interview
                 ?*target*
                 (find-text-for-id diarrhea)
                 diarrhea
                 (nth$ 1 ?answers)
                 ?answers
                 (translate-av ?answers)))
                 
                 
                 (defrule determine-sweating-normally ""
(diarrhea yes)
   (not (sweating ?))
   
   =>

   (bind ?answers (create$ no yes))
   (handle-state interview
                 ?*target*
                 (find-text-for-id sweating)
                 sweating
                 (nth$ 1 ?answers)
                 ?answers
                 (translate-av ?answers)))
                 
                 
                 (defrule determine-temperature-normally ""
(suddenfever no)
   (not (temperature ?))
   
   =>

   (bind ?answers (create$ no yes))
   (handle-state interview
                 ?*target*
                 (find-text-for-id temperature)
                 temperature
                 (nth$ 1 ?answers)
                 ?answers
                 (translate-av ?answers)))
                 
                 
                 (defrule determine-bodypain-normally ""
(temperature yes)
   (not (bodypain ?))
   
   =>

   (bind ?answers (create$ no yes))
   (handle-state interview
                 ?*target*
                 (find-text-for-id bodypain)
                 bodypain
                 (nth$ 1 ?answers)
                 ?answers
                 (translate-av ?answers)))
                 
                 
                 (defrule determine-weakness-normally ""
(bodypain yes)
   (not (weakness ?))
   
   =>

   (bind ?answers (create$ no yes))
   (handle-state interview
                 ?*target*
                 (find-text-for-id weakness)
                 weakness
                 (nth$ 1 ?answers)
                 ?answers
                 (translate-av ?answers)))
                 
                 
                 (defrule determine-rashes-normally ""
(weakness yes)
   (not (rashes ?))
   
   =>

   (bind ?answers (create$ no yes))
   (handle-state interview
                 ?*target*
                 (find-text-for-id rashes)
                 rashes
                 (nth$ 1 ?answers)
                 ?answers
                 (translate-av ?answers)))
                 
                 (defrule determine-jointswelling-normally ""
(rashes yes)
   (not (jointswelling ?))
   
   =>

   (bind ?answers (create$ no yes))
   (handle-state interview
                 ?*target*
                 (find-text-for-id jointswelling)
                 jointswelling
                 (nth$ 1 ?answers)
                 ?answers
                 (translate-av ?answers)))
                 
                 



;;;****************
;;;* REPAIR RULES *
;;;****************

(defrule sweating-state-conclusions ""
   (declare (salience 10))
   (sweating yes)
   =>
   (handle-state conclusion ?*target* (find-text-for-id malaria)))
   
   (defrule jointswelling-state-conclusions ""
   (declare (salience 10))
   (jointswelling yes)
   =>
   (handle-state conclusion ?*target* (find-text-for-id chikungunya)))
   
   
  
