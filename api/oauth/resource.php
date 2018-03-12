
<
?
p
h
p

/
*
*

 
*
 
H
a
n
d
l
e
 
a
 
r
e
q
u
e
s
t
 
t
o
 
a
 
r
e
s
o
u
r
c
e
 
a
n
d
 
a
u
t
h
e
n
t
i
c
a
t
e
 
t
h
e
 
a
c
c
e
s
s
 
t
o
k
e
n

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
/


r
e
q
u
i
r
e
_
o
n
c
e
 
_
_
D
I
R
_
_
.
'
/
s
e
r
v
e
r
.
p
h
p
'
;


i
f
 
(
!
$
s
e
r
v
e
r
-
>
v
e
r
i
f
y
R
e
s
o
u
r
c
e
R
e
q
u
e
s
t
(
O
A
u
t
h
2
\
R
e
q
u
e
s
t
:
:
c
r
e
a
t
e
F
r
o
m
G
l
o
b
a
l
s
(
)
)
)
 
{

 
 
 
 
$
s
e
r
v
e
r
-
>
g
e
t
R
e
s
p
o
n
s
e
(
)
-
>
s
e
n
d
(
)
;

 
 
 
 
d
i
e
;

}

