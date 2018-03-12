
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
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
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
0
6
0
0
0
h
a
n
d
l
e
r
e
q

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*
*

 
 
 
 
 
 
 
 
 
*
 
R
e
c
e
i
v
e
s
 
2
 
c
a
l
l
s
 
f
r
o
m
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
,
 
p
r
o
c
e
s
s
e
s
 
t
h
e
m
 
a
n
d
 
r
e
t
u
r
n
s
 
s
t
u
f
f

 
 
 
 
 
 
 
 
 
*
 
C
a
l
l
 
1
:
 
N
o
t
e
s
 
t
h
e
 
c
h
a
n
g
e
d
 
d
e
t
a
i
l
s
.
 
S
a
n
i
t
i
s
e
s
 
a
n
d
 
c
h
a
n
g
e
s
 
t
h
e
 
b
o
o
k
i
n
g
'
s
 
p
a
r
a
m
e
t
e
r
s
 
t
o
 
r
e
f
l
e
c
t
 
t
h
e
 
c
h
a
n
g
e

 
 
 
 
 
 
 
 
 
*
 
C
a
l
l
 
2
:
 
R
e
b
u
i
l
d
s
 
t
h
e
 
r
o
o
m
 
l
i
s
t
 
 
(
o
r
 
s
i
m
p
l
y
 
o
u
t
p
u
t
s
 
"
W
e
 
h
a
v
e
 
b
o
o
k
i
n
g
s
"
 
i
n
 
t
h
e
 
c
a
s
e
 
o
f
 
S
R
P
s
)
 
a
n
d
 
r
e
t
u
r
n
s
 
t
h
e
 
r
o
o
m
 
l
i
s
t
.
 
T
h
i
s
 
i
s
 
p
a
r
s
e
d
 
b
y
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
 
a
s
 
p
l
a
i
n
 
t
e
x
t
 
i
n
 
t
h
e
 
r
o
o
m
 
d
e
t
a
i
l
s
 
f
i
e
l
d
.
 
N
e
e
d
s
 
t
o
 
b
e
 
p
l
a
i
n
 
t
e
x
t
 
a
s
 
t
h
e
 
o
v
e
r
l
i
b
 
d
a
t
a
 
r
e
t
u
r
n
e
d
 
w
i
l
l
 
u
p
d
a
t
e
 
j
a
v
a
s
c
r
i
p
t

 
 
 
 
 
 
 
 
 
*
 
C
a
l
l
 
3
:
 
C
a
l
c
u
l
a
t
e
s
 
r
o
o
m
 
p
r
i
c
e
s
 
a
n
d
 
c
o
n
s
t
r
u
c
t
s
 
a
n
y
 
w
a
r
n
i
n
g
s
.
 
S
e
t
s
 
b
a
c
k
g
r
o
u
n
d
 
c
o
l
o
u
r
s
 
o
f
 
t
h
e
 
m
e
s
s
a
g
e
s
 
f
i
e
l
d
 
a
n
d
 
r
e
t
u
r
n
s
 
t
h
e
 
c
a
l
c
u
l
a
t
e
d
 
p
r
i
c
e
s
,
 
t
h
e
 
m
e
s
s
a
g
e
s
 
w
h
e
n
 
a
r
e
 
i
n
 
t
u
r
n
 
p
a
r
s
e
d
 
b
y
 
j
a
v
a
s
c
r
i
p
t
 
i
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
 
a
n
d
 
d
i
s
p
l
a
y
e
d
.

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
r
_
u
s
e
r
'
)
;


 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
D
e
e
t
s
 
=
 
g
e
t
t
e
m
p
B
o
o
k
i
n
g
d
a
t
a
(
)
;

 
 
 
 
 
 
 
 
$
p
i
d
 
=
 
$
b
o
o
k
i
n
g
D
e
e
t
s
[
 
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
]
;


 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
$
p
i
d
)
;

 
 
 
 
 
 
 
 
/
/
$
t
a
r
i
f
f
C
l
a
s
s
=
$
m
r
C
o
n
f
i
g
[
'
t
a
r
i
f
f
C
l
a
s
s
e
s
'
]
;

 
 
 
 
 
 
 
 
$
s
h
o
w
D
e
p
o
s
i
t
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
;

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
'
 
]
;

 
 
 
 
 
 
 
 
$
s
h
o
w
E
x
t
r
a
s
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
s
h
o
w
E
x
t
r
a
s
'
 
]
;

 
 
 
 
 
 
 
 
$
e
u
r
o
T
a
x
Y
e
s
N
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
e
u
r
o
T
a
x
Y
e
s
N
o
'
 
]
;

 
 
 
 
 
 
 
 
$
r
o
o
m
T
a
x
Y
e
s
N
o
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
r
o
o
m
T
a
x
Y
e
s
N
o
'
 
]
;

 
 
 
 
 
 
 
 
$
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
'
 
]
;


 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
s
C
l
a
s
s
 
=
 
'
;
 
d
o
c
u
m
e
n
t
.
g
e
t
E
l
e
m
e
n
t
B
y
I
d
(
"
m
e
s
s
a
g
e
s
"
)
.
c
l
a
s
s
N
a
m
e
=
"
m
e
s
s
a
g
e
s
"
;
'
;

 
 
 
 
 
 
 
 
$
e
r
r
o
r
C
l
a
s
s
 
=
 
'
;
 
d
o
c
u
m
e
n
t
.
g
e
t
E
l
e
m
e
n
t
B
y
I
d
(
"
m
e
s
s
a
g
e
s
"
)
.
c
l
a
s
s
N
a
m
e
=
e
r
r
o
r
_
c
l
a
s
s
;
'
;

 
 
 
 
 
 
 
 
$
o
k
t
o
b
o
o
k
C
l
a
s
s
 
=
 
'
;
 
d
o
c
u
m
e
n
t
.
g
e
t
E
l
e
m
e
n
t
B
y
I
d
(
"
m
e
s
s
a
g
e
s
"
)
.
c
l
a
s
s
N
a
m
e
=
h
i
g
h
l
i
g
h
t
_
c
l
a
s
s
;
'
;


 
 
 
 
 
 
 
 
$
f
i
e
l
d
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
f
i
e
l
d
'
,
 
'
'
,
 
'
s
t
r
i
n
g
'
)
;

 
 
 
 
 
 
 
 
$
f
i
e
l
d
 
=
 
g
e
t
E
s
c
a
p
e
d
(
$
f
i
e
l
d
)
;

 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
v
a
l
u
e
'
,
 
'
'
,
 
'
s
t
r
i
n
g
'
)
;

 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
g
e
t
E
s
c
a
p
e
d
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
$
t
y
p
e
i
d
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
t
y
p
e
i
d
'
,
 
'
'
,
 
'
s
t
r
i
n
g
'
)
;

 
 
 
 
 
 
 
 
$
t
y
p
e
i
d
 
=
 
g
e
t
E
s
c
a
p
e
d
(
$
t
y
p
e
i
d
)
;

 
 
 
 
 
 
 
 
$
l
a
s
t
f
i
e
l
d
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
l
a
s
t
f
i
e
l
d
'
,
 
'
'
,
 
'
s
t
r
i
n
g
'
)
;

 
 
 
 
 
 
 
 
$
l
a
s
t
f
i
e
l
d
 
=
 
g
e
t
E
s
c
a
p
e
d
(
$
l
a
s
t
f
i
e
l
d
)
;

 
 
 
 
 
 
 
 
$
f
i
r
s
t
r
u
n
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
f
i
r
s
t
r
u
n
'
,
 
'
'
,
 
'
s
t
r
i
n
g
'
)
;

 
 
 
 
 
 
 
 
$
f
i
r
s
t
r
u
n
 
=
 
g
e
t
E
s
c
a
p
e
d
(
$
f
i
r
s
t
r
u
n
)
;


 
 
 
 
 
 
 
 
$
r
e
t
T
e
x
t
 
=
 
'
'
;


 
 
 
 
 
 
 
 
$
d
o
N
o
t
R
e
b
u
i
l
d
R
o
o
m
s
L
i
s
t
O
n
T
h
e
s
e
F
i
e
l
d
s
A
r
r
a
y
 
=
 
a
r
r
a
y
(
'
a
d
d
r
e
s
s
s
t
r
i
n
g
'
,
 
'
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
'
,
 
'
f
i
r
s
t
n
a
m
e
'
,
 
'
s
u
r
n
a
m
e
'
,
 
'
h
o
u
s
e
'
,
 
'
s
t
r
e
e
t
'
,
 
'
t
o
w
n
'
,
 
'
r
e
g
i
o
n
'
,
 
'
c
o
u
n
t
r
y
'
,
 
'
p
o
s
t
c
o
d
e
'
,
 
'
t
e
l
_
l
a
n
d
l
i
n
e
'
,
 
'
t
e
l
_
m
o
b
i
l
e
'
,
 
'
e
m
a
i
l
'
,
 
'
p
r
o
p
e
r
t
y
_
u
i
d
_
c
h
e
c
k
'
,
 
'
e
m
a
i
l
_
u
s
a
g
e
_
c
h
e
c
k
'
)
;

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
0
5
0
0
0
'
)
;
 
/
/
 
C
r
e
a
t
e
 
t
h
e
 
b
o
o
k
i
n
g
 
o
b
j
e
c
t

 
 
 
 
 
 
 
 
$
i
s
S
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
 
$
b
k
g
-
>
g
e
t
S
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
S
t
a
t
u
s
(
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
b
u
i
l
d
I
g
n
o
r
e
L
i
s
t
 
=
 
$
d
o
N
o
t
R
e
b
u
i
l
d
R
o
o
m
s
L
i
s
t
O
n
T
h
e
s
e
F
i
e
l
d
s
A
r
r
a
y
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
c
u
r
r
e
n
t
F
i
e
l
d
 
=
 
$
f
i
e
l
d
;


 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
f
i
e
l
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
e
m
a
i
l
_
u
s
a
g
e
_
c
h
e
c
k
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
e
m
a
i
l
_
u
s
a
g
e
_
c
h
e
c
k
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
w
r
i
t
e
T
o
L
o
g
f
i
l
e
(
'
C
h
e
c
k
i
n
g
 
t
h
a
t
 
e
m
a
i
l
 
a
d
d
r
e
s
s
 
i
s
 
o
k
 
t
o
 
u
s
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
e
m
a
i
l
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
a
l
u
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
e
m
a
i
l
_
u
s
a
g
e
_
c
h
e
c
k
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
b
k
g
-
>
e
m
a
i
l
_
a
d
d
r
e
s
s
_
c
a
n
_
b
e
_
u
s
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
b
k
g
-
>
s
e
t
O
k
T
o
B
o
o
k
(
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
f
a
l
s
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
t
r
u
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
o
v
e
r
r
i
d
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
o
v
e
r
r
i
d
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
w
r
i
t
e
T
o
L
o
g
f
i
l
e
(
'
S
t
a
r
t
i
n
g
 
o
v
e
r
r
i
d
e
 
i
n
p
u
t
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
$
b
k
g
-
>
s
a
v
e
O
v
e
r
r
i
d
e
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
o
v
e
r
r
i
d
e
_
r
e
s
p
o
n
s
e
"
,
"
'
.
$
r
e
s
p
o
n
s
e
.
'
"
)
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
r
o
o
m
_
f
e
a
t
u
r
e
s
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
$
t
h
i
s
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
i
n
t
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
w
r
i
t
e
T
o
L
o
g
f
i
l
e
(
'
S
t
a
r
t
i
n
g
 
r
o
o
m
_
f
e
a
t
u
r
e
s
 
i
n
p
u
t
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
t
o
g
g
l
e
R
o
o
m
F
i
l
t
e
r
I
d
(
$
v
a
l
u
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
c
o
u
p
o
n
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
c
o
u
p
o
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
w
r
i
t
e
T
o
L
o
g
f
i
l
e
(
'
S
t
a
r
t
i
n
g
 
c
o
u
p
o
n
 
i
n
p
u
t
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
$
b
k
g
-
>
s
a
v
e
C
o
u
p
o
n
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
c
o
u
p
o
n
_
r
e
s
p
o
n
s
e
"
,
"
'
.
$
r
e
s
p
o
n
s
e
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
g
e
t
E
l
e
m
e
n
t
B
y
I
d
(
"
c
o
u
p
o
n
_
r
e
s
p
o
n
s
e
"
)
.
i
n
n
e
r
H
T
M
L
 
=
 
"
'
.
$
r
e
s
p
o
n
s
e
.
'
"
 
;
 
f
a
d
e
I
n
(
"
d
e
p
o
s
i
t
"
,
1
0
0
0
)
;
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
a
d
d
r
e
s
s
s
t
r
i
n
g
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
a
d
d
r
e
s
s
s
t
r
i
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
 
"
&
#
3
8
;
#
3
9
;
"
,
 
"
'
"
,
 
$
v
a
l
u
e
 
)
;
 
/
/
 
A
p
o
s
t
r
o
p
h
e
s
 
s
e
n
t
 
b
y
 
a
j
a
x
 
w
i
l
l
 
b
e
 
m
a
n
g
l
e
d
,
 
w
e
 
n
e
e
d
 
t
o
 
u
n
m
a
n
g
l
e
 
t
h
e
m
 
t
h
e
n
 
s
a
n
t
i
s
e
 
t
h
e
m
 
p
r
o
p
e
r
l
y
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
d
d
r
e
s
s
S
t
r
i
n
g
 
=
 
e
x
p
l
o
d
e
(
'
~
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
r
s
t
n
a
m
e
 
=
 
$
a
d
d
r
e
s
s
S
t
r
i
n
g
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
r
n
a
m
e
 
=
 
$
a
d
d
r
e
s
s
S
t
r
i
n
g
[
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
o
u
s
e
 
=
 
$
a
d
d
r
e
s
s
S
t
r
i
n
g
[
 
2
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
r
e
e
t
 
=
 
$
a
d
d
r
e
s
s
S
t
r
i
n
g
[
 
3
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
w
n
 
=
 
$
a
d
d
r
e
s
s
S
t
r
i
n
g
[
 
4
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
 
=
 
$
a
d
d
r
e
s
s
S
t
r
i
n
g
[
 
5
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
c
o
d
e
 
=
 
$
a
d
d
r
e
s
s
S
t
r
i
n
g
[
 
6
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
r
y
 
=
 
$
a
d
d
r
e
s
s
S
t
r
i
n
g
[
 
7
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
d
l
i
n
e
 
=
 
$
a
d
d
r
e
s
s
S
t
r
i
n
g
[
 
8
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
b
i
l
e
 
=
 
$
a
d
d
r
e
s
s
S
t
r
i
n
g
[
 
9
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
m
a
i
l
 
=
 
$
a
d
d
r
e
s
s
S
t
r
i
n
g
[
 
1
0
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
r
s
t
n
a
m
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
f
i
r
s
t
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
f
i
r
s
t
n
a
m
e
(
$
f
i
r
s
t
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
r
n
a
m
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
s
u
r
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
s
u
r
n
a
m
e
(
$
s
u
r
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
o
u
s
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
h
o
u
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
h
o
u
s
e
(
$
h
o
u
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
r
e
e
t
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
s
t
r
e
e
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
s
t
r
e
e
t
(
$
s
t
r
e
e
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
w
n
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
t
o
w
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
t
o
w
n
(
$
t
o
w
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
r
e
g
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
r
e
g
i
o
n
(
$
r
e
g
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
c
o
d
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
p
o
s
t
c
o
d
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
p
o
s
t
c
o
d
e
(
$
p
o
s
t
c
o
d
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
r
y
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
c
o
u
n
t
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
c
o
u
n
t
r
y
(
$
c
o
u
n
t
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
d
l
i
n
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
l
a
n
d
l
i
n
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
t
e
l
_
l
a
n
d
l
i
n
e
(
$
l
a
n
d
l
i
n
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
b
i
l
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
m
o
b
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
t
e
l
_
m
o
b
i
l
e
(
$
m
o
b
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
m
a
i
l
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
e
m
a
i
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
e
m
a
i
l
(
$
e
m
a
i
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
g
u
e
s
t
t
y
p
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
g
u
e
s
t
t
y
p
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
O
k
T
o
B
o
o
k
(
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
y
p
e
i
d
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
i
n
t
'
,
 
$
t
y
p
e
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
i
n
t
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
t
y
p
e
i
d
)
 
&
&
 
i
s
s
e
t
(
$
v
a
l
u
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
(
$
t
y
p
e
i
d
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
s
e
t
R
e
q
u
e
s
t
e
d
R
o
o
m
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
a
r
r
i
v
a
l
D
a
t
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
a
r
r
i
v
a
l
D
a
t
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
O
k
T
o
B
o
o
k
(
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
d
a
t
e
'
,
 
$
v
a
l
u
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
_
d
e
p
_
d
a
t
e
 
=
 
$
b
k
g
-
>
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
_
G
E
T
[
 
'
a
r
r
_
d
e
p
_
d
a
t
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
_
d
e
p
_
d
a
t
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
d
a
t
e
'
,
 
$
a
r
r
_
d
e
p
_
d
a
t
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
v
a
l
u
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
A
r
r
i
v
a
l
D
a
t
e
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
a
r
r
_
d
e
p
_
d
a
t
e
)
 
&
&
 
$
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
 
!
=
 
'
1
'
 
&
&
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
'
 
]
 
!
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
a
r
r
_
d
e
p
_
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
!
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
 
|
|
 
$
m
r
C
o
n
f
i
g
[
 
'
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
'
 
]
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
T
o
N
e
x
t
D
a
y
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
s
e
t
R
e
q
u
e
s
t
e
d
R
o
o
m
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
a
r
r
i
v
a
l
_
p
e
r
i
o
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
a
r
r
i
v
a
l
_
p
e
r
i
o
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
O
k
T
o
B
o
o
k
(
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
d
a
t
e
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
v
a
l
u
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
A
r
r
i
v
a
l
D
a
t
e
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
 
=
 
$
b
k
g
-
>
g
e
t
S
t
a
y
D
a
y
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
b
k
g
-
>
g
e
t
F
i
x
e
d
P
e
r
i
o
d
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
d
e
p
a
r
t
u
r
e
P
e
r
i
o
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
b
k
g
-
>
g
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
s
e
t
R
e
q
u
e
s
t
e
d
R
o
o
m
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
d
e
p
a
r
t
u
r
e
D
a
t
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
O
k
T
o
B
o
o
k
(
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
d
a
t
e
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
v
a
l
u
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
s
e
t
R
e
q
u
e
s
t
e
d
R
o
o
m
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
d
e
p
a
r
t
u
r
e
_
p
e
r
i
o
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
d
e
p
a
r
t
u
r
e
_
p
e
r
i
o
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
O
k
T
o
B
o
o
k
(
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
i
n
t
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
v
a
l
u
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
b
k
g
-
>
g
e
t
F
i
x
e
d
P
e
r
i
o
d
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
s
e
t
R
e
q
u
e
s
t
e
d
R
o
o
m
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
e
x
t
r
a
s
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
e
x
t
r
a
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
O
k
T
o
B
o
o
k
(
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
i
n
t
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
w
r
i
t
e
T
o
L
o
g
f
i
l
e
(
'
S
t
a
r
t
i
n
g
 
e
x
t
r
a
 
i
n
p
u
t
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
e
x
t
r
a
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
(
$
v
a
l
u
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
T
e
x
t
 
=
 
'
E
x
t
r
a
 
r
e
m
o
v
e
d
 
f
r
o
m
 
b
o
o
k
i
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
m
o
v
e
E
x
t
r
a
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
j
o
m
r
e
s
J
q
u
e
r
y
(
"
i
n
p
u
t
[
n
a
m
e
=
\
'
e
x
t
r
a
s
[
t
h
e
I
d
]
\
'
]
"
)
.
p
r
o
p
(
"
c
h
e
c
k
e
d
"
,
f
a
l
s
e
)
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
T
e
x
t
 
=
 
'
E
x
t
r
a
 
a
d
d
e
d
 
t
o
 
b
o
o
k
i
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
x
t
r
a
s
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
j
o
m
r
e
s
J
q
u
e
r
y
(
"
i
n
p
u
t
[
n
a
m
e
=
\
'
e
x
t
r
a
s
[
t
h
e
I
d
]
\
'
]
"
)
.
p
r
o
p
(
"
c
h
e
c
k
e
d
"
,
t
r
u
e
)
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
e
x
t
r
a
s
q
u
a
n
t
i
t
y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
e
x
t
r
a
s
q
u
a
n
t
i
t
y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
O
k
T
o
B
o
o
k
(
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
i
n
t
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
I
d
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
t
h
e
I
d
'
,
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
I
d
 
=
 
g
e
t
E
s
c
a
p
e
d
(
$
t
h
e
I
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
w
r
i
t
e
T
o
L
o
g
f
i
l
e
(
'
S
t
a
r
t
i
n
g
 
e
x
t
r
a
 
q
u
a
n
t
i
t
y
 
i
n
p
u
t
 
:
 
V
a
l
u
e
 
=
 
'
.
$
v
a
l
u
e
.
'
E
x
t
r
a
 
i
d
 
=
'
.
$
t
h
e
I
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
e
x
t
r
a
A
l
r
e
a
d
y
S
e
l
e
c
t
e
d
(
$
t
h
e
I
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
T
e
x
t
 
=
 
'
E
x
t
r
a
 
a
d
d
e
d
 
t
o
 
b
o
o
k
i
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
x
t
r
a
s
(
$
t
h
e
I
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
j
o
m
r
e
s
J
q
u
e
r
y
(
t
h
e
I
d
)
.
p
r
o
p
(
"
c
h
e
c
k
e
d
"
,
 
t
r
u
e
)
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
m
o
d
i
f
y
E
x
t
r
a
Q
u
a
n
t
i
t
y
(
$
v
a
l
u
e
,
 
$
t
h
e
I
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
e
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
i
n
t
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
a
l
u
e
 
!
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
$
b
k
g
-
>
g
e
t
E
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
D
a
t
a
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
T
e
x
t
 
=
 
'
E
x
i
s
t
i
n
g
 
c
u
s
t
o
m
e
r
 
d
e
t
a
i
l
s
 
s
e
l
e
c
t
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
o
r
m
A
d
d
r
e
s
s
D
e
t
a
i
l
s
(
$
b
k
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
T
e
x
t
 
=
 
'
U
s
e
r
 
n
o
t
 
a
u
t
h
o
r
i
s
e
d
 
f
o
r
 
t
h
i
s
 
d
a
t
a
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
s
C
l
a
s
s
 
=
 
$
e
r
r
o
r
C
l
a
s
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
T
e
x
t
 
=
 
'
E
x
i
s
t
i
n
g
 
c
u
s
t
o
m
e
r
 
d
e
t
a
i
l
s
 
r
e
s
e
t
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
s
e
t
E
x
i
s
t
i
n
g
C
u
s
t
o
m
e
r
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
f
i
r
s
t
n
a
m
e
.
v
a
l
u
e
=
"
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
s
u
r
n
a
m
e
.
v
a
l
u
e
=
"
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
h
o
u
s
e
.
v
a
l
u
e
=
"
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
s
t
r
e
e
t
.
v
a
l
u
e
=
"
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
t
o
w
n
.
v
a
l
u
e
=
"
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
r
e
g
i
o
n
.
v
a
l
u
e
=
"
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
p
o
s
t
c
o
d
e
.
v
a
l
u
e
=
"
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
t
e
l
_
l
a
n
d
l
i
n
e
.
v
a
l
u
e
=
"
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
t
e
l
_
m
o
b
i
l
e
.
v
a
l
u
e
=
"
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
J
R
U
s
e
r
-
>
i
s
_
p
a
r
t
n
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
e
e
m
a
i
l
.
v
a
l
u
e
=
"
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
 
-
-
 
S
e
l
e
c
t
e
d
 
a
 
r
o
o
m
 
-
-
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
O
k
T
o
B
o
o
k
(
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
u
p
d
a
t
e
S
e
l
e
c
t
e
d
R
o
o
m
(
$
v
a
l
u
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
u
l
t
i
r
o
o
m
_
s
e
l
e
c
t
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
 
-
-
 
S
e
l
e
c
t
e
d
 
m
u
l
t
i
p
l
e
 
r
o
o
m
s
 
-
-
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
r
o
o
m
l
o
c
k
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
l
o
c
k
e
r
 
=
 
n
e
w
 
j
o
m
r
e
s
_
r
o
o
m
l
o
c
k
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
O
k
T
o
B
o
o
k
(
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
s
t
r
i
n
g
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
s
e
l
e
c
t
i
o
n
s
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
v
a
l
u
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
o
o
m
_
s
e
l
e
c
t
i
o
n
s
 
a
s
 
$
r
o
o
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
W
e
 
n
o
w
 
n
e
e
d
 
t
o
 
r
e
m
o
v
e
 
a
l
l
 
s
e
l
e
c
t
e
d
 
r
o
o
m
s
 
f
r
o
m
 
t
h
e
 
$
b
k
g
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
t
h
a
t
 
a
r
e
 
u
s
i
n
g
 
t
h
i
s
 
t
a
r
i
f
f
 
i
d
 
s
o
 
t
h
a
t
 
w
e
 
c
a
n
 
r
e
p
o
p
u
l
a
t
 
i
t
 
w
i
t
h
 
u
p
d
a
t
e
S
e
l
e
c
t
e
d
R
o
o
m

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
s
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
o
o
m
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
s
e
l
e
c
t
e
d
_
r
o
o
m
s
[
 
1
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
e
a
r
i
n
g
_
t
a
r
i
f
f
_
i
d
 
=
 
(
i
n
t
)
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
s
[
 
1
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
b
k
g
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
b
k
g
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
i
n
d
e
x
 
=
>
 
$
r
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
l
y
_
s
e
l
e
c
t
e
d
_
r
o
o
m
s
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
m
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
t
a
r
i
f
f
_
i
d
 
=
 
$
c
u
r
r
e
n
t
l
y
_
s
e
l
e
c
t
e
d
_
r
o
o
m
s
[
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
u
r
r
e
n
t
_
t
a
r
i
f
f
_
i
d
 
=
=
 
$
c
l
e
a
r
i
n
g
_
t
a
r
i
f
f
_
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
b
k
g
-
>
s
e
t
P
o
p
u
p
M
e
s
s
a
g
e
(
 
"
R
e
m
o
v
i
n
g
 
"
.
$
b
k
g
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
[
$
i
n
d
e
x
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
b
k
g
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
[
 
$
i
n
d
e
x
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
l
o
c
k
e
r
-
>
u
n
l
o
c
k
_
r
o
o
m
(
$
c
u
r
r
e
n
t
l
y
_
s
e
l
e
c
t
e
d
_
r
o
o
m
s
[
 
0
 
]
,
 
$
b
k
g
-
>
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
i
d
 
=
 
(
i
n
t
)
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
s
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
_
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
c
h
e
c
k
A
l
l
G
u
e
s
t
s
A
l
l
o
c
a
t
e
d
T
o
R
o
o
m
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
o
o
m
_
s
e
l
e
c
t
i
o
n
s
 
a
s
 
$
r
o
o
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
:
:
r
o
o
m
 
t
y
p
e
 
l
i
s
t
 
s
t
y
l
e
:
:
 
A
d
d
i
n
g
 
'
.
$
r
o
o
m
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
u
p
d
a
t
e
S
e
l
e
c
t
e
d
R
o
o
m
(
$
r
o
o
m
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
:
:
C
u
r
r
e
n
t
l
y
 
s
e
l
e
c
t
e
d
 
r
o
o
m
s
 
'
.
s
e
r
i
a
l
i
z
e
(
$
b
k
g
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
h
o
w
_
l
o
g
'
:


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
h
e
a
r
t
b
e
a
t
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
e
v
e
n
t
S
p
e
c
i
f
i
c
l
y
E
x
i
s
t
s
C
h
e
c
k
(
'
0
5
0
4
0
'
,
 
$
f
i
e
l
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
p
l
y
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
5
0
4
0
'
,
 
$
f
i
e
l
d
,
 
$
b
k
g
)
;
 
/
/
 
C
u
s
t
o
m
 
t
a
s
k

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
r
e
p
l
y
[
 
'
r
e
b
u
i
l
d
_
r
o
o
m
s
_
l
i
s
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
o
N
o
t
R
e
b
u
i
l
d
R
o
o
m
s
L
i
s
t
O
n
T
h
e
s
e
F
i
e
l
d
s
A
r
r
a
y
[
 
]
 
=
 
$
f
i
e
l
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
r
e
p
l
y
[
 
'
r
e
p
l
y
_
t
o
_
e
c
h
o
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
r
e
p
l
y
[
 
'
r
e
p
l
y
_
t
o
_
e
c
h
o
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
a
j
r
q
:
:
:
I
n
v
a
l
i
d
 
d
a
t
a
 
s
e
n
t
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
T
e
x
t
 
=
 
'
I
n
v
a
l
i
d
 
d
a
t
a
 
s
e
n
t
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
s
C
l
a
s
s
 
=
 
$
e
r
r
o
r
C
l
a
s
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
i
s
 
a
n
 
o
p
t
i
o
n
a
l
 
t
r
i
g
g
e
r
 
f
o
r
 
t
h
i
r
d
 
p
a
r
t
y
 
p
l
u
g
i
n
s
,
 
i
n
t
e
n
d
e
d
 
t
o
 
a
l
l
o
w
 
p
l
u
g
i
n
s
 
t
o
 
l
o
o
k
 
a
t
 
t
h
e
 
l
a
s
t
 
c
h
a
n
g
e
d
 
v
a
l
u
e
 
(
e
g
 
a
r
r
i
v
a
l
 
o
r
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
)
 
a
n
d
 
i
f
 
n
e
c
c
e
s
s
a
r
y
 
r
e
b
u
i
l
d
 
t
h
e
i
r
 
o
u
t
p
u
t
.

 
 
 
 
 
 
 
 
/
/
 
T
o
u
r
s
 
w
i
l
l
 
n
e
e
d
 
t
h
i
s
 
b
e
c
a
u
s
e
 
i
f
 
a
r
r
i
v
a
l
 
o
r
 
d
e
p
a
t
u
r
e
 
d
a
t
e
s
 
c
h
a
n
g
e
,
 
t
h
e
n
 
a
v
a
i
l
a
b
l
e
 
t
o
u
r
s
 
a
n
d
 
s
p
a
c
e
s
 
w
i
l
l
 
a
l
s
o
 
c
h
a
n
g
e
.
 
T
h
e
 
p
l
u
g
i
n
 
i
t
s
e
l
f
 
w
i
l
l
 
e
c
h
o
 
a
n
y
 
o
u
t
p
u
t
 
r
e
q
u
i
r
e
d
.

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
e
v
e
n
t
F
i
l
e
E
x
i
s
t
s
C
h
e
c
k
(
'
0
5
0
5
0
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
 
=
 
a
r
r
a
y
(
'
b
k
g
'
 
=
>
 
$
b
k
g
,
 
'
f
i
e
l
d
'
 
=
>
 
$
f
i
e
l
d
,
 
'
v
a
l
u
e
'
 
=
>
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
0
5
0
5
0
'
,
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
f
i
e
l
d
,
 
$
d
o
N
o
t
R
e
b
u
i
l
d
R
o
o
m
s
L
i
s
t
O
n
T
h
e
s
e
F
i
e
l
d
s
A
r
r
a
y
)
 
&
&
 
i
s
s
e
t
(
$
f
i
e
l
d
)
 
&
&
 
!
e
m
p
t
y
(
$
f
i
e
l
d
)
 
&
&
 
$
f
i
e
l
d
 
!
=
 
'
s
h
o
w
_
l
o
g
'
 
&
&
 
$
f
i
e
l
d
 
!
=
 
'
e
x
t
r
a
s
'
 
&
&
 
$
f
i
e
l
d
 
!
=
 
'
h
e
a
r
t
b
e
a
t
'
 
&
&
 
$
f
i
e
l
d
 
!
=
 
'
e
x
t
r
a
s
q
u
a
n
t
i
t
y
'
 
&
&
 
$
f
i
e
l
d
 
!
=
 
'
c
o
u
p
o
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
o
o
k
i
n
g
f
o
r
m
l
i
s
t
R
o
o
m
s
(
$
i
s
S
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
,
 
$
b
k
g
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
e
l
d
 
!
=
 
'
h
e
a
r
t
b
e
a
t
'
 
&
&
 
$
f
i
e
l
d
 
!
=
 
'
s
h
o
w
_
l
o
g
'
 
&
&
 
$
f
i
e
l
d
 
!
=
 
'
e
m
a
i
l
_
u
s
a
g
e
_
c
h
e
c
k
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
a
j
r
q
 
=
 
'
s
h
o
w
_
l
o
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
:
:
G
e
n
e
r
a
t
i
n
g
 
b
i
l
l
i
n
g
 
d
a
t
a
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
b
k
g
-
>
g
e
t
A
r
r
i
v
a
l
D
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
b
k
g
-
>
g
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
c
h
e
c
k
A
r
r
i
v
a
l
D
a
t
e
(
$
a
r
r
i
v
a
l
D
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
O
k
T
o
B
o
o
k
(
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
w
r
i
t
e
T
o
L
o
g
f
i
l
e
(
'
L
a
s
t
f
i
e
l
d
 
'
.
$
l
a
s
t
f
i
e
l
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
L
a
s
t
f
i
e
l
d
 
'
.
$
l
a
s
t
f
i
e
l
d
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
l
a
s
t
f
i
e
l
d
,
 
$
d
o
N
o
t
R
e
b
u
i
l
d
R
o
o
m
s
L
i
s
t
O
n
T
h
e
s
e
F
i
e
l
d
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
s
e
t
T
o
t
a
l
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
:
:
 
D
a
t
e
s
 
p
a
s
s
e
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
:
:
S
h
o
w
 
d
e
p
o
s
i
t
:
 
'
.
$
s
h
o
w
D
e
p
o
s
i
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
g
e
t
G
u
e
s
t
V
a
r
i
a
n
t
C
o
u
n
t
(
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
t
o
t
a
l
i
n
p
a
r
t
y
"
,
"
'
.
$
b
k
g
-
>
g
e
t
T
o
t
a
l
I
n
P
a
r
t
y
(
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
y
d
a
y
s
 
=
 
$
b
k
g
-
>
g
e
t
S
t
a
y
D
a
y
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
u
m
_
p
e
r
i
o
d
 
=
 
$
b
k
g
-
>
g
e
t
_
p
a
r
t
_
o
f
_
s
t
a
y
_
p
e
r
i
o
d
(
$
s
t
a
y
d
a
y
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
s
t
a
y
d
a
y
s
"
,
"
'
.
$
n
u
m
_
p
e
r
i
o
d
.
'
"
)
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
p
e
r
_
n
i
g
h
t
 
=
 
$
b
k
g
-
>
g
e
t
R
o
o
m
p
e
r
n
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
p
e
r
_
n
i
g
h
t
 
=
 
$
b
k
g
-
>
c
a
l
c
u
l
a
t
e
R
o
o
m
P
r
i
c
e
I
n
c
V
a
t
(
$
r
o
o
m
_
p
e
r
_
n
i
g
h
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
c
f
g
_
t
a
r
i
f
f
m
o
d
e
 
=
=
 
'
1
'
 
&
&
 
$
b
k
g
-
>
c
f
g
_
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
p
e
r
_
n
i
g
h
t
 
=
 
$
r
o
o
m
_
p
e
r
_
n
i
g
h
t
 
*
 
7
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
p
e
r
_
n
i
g
h
t
 
=
 
$
b
k
g
-
>
g
e
t
_
r
a
t
e
_
p
e
r
_
n
i
g
h
t
_
c
o
n
v
e
r
t
e
d
_
t
o
_
o
u
t
p
u
t
_
p
e
r
i
o
d
(
$
r
o
o
m
_
p
e
r
_
n
i
g
h
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
r
o
o
m
p
e
r
n
i
g
h
t
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
r
o
o
m
_
p
e
r
_
n
i
g
h
t
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
t
o
t
a
l
 
=
 
$
b
k
g
-
>
g
e
t
R
o
o
m
t
o
t
a
l
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
t
o
t
a
l
 
=
 
$
b
k
g
-
>
c
a
l
c
u
l
a
t
e
R
o
o
m
P
r
i
c
e
I
n
c
V
a
t
(
$
r
o
o
m
_
t
o
t
a
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
r
o
o
m
t
o
t
a
l
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
r
o
o
m
_
t
o
t
a
l
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
c
f
g
_
s
h
o
w
E
x
t
r
a
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
o
n
l
y
 
r
e
b
u
i
l
d
 
e
x
t
r
a
s
 
i
f
 
d
a
t
e
s
 
c
h
a
n
g
e
 
o
r
 
a
 
r
o
o
m
/
r
o
o
m
 
t
y
p
e
 
i
s
 
s
e
l
e
c
t
e
d

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
e
l
d
 
=
=
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
|
|
 
$
f
i
e
l
d
 
=
=
 
'
a
r
r
i
v
a
l
_
p
e
r
i
o
d
'
 
|
|
 
$
f
i
e
l
d
 
=
=
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
 
|
|
 
$
f
i
e
l
d
 
=
=
 
'
d
e
p
a
r
t
u
r
e
_
p
e
r
i
o
d
'
 
|
|
 
$
f
i
e
l
d
 
=
=
 
'
m
u
l
t
i
r
o
o
m
_
s
e
l
e
c
t
'
 
|
|
 
$
f
i
e
l
d
 
=
=
 
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
 
=
 
$
b
k
g
-
>
m
a
k
e
E
x
t
r
a
s
(
$
p
i
d
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
t
a
i
l
s
 
=
 
$
e
x
[
 
'
c
o
r
e
_
e
x
t
r
a
s
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
c
o
r
e
_
e
x
t
r
a
s
"
,
"
'
.
$
b
k
g
-
>
s
a
n
i
t
i
s
e
_
f
o
r
_
e
v
a
l
(
$
e
x
t
r
a
_
d
e
t
a
i
l
s
)
.
'
"
)
;
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
e
x
t
r
a
s
t
o
t
a
l
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
k
g
-
>
g
e
t
E
x
t
r
a
s
T
o
t
a
l
(
)
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
e
x
t
r
a
s
t
o
t
a
l
_
t
o
t
a
l
s
_
p
a
n
e
l
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
k
g
-
>
g
e
t
E
x
t
r
a
s
T
o
t
a
l
(
)
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
t
a
x
 
=
 
$
b
k
g
-
>
g
e
t
T
a
x
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
t
a
x
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
b
k
g
-
>
e
x
t
r
a
_
t
a
x
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
b
k
g
-
>
e
x
t
r
a
_
t
a
x
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
b
k
g
-
>
e
x
t
r
a
_
t
a
x
s
 
a
s
 
$
e
x
t
a
x
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
t
a
x
 
=
 
$
e
x
t
r
a
_
t
a
x
 
+
 
$
e
x
t
a
x
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
s
h
o
w
_
t
a
x
_
i
n
_
t
o
t
a
l
s
_
s
u
m
m
a
r
y
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
b
k
g
-
>
r
o
o
m
_
t
o
t
a
l
_
e
x
_
t
a
x
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
r
o
o
m
_
t
o
t
a
l
_
e
x
_
t
a
x
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
k
g
-
>
r
o
o
m
_
t
o
t
a
l
_
e
x
_
t
a
x
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
r
o
o
m
_
t
o
t
a
l
_
e
x
_
t
a
x
"
,
"
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
t
a
x
t
o
t
a
l
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
r
o
o
m
_
t
a
x
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
e
x
t
r
a
_
t
a
x
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
e
x
t
r
a
_
t
a
x
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
g
r
a
n
d
t
o
t
a
l
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
k
g
-
>
g
e
t
G
r
a
n
d
T
o
t
a
l
(
)
)
.
'
"
)
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
b
k
g
-
>
r
o
o
m
_
t
o
t
a
l
_
i
n
c
_
t
a
x
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
r
o
o
m
_
t
o
t
a
l
_
i
n
c
_
t
a
x
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
k
g
-
>
r
o
o
m
_
t
o
t
a
l
_
i
n
c
_
t
a
x
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
r
o
o
m
_
t
o
t
a
l
_
i
n
c
_
t
a
x
"
,
"
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
b
a
l
a
n
c
e
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
k
g
-
>
g
e
t
G
r
a
n
d
T
o
t
a
l
(
)
 
-
 
$
b
k
g
-
>
g
e
t
D
e
p
o
s
i
t
(
)
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
h
o
w
D
e
p
o
s
i
t
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
d
e
p
o
s
i
t
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
k
g
-
>
g
e
t
D
e
p
o
s
i
t
(
)
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
C
a
l
c
u
l
a
t
e
d
 
&
&
 
$
b
k
g
-
>
c
f
g
_
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
s
i
n
g
l
e
_
s
u
p
p
l
i
m
e
n
t
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
b
k
g
-
>
g
e
t
S
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
(
)
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
c
o
u
p
o
n
_
c
o
d
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
 
=
 
$
b
k
g
-
>
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
*
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
i
s
o
r
 
=
 
(
$
b
k
g
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
/
 
1
0
0
)
 
+
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
 
=
 
$
d
i
v
i
s
o
r
 
*
 
$
d
i
s
c
o
u
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
*
/

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
c
o
u
p
o
n
_
d
i
s
c
o
u
n
t
_
v
a
l
u
e
"
,
"
'
.
o
u
t
p
u
t
_
p
r
i
c
e
(
$
d
i
s
c
o
u
n
t
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
:
:
 
F
i
e
l
d
 
'
.
$
l
a
s
t
f
i
e
l
d
.
'
 
e
x
e
m
p
t
 
f
r
o
m
 
p
r
i
c
i
n
g
 
r
e
b
u
i
l
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
:
:
 
b
k
g
 
c
h
e
c
k
 
o
f
 
a
r
r
i
v
a
l
 
o
r
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
 
f
a
i
l
e
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
m
o
n
i
t
o
r
B
o
o
k
i
n
g
S
t
a
t
u
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
r
e
s
e
t
P
r
i
c
i
n
g
O
u
t
p
u
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
o
u
t
p
u
t
Z
e
r
o
P
r
i
c
e
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
a
b
l
e
_
a
d
d
r
e
s
s
 
=
 
'
t
r
u
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
e
l
d
 
=
=
 
'
e
m
a
i
l
_
u
s
a
g
e
_
c
h
e
c
k
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
a
b
l
e
_
a
d
d
r
e
s
s
 
=
 
'
f
a
l
s
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
g
e
t
O
k
T
o
B
o
o
k
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
k
t
o
b
o
o
k
C
l
a
s
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
m
e
s
s
a
g
e
s
"
,
"
'
.
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
R
E
V
I
E
W
B
O
O
K
I
N
G
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
R
E
V
I
E
W
B
O
O
K
I
N
G
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
.
'
"
)
;
 
c
h
e
c
k
S
e
l
e
c
t
R
o
o
m
M
e
s
s
a
g
e
(
t
r
u
e
,
"
'
.
$
d
i
s
a
b
l
e
_
a
d
d
r
e
s
s
.
'
"
)
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
P
o
p
u
p
M
e
s
s
a
g
e
(
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
R
E
V
I
E
W
B
O
O
K
I
N
G
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
R
E
V
I
E
W
B
O
O
K
I
N
G
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
e
n
a
b
l
e
S
u
b
m
i
t
B
u
t
t
o
n
(
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
c
o
n
f
i
r
m
b
o
o
k
i
n
g
)
;
 
'
;
 
/
/
 
A
d
d
e
d
 
t
i
m
e
o
u
t
 
b
e
c
a
u
s
e
 
i
f
 
a
 
u
s
e
r
 
c
l
i
c
k
s
 
o
n
 
t
h
i
s
 
b
u
t
t
o
n
 
t
o
o
 
s
o
o
n
 
t
h
e
y
'
l
l
 
g
e
t
 
t
a
k
e
n
 
t
o
 
t
h
e
 
r
e
v
i
e
w
 
b
o
o
k
i
n
g
 
b
e
f
o
r
e
 
o
k
t
o
b
o
o
k
 
h
a
s
 
b
e
e
n
 
s
a
v
e
d
,
 
t
h
e
r
e
f
o
r
e
 
g
e
t
t
i
n
g
 
t
h
e
m
s
e
l
v
e
s
 
r
e
d
i
r
e
c
t
e
d
 
b
a
c
k
 
t
o
 
h
e
r
e

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
s
C
l
a
s
s
 
=
 
$
e
r
r
o
r
C
l
a
s
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
m
e
s
s
a
g
e
s
C
l
a
s
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
m
e
s
s
a
g
e
s
"
,
"
'
.
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
$
b
k
g
-
>
m
o
n
i
t
o
r
G
e
t
F
i
r
s
t
M
e
s
s
a
g
e
(
)
)
.
'
"
)
;
 
c
h
e
c
k
S
e
l
e
c
t
R
o
o
m
M
e
s
s
a
g
e
(
f
a
l
s
e
,
"
'
.
$
d
i
s
a
b
l
e
_
a
d
d
r
e
s
s
.
'
"
)
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
r
s
t
r
u
n
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
P
o
p
u
p
M
e
s
s
a
g
e
(
$
b
k
g
-
>
m
o
n
i
t
o
r
G
e
t
F
i
r
s
t
M
e
s
s
a
g
e
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
'
;
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
b
o
o
k
i
n
g
f
o
r
m
_
a
d
d
r
e
s
s
"
)
.
d
e
l
a
y
(
8
0
0
)
.
f
a
d
e
T
o
(
"
s
l
o
w
"
,
 
1
)
;
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
i
s
a
b
l
e
S
u
b
m
i
t
B
u
t
t
o
n
(
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
c
o
n
f
i
r
m
b
o
o
k
i
n
g
)
;
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
g
e
t
E
r
r
o
r
L
o
g
(
)
 
!
=
 
'
'
 
&
&
 
$
b
k
g
-
>
e
r
r
o
r
C
h
e
c
k
i
n
g
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
L
o
g
 
=
 
$
b
k
g
-
>
g
e
t
E
r
r
o
r
L
o
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
r
o
o
m
_
a
l
l
o
c
a
t
i
o
n
s
"
,
"
'
.
$
b
k
g
-
>
g
e
t
R
o
o
m
A
l
l
o
c
a
t
i
o
n
O
u
t
p
u
t
(
)
.
'
"
)
;
'
;


 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
F
i
r
s
t
(
$
a
j
r
q
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
t
o
r
e
B
o
o
k
i
n
g
D
e
t
a
i
l
s
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}



 
 
 
 
 
 
 
 
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
B
o
o
k
i
n
g
F
o
r
m
A
d
d
r
e
s
s
D
e
t
a
i
l
s
(
&
$
b
k
g
)

 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
t
o
r
e
B
o
o
k
i
n
g
D
e
t
a
i
l
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
G
u
e
s
t
D
a
t
a
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
f
i
r
s
t
n
a
m
e
.
v
a
l
u
e
=
"
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
e
s
u
l
t
[
 
'
f
i
r
s
t
n
a
m
e
'
 
]
)
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
s
u
r
n
a
m
e
.
v
a
l
u
e
=
"
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
e
s
u
l
t
[
 
'
s
u
r
n
a
m
e
'
 
]
)
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
h
o
u
s
e
.
v
a
l
u
e
=
"
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
e
s
u
l
t
[
 
'
h
o
u
s
e
'
 
]
)
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
s
t
r
e
e
t
.
v
a
l
u
e
=
"
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
e
s
u
l
t
[
 
'
s
t
r
e
e
t
'
 
]
)
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
t
o
w
n
.
v
a
l
u
e
=
"
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
e
s
u
l
t
[
 
'
t
o
w
n
'
 
]
)
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
r
e
g
i
o
n
.
v
a
l
u
e
=
"
'
 
.
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
 
$
r
e
s
u
l
t
[
 
'
r
e
g
i
o
n
'
 
]
 
)
 
.
 
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
c
o
u
n
t
r
y
.
v
a
l
u
e
=
"
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
e
s
u
l
t
[
 
'
c
o
u
n
t
r
y
'
 
]
)
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
p
o
s
t
c
o
d
e
.
v
a
l
u
e
=
"
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
e
s
u
l
t
[
 
'
p
o
s
t
c
o
d
e
'
 
]
)
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
t
e
l
_
l
a
n
d
l
i
n
e
.
v
a
l
u
e
=
"
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
e
s
u
l
t
[
 
'
t
e
l
_
l
a
n
d
l
i
n
e
'
 
]
)
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
t
e
l
_
m
o
b
i
l
e
.
v
a
l
u
e
=
"
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
e
s
u
l
t
[
 
'
t
e
l
_
m
o
b
i
l
e
'
 
]
)
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
p
o
p
u
l
a
t
e
D
i
v
(
"
g
u
e
s
t
_
r
e
g
i
o
n
_
d
i
v
"
,
"
'
.
s
t
r
_
r
e
p
l
a
c
e
(
'
"
'
,
 
'
\
"
'
,
 
s
e
t
u
p
R
e
g
i
o
n
s
(
$
r
e
s
u
l
t
[
 
'
c
o
u
n
t
r
y
'
 
]
,
 
$
r
e
s
u
l
t
[
 
'
r
e
g
i
o
n
'
 
]
)
)
.
'
"
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
c
h
e
c
k
E
m
a
i
l
(
$
r
e
s
u
l
t
[
 
'
e
m
a
i
l
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
;
 
d
o
c
u
m
e
n
t
.
a
j
a
x
f
o
r
m
.
e
e
m
a
i
l
.
v
a
l
u
e
=
"
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
e
s
u
l
t
[
 
'
e
m
a
i
l
'
 
]
)
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
f
u
n
c
t
i
o
n
 
b
o
o
k
i
n
g
f
o
r
m
l
i
s
t
R
o
o
m
s
(
$
i
s
S
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
,
 
&
$
b
k
g
)

 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
f
u
n
c
t
i
o
n
a
l
i
t
y
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
w
r
i
t
e
T
o
L
o
g
f
i
l
e
(
'
L
i
s
t
i
n
g
 
r
o
o
m
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
b
k
g
-
>
g
e
t
A
r
r
i
v
a
l
D
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
b
k
g
-
>
g
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
s
S
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
"
h
a
n
d
l
e
r
e
q
-
b
o
o
k
i
n
g
f
o
r
m
l
i
s
t
R
o
o
m
s
:
:
 
B
u
i
l
d
i
n
g
 
r
o
o
m
s
 
l
i
s
t
"
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
S
t
a
y
D
a
y
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
D
a
t
e
R
a
n
g
e
S
t
r
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
R
a
n
g
e
I
n
c
l
u
d
e
s
W
e
e
k
e
n
d
 
=
 
$
b
k
g
-
>
d
a
t
e
R
a
n
g
e
I
n
c
l
u
d
e
s
W
e
e
k
e
n
d
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
=
 
$
b
k
g
-
>
g
e
t
A
l
l
R
o
o
m
U
i
d
s
F
o
r
P
r
o
p
e
r
t
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
_
c
o
u
n
t
 
=
 
c
o
u
n
t
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
=
 
$
b
k
g
-
>
f
i
n
d
F
r
e
e
R
o
o
m
s
I
n
D
a
t
e
R
a
n
g
e
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
-
b
o
o
k
i
n
g
f
o
r
m
l
i
s
t
R
o
o
m
s
:
:
 
N
u
m
b
e
r
 
o
f
 
f
r
e
e
 
r
o
o
m
s
 
'
.
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
_
c
o
u
n
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
b
e
f
o
r
e
 
t
h
e
 
r
e
s
t
 
o
f
 
t
h
e
s
e
 
f
u
n
c
t
i
o
n
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
=
 
$
b
k
g
-
>
c
h
e
c
k
P
e
o
p
l
e
N
u
m
b
e
r
s
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
-
b
o
o
k
i
n
g
f
o
r
m
l
i
s
t
R
o
o
m
s
:
:
 
N
u
m
b
e
r
 
o
f
 
f
r
e
e
 
r
o
o
m
s
 
'
.
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
_
c
o
u
n
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
=
 
$
b
k
g
-
>
c
h
e
c
k
R
o
o
m
F
e
a
t
u
r
e
O
p
t
i
o
n
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
-
b
o
o
k
i
n
g
f
o
r
m
l
i
s
t
R
o
o
m
s
:
:
 
N
u
m
b
e
r
 
o
f
 
f
r
e
e
 
r
o
o
m
s
 
'
.
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
_
c
o
u
n
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
A
d
d
e
d
 
t
o
 
e
n
a
b
l
e
 
t
h
e
 
r
o
o
m
 
t
o
 
r
e
m
a
i
n
 
i
n
 
t
h
e
 
s
e
l
e
c
t
e
d
 
r
o
o
m
s
 
l
i
s
t
 
i
f
 
i
t
'
s
 
s
t
i
l
l
 
a
v
a
i
l
a
b
l
e
 
a
f
t
e
r
 
a
 
p
a
r
t
i
c
u
l
a
r
 
(
d
a
t
e
,
 
g
u
e
s
t
 
n
u
m
b
e
r
s
 
e
t
c
)
 
h
a
s
 
b
e
e
n
 
c
h
a
n
g
e
d

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
R
o
o
m
U
i
d
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
b
k
g
-
>
r
e
q
u
e
s
t
e
d
R
o
o
m
 
a
s
 
$
r
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
t
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
$
r
t
A
r
r
a
y
[
 
0
 
]
 
]
 
=
 
$
r
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
R
o
o
m
U
i
d
s
[
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
e
l
e
c
t
e
d
R
o
o
m
U
i
d
s
 
a
s
 
$
r
o
o
m
_
u
i
d
_
h
o
l
d
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
o
o
m
_
u
i
d
_
h
o
l
d
e
r
 
a
s
 
$
k
e
y
 
=
>
 
$
r
o
o
m
_
u
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
a
r
r
a
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
k
e
y
,
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
m
o
v
e
F
r
o
m
S
e
l
e
c
t
e
d
R
o
o
m
s
(
$
r
o
o
m
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
-
b
o
o
k
i
n
g
f
o
r
m
l
i
s
t
R
o
o
m
s
:
:
 
N
u
m
b
e
r
 
o
f
 
f
r
e
e
 
r
o
o
m
s
 
'
.
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
_
c
o
u
n
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
=
 
$
b
k
g
-
>
r
e
m
o
v
e
R
o
o
m
u
i
d
s
A
l
r
e
a
d
y
I
n
T
h
i
s
B
o
o
k
i
n
g
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
=
 
$
b
k
g
-
>
e
x
t
r
a
c
t
L
o
c
k
e
d
R
o
o
m
s
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
-
b
o
o
k
i
n
g
f
o
r
m
l
i
s
t
R
o
o
m
s
:
:
 
N
u
m
b
e
r
 
o
f
 
f
r
e
e
 
r
o
o
m
s
 
'
.
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
_
c
o
u
n
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
n
u
m
b
e
r
_
o
f
_
f
r
e
e
_
r
o
o
m
s
 
=
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
_
c
o
u
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
 
=
 
$
b
k
g
-
>
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
E
r
r
o
r
L
o
g
(
'
h
a
n
d
l
e
r
e
q
-
b
o
o
k
i
n
g
f
o
r
m
l
i
s
t
R
o
o
m
s
:
:
 
R
o
o
m
 
a
n
d
 
T
a
r
i
f
f
 
a
r
r
a
y
 
c
o
u
n
t
 
=
 
'
.
c
o
u
n
t
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
'
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
i
s
S
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
s
_
t
e
x
t
 
=
 
'
<
d
i
v
>
<
h
4
 
c
l
a
s
s
=
"
p
a
g
e
-
h
e
a
d
e
r
"
>
'
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
<
/
h
4
>
<
/
d
i
v
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
n
u
m
b
e
r
O
f
C
u
r
r
e
n
t
l
y
S
e
l
e
c
t
e
d
R
o
o
m
s
(
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
l
y
_
s
e
l
e
c
t
e
d
 
=
 
'
<
d
i
v
>
'
.
$
b
k
g
-
>
l
i
s
t
C
u
r
r
e
n
t
l
y
S
e
l
e
c
t
e
d
R
o
o
m
s
(
)
.
'
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
l
y
_
s
e
l
e
c
t
e
d
 
=
 
'
<
d
i
v
 
i
d
=
"
n
o
r
o
o
m
s
s
e
l
e
c
t
e
d
"
 
>
'
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
N
O
R
O
O
M
S
S
E
L
E
C
T
E
D
Y
E
T
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
N
O
R
O
O
M
S
S
E
L
E
C
T
E
D
Y
E
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
v
a
i
l
a
b
l
e
_
r
o
o
m
s
_
t
e
x
t
 
=
 
'
<
d
i
v
>
<
h
4
 
c
l
a
s
s
=
"
p
a
g
e
-
h
e
a
d
e
r
"
>
'
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
,
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
<
/
h
4
>
<
/
d
i
v
>
<
d
i
v
 
i
d
=
"
r
o
o
m
s
_
l
i
s
t
i
n
g
"
>
<
/
d
i
v
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
s
_
t
e
x
t
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
_
f
o
r
_
e
v
a
l
(
$
s
e
l
e
c
t
e
d
_
r
o
o
m
s
_
t
e
x
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
l
y
_
s
e
l
e
c
t
e
d
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
_
f
o
r
_
e
v
a
l
(
$
c
u
r
r
e
n
t
l
y
_
s
e
l
e
c
t
e
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
v
a
i
l
a
b
l
e
_
r
o
o
m
s
_
t
e
x
t
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
_
f
o
r
_
e
v
a
l
(
$
a
v
a
i
l
a
b
l
e
_
r
o
o
m
s
_
t
e
x
t
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
"
p
o
p
u
l
a
t
e
D
i
v
(
'
s
e
l
e
c
t
e
d
R
o
o
m
s
'
,
'
"
.
$
s
e
l
e
c
t
e
d
_
r
o
o
m
s
_
t
e
x
t
.
$
c
u
r
r
e
n
t
l
y
_
s
e
l
e
c
t
e
d
.
"
'
)
;
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
"
p
o
p
u
l
a
t
e
D
i
v
(
'
a
v
a
i
l
R
o
o
m
s
'
,
'
"
.
$
a
v
a
i
l
a
b
l
e
_
r
o
o
m
s
_
t
e
x
t
.
"
'
)
;
"
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
"
;
j
o
m
r
e
s
J
q
u
e
r
y
(
'
#
a
v
a
i
l
R
o
o
m
s
'
)
.
f
a
d
e
I
n
(
)
;
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
"
;
j
o
m
r
e
s
J
q
u
e
r
y
(
'
#
a
v
a
i
l
R
o
o
m
s
'
)
.
f
a
d
e
O
u
t
(
)
;
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
<
d
i
v
>
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
<
d
i
v
>
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
$
b
k
g
-
>
g
e
n
e
r
a
t
e
R
o
o
m
s
L
i
s
t
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
_
f
o
r
_
e
v
a
l
(
$
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
"
p
o
p
u
l
a
t
e
D
i
v
(
'
r
o
o
m
s
_
l
i
s
t
i
n
g
'
,
'
"
.
$
o
u
t
p
u
t
.
"
'
)
;
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
c
f
g
_
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
=
 
'
2
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
"
p
o
p
u
l
a
t
e
D
i
v
(
'
a
v
a
i
l
R
o
o
m
s
'
,
'
"
.
$
b
k
g
-
>
s
a
n
i
t
i
s
e
_
f
o
r
_
e
v
a
l
(
$
b
k
g
-
>
g
e
n
e
r
a
t
e
_
r
o
o
m
_
t
y
p
e
_
d
r
o
p
d
o
w
n
s
(
)
)
.
"
'
)
;
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

