
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
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g

{

 
 
 
 
p
u
b
l
i
c
 
$
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
 
t
r
u
e
;

 
 
 
 
p
u
b
l
i
c
 
$
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
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

 
 
 
 
p
u
b
l
i
c
 
$
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
 
=
 
f
a
l
s
e
;


 
 
 
 
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

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
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
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
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
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
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
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
'
)
;


 
 
 
 
 
 
 
 
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
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
P
a
i
d
 
=
 
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
[
 
'
d
e
p
o
s
i
t
P
a
i
d
'
 
]
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
[
 
'
u
s
e
j
o
m
r
e
s
s
e
s
s
i
o
n
a
s
C
a
r
t
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
j
o
m
r
e
s
s
e
s
s
i
o
n
a
s
C
a
r
t
i
d
 
=
 
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
[
 
'
u
s
e
j
o
m
r
e
s
s
e
s
s
i
o
n
a
s
C
a
r
t
i
d
'
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
j
o
m
r
e
s
s
e
s
s
i
o
n
a
s
C
a
r
t
i
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
u
s
e
j
o
m
r
e
s
s
e
s
s
i
o
n
a
s
C
a
r
t
i
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
P
r
o
c
c
e
s
s
i
n
g
B
o
o
k
i
n
g
O
b
j
e
c
t
 
=
 
g
e
t
C
u
r
r
e
n
t
B
o
o
k
i
n
g
D
a
t
a
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
)
;

 
 
 
 
 
 
 
 
$
g
u
e
s
t
D
e
t
a
i
l
s
 
=
 
$
j
o
m
r
e
s
P
r
o
c
c
e
s
s
i
n
g
B
o
o
k
i
n
g
O
b
j
e
c
t
-
>
g
u
e
s
t
D
e
t
a
i
l
s
;

 
 
 
 
 
 
 
 
$
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
D
a
t
a
L
i
s
t
 
=
 
$
j
o
m
r
e
s
P
r
o
c
c
e
s
s
i
n
g
B
o
o
k
i
n
g
O
b
j
e
c
t
-
>
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
D
a
t
a
L
i
s
t
;

 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
A
t
t
e
m
p
t
i
n
g
 
t
o
 
i
n
s
e
r
t
 
b
o
o
k
i
n
g
 
j
s
i
d
:
 
'
.
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
)
;


 
 
 
 
 
 
 
 
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
u
s
e
G
l
o
b
a
l
C
u
r
r
e
n
c
y
'
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
c
o
d
e
 
=
 
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
g
l
o
b
a
l
C
u
r
r
e
n
c
y
C
o
d
e
'
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
c
o
d
e
 
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
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
d
a
t
e
t
i
m
e
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
g
u
e
s
t
D
e
t
a
i
l
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
F
a
i
l
e
d
 
t
o
 
i
n
s
e
r
t
 
b
o
o
k
i
n
g
:
 
N
o
 
g
u
e
s
t
 
d
e
t
a
i
l
s
 
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
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
D
a
t
a
L
i
s
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
F
a
i
l
e
d
 
t
o
 
i
n
s
e
r
t
 
b
o
o
k
i
n
g
:
 
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
 
n
o
t
 
f
o
u
n
d
.
 
P
r
o
b
a
b
l
y
 
a
l
r
e
a
d
y
 
b
o
o
k
i
n
g
 
i
n
s
e
r
t
e
d
.
 
'
.
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
B
o
o
k
i
n
g
 
a
l
r
e
a
d
y
 
m
a
d
e
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
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
t
m
p
b
o
o
k
i
n
g
[
 
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
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
b
o
o
k
i
n
g
_
a
m
e
n
d
e
d
'
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
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
a
m
e
n
d
e
d
_
c
o
n
t
r
a
c
t
u
i
d
'
,
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
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
b
o
o
k
i
n
g
_
a
m
e
n
d
e
d
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
&
&
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
 
!
=
 
0
 
&
&
 
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
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
B
o
o
k
i
n
g
 
a
m
e
n
d
m
e
n
t
 
c
o
d
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
A
m
e
n
d
i
n
g
 
c
o
n
t
r
a
c
t
.
 
'
.
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
.
'
 
f
o
r
 
'
.
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
s
_
u
i
d
 
=
 
i
n
s
e
r
t
G
u
e
s
t
D
e
e
t
s
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
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
D
a
t
a
L
i
s
t
 
a
s
 
$
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
D
a
t
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
$
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
D
a
t
a
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
D
a
t
a
-
>
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
D
a
t
a
-
>
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
S
t
r
i
n
g
 
=
 
$
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
D
a
t
a
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
$
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
D
a
t
a
-
>
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
s
_
u
i
d
 
=
 
$
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
D
a
t
a
-
>
r
a
t
e
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
n
g
l
e
_
p
e
r
s
o
n
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
 
=
 
$
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
D
a
t
a
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
$
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
D
a
t
a
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
=
 
$
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
D
a
t
a
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
 
=
 
$
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
D
a
t
a
-
>
e
x
t
r
a
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
e
s
 
=
 
$
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
D
a
t
a
-
>
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
i
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
V
a
l
u
e
 
=
 
$
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
D
a
t
a
-
>
e
x
t
r
a
s
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
p
e
c
i
a
l
R
e
q
s
 
=
 
a
d
d
s
l
a
s
h
e
s
(
$
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
D
a
t
a
-
>
e
r
r
o
r
_
l
o
g
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
D
a
t
a
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
 
=
 
$
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
D
a
t
a
-
>
t
a
x
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
h
e
 
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
e
s
 
i
s
 
p
a
s
s
e
d
 
w
i
t
h
 
A
L
L
 
e
x
t
r
a
 
u
i
d
s
 
a
n
d
 
d
e
f
a
u
l
t
 
q
u
a
n
t
i
e
s
.
 
A
t
 
t
h
i
s
 
p
o
i
n
t
 
w
e
 
w
i
l
l
 
s
t
r
i
p
 
o
u
t
 
t
h
e
 
e
x
t
r
a
 
u
i
d
 
t
h
a
t
 
w
e
r
e
n
'
t
 
a
c
t
u
a
l
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
 
b
e
f
o
r
e
 
a
d
d
i
n
g
 
t
h
e
 
s
e
r
i
a
l
i
z
e
d
 
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
i
e
s
 
t
o
 
t
h
e
 
d
b

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
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
i
e
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
E
x
t
r
a
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
e
x
t
r
a
s
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
c
u
r
r
e
n
t
E
x
t
r
a
s
)
 
&
&
 
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
i
e
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
i
e
s
 
a
s
 
$
i
d
 
=
>
 
$
q
u
a
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
i
d
,
 
$
c
u
r
r
e
n
t
E
x
t
r
a
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
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
i
e
s
[
 
$
i
d
 
]
 
=
 
$
q
u
a
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
e
s
 
=
 
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
t
m
p
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
i
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
e
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
L
e
t
'
s
 
g
e
t
 
o
u
r
 
g
u
e
s
t
 
t
y
p
e
 
d
a
t
a

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
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
v
a
r
i
a
n
c
e
t
y
p
e
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
D
a
t
a
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
r
i
a
n
c
e
u
i
d
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
D
a
t
a
-
>
v
a
r
i
a
n
c
e
u
i
d
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
r
i
a
n
c
e
q
t
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
,
'
,
 
$
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
D
a
t
a
-
>
v
a
r
i
a
n
c
e
q
t
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
r
i
a
n
c
e
v
a
l
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
D
a
t
a
-
>
v
a
r
i
a
n
c
e
v
a
l
s
)
;

	
	
	
	
	
$
n
 
=
 
c
o
u
n
t
(
$
v
a
r
i
a
n
c
e
t
y
p
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
a
r
i
a
n
c
e
t
y
p
e
s
[
 
$
i
 
]
 
=
=
 
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
 
&
&
 
$
v
a
r
i
a
n
c
e
q
t
y
[
 
$
i
 
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
 
=
 
$
v
a
r
i
a
n
c
e
u
i
d
s
[
 
$
i
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
t
y
 
=
 
$
v
a
r
i
a
n
c
e
q
t
y
[
 
$
i
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
 
=
 
$
v
a
r
i
a
n
c
e
v
a
l
s
[
 
$
i
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
A
r
r
a
y
[
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
i
d
,
 
'
q
t
y
'
 
=
>
 
$
q
t
y
,
 
'
v
a
l
'
 
=
>
 
$
v
a
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
R
u
l
e
s
 
=
 
'
'
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
t
m
p
A
r
r
a
y
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
t
m
p
A
r
r
a
y
 
a
s
 
$
g
u
e
s
t
T
y
p
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
R
u
l
e
s
 
.
=
 
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
.
'
_
'
.
$
g
u
e
s
t
T
y
p
e
s
[
 
'
i
d
'
 
]
.
'
_
'
.
$
g
u
e
s
t
T
y
p
e
s
[
 
'
q
t
y
'
 
]
.
'
_
'
.
$
g
u
e
s
t
T
y
p
e
s
[
 
'
v
a
l
'
 
]
.
'
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
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
t
r
a
c
t
s
 
S
E
T

	
	
	
	
	
`
a
r
r
i
v
a
l
`
 
	
	
	
	
	
=
 
'
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
'
,

	
	
	
	
	
`
d
e
p
a
r
t
u
r
e
`
	
	
	
	
	
=
 
'
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
'
,

	
	
	
	
	
`
r
a
t
e
s
_
u
i
d
`
	
	
	
	
	
=
 
'
"
.
(
i
n
t
)
 
$
r
a
t
e
s
_
u
i
d
.
"
'
,

	
	
	
	
	
`
g
u
e
s
t
_
u
i
d
`
	
	
	
	
	
=
 
'
$
g
u
e
s
t
s
_
u
i
d
'
,

	
	
	
	
	
`
r
a
t
e
_
r
u
l
e
s
`
	
	
	
	
=
 
'
$
r
a
t
e
R
u
l
e
s
'
,

	
	
	
	
	
`
r
o
o
m
s
_
t
a
r
i
f
f
s
`
	
	
	
	
=
 
'
$
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
,

	
	
	
	
	
`
c
o
n
t
r
a
c
t
_
t
o
t
a
l
`
	
	
	
=
 
'
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
,

	
	
	
	
	
`
s
p
e
c
i
a
l
_
r
e
q
s
`
	
	
	
	
=
 
'
$
s
p
e
c
i
a
l
R
e
q
s
'
,

	
	
	
	
	
`
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
`
	
	
	
=
 
'
$
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
,

	
	
	
	
	
`
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
`
	
	
	
=
 
'
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
S
t
r
i
n
g
'
,

	
	
	
	
	
`
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
`
	
	
	
	
=
 
'
$
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
,

	
	
	
	
	
`
s
i
n
g
l
e
_
p
e
r
s
o
n
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
`
	
=
 
'
$
s
i
n
g
l
e
_
p
e
r
s
o
n
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
'
,

	
	
	
	
	
`
e
x
t
r
a
s
`
	
	
	
	
	
=
 
'
$
e
x
t
r
a
s
'
,

	
	
	
	
	
`
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
i
e
s
`
	
	
	
=
 
'
$
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
i
e
s
'
,

	
	
	
	
	
`
e
x
t
r
a
s
v
a
l
u
e
`
	
	
	
	
=
 
'
$
e
x
t
r
a
s
V
a
l
u
e
'
,

	
	
	
	
	
`
t
a
x
`
	
	
	
	
	
	
=
 
'
$
t
a
x
'
,

	
	
	
	
	
`
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
`
	
	
	
	
=
 
'
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
'
,

	
	
	
	
	
`
c
u
r
r
e
n
c
y
_
c
o
d
e
`
 
	
	
	
=
 
'
$
c
c
o
d
e
'
,

	
	
	
	
	
`
d
i
s
c
o
u
n
t
_
d
e
t
a
i
l
s
`
 
	
	
	
=
 
'
"
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
D
a
t
a
-
>
d
i
s
c
o
u
n
t
s
)
.
"
'
,

	
	
	
	
	
`
a
p
p
r
o
v
e
d
`
	
	
 
	
	
	
=
 
'
1
'

	
	
	
	
	
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
'
"
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
,
 
f
a
l
s
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
F
a
i
l
e
d
 
t
o
 
u
p
d
a
t
e
 
c
o
n
t
r
a
c
t
 
d
e
t
a
i
l
s
 
f
o
r
 
b
o
o
k
i
n
g
 
a
m
e
n
d
m
e
n
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
a
u
d
i
t
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
,
 
'
A
m
e
n
d
 
b
o
o
k
i
n
g
 
-
 
c
o
n
t
r
a
c
t
 
u
p
d
a
t
e
d
 
'
.
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
t
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
c
o
m
p
_
n
o
t
e
s
 
(
`
c
o
n
t
r
a
c
t
_
u
i
d
`
,
`
n
o
t
e
`
,
`
t
i
m
e
s
t
a
m
p
`
,
`
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
`
)
 
V
A
L
U
E
S
 
(
'
"
.
(
i
n
t
)
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
.
"
'
,
'
"
.
R
e
m
o
v
e
X
S
S
(
'
A
m
e
n
d
 
b
o
o
k
i
n
g
 
-
 
c
o
n
t
r
a
c
t
 
u
p
d
a
t
e
d
 
'
.
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
)
.
"
'
,
'
$
d
t
'
,
'
"
.
(
i
n
t
)
 
$
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
.
"
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
s
_
u
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
D
e
l
e
t
e
 
e
x
i
s
i
t
i
n
g
 
r
o
o
m
 
b
o
o
k
i
n
g
 
-
 
m
a
y
 
b
e
 
t
h
e
 
s
a
m
e
 
b
u
t
 
e
a
s
i
e
r
 
t
o
 
d
e
l
e
t
e
 
a
n
d
 
i
n
s
e
r
t

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
D
E
L
E
T
E
 
F
R
O
M
 
#
_
_
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
_
b
o
o
k
i
n
g
s
 
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
U
n
a
b
l
e
 
t
o
 
d
e
l
e
t
e
 
f
r
o
m
 
r
o
o
m
 
b
o
o
k
i
n
g
s
 
t
a
b
l
e
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
,
'
,
 
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
S
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
 
=
 
c
o
u
n
t
(
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
A
r
r
a
y
)
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
B
o
o
k
e
d
D
a
t
e
 
=
 
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
A
r
r
a
y
[
 
$
i
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
t
e
r
n
e
t
B
o
o
k
i
n
g
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
c
e
p
t
i
o
n
B
o
o
k
i
n
g
 
=
 
1
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
s
e
l
e
c
t
e
d
 
a
s
 
$
r
o
o
m
s
R
e
q
u
e
s
t
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
 
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
s
R
e
q
u
e
s
t
e
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
u
i
d
 
=
 
$
r
m
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
s
_
u
i
d
s
[
 
]
 
=
 
$
r
m
[
 
1
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
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
_
b
o
o
k
i
n
g
s
 
(
`
r
o
o
m
_
u
i
d
`
,
`
d
a
t
e
`
,
`
c
o
n
t
r
a
c
t
_
u
i
d
`
,
`
i
n
t
e
r
n
e
t
_
b
o
o
k
i
n
g
`
,
`
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
`
,
`
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
`
)
 
V
A
L
U
E
S
 
(
'
$
r
m
u
i
d
'
,
'
$
r
o
o
m
B
o
o
k
e
d
D
a
t
e
'
,
'
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
'
,
'
$
i
n
t
e
r
n
e
t
B
o
o
k
i
n
g
'
,
'
$
r
e
c
e
p
t
i
o
n
B
o
o
k
i
n
g
'
,
'
$
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
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
F
a
i
l
e
d
 
t
o
 
i
n
s
e
r
t
 
b
o
o
k
i
n
g
 
w
h
e
n
 
i
n
s
e
r
t
i
n
g
 
t
o
 
c
o
n
t
r
a
c
t
s
 
t
a
b
l
e
 
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
a
u
d
i
t
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
,
 
'
A
m
e
n
d
 
b
o
o
k
i
n
g
 
-
 
u
p
d
a
t
e
d
 
r
o
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
.
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
m
e
s
s
a
g
i
n
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
m
e
s
s
a
g
e
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
m
e
s
s
a
g
i
n
g
-
>
s
e
t
_
m
e
s
s
a
g
e
(
'
A
m
e
n
d
 
b
o
o
k
i
n
g
 
-
 
u
p
d
a
t
e
d
 
r
o
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
.
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
$
r
a
t
e
s
_
u
i
d
s
 
=
 
a
r
r
a
y
_
u
n
i
q
u
e
(
$
r
a
t
e
s
_
u
i
d
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
c
a
r
t
n
u
m
b
e
r
'
 
]
 
=
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
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
D
a
t
a
L
i
s
t
'
 
]
 
=
 
$
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
D
a
t
a
L
i
s
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
g
u
e
s
t
D
e
t
a
i
l
s
'
 
]
 
=
 
$
g
u
e
s
t
D
e
t
a
i
l
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
g
u
e
s
t
s
_
u
i
d
'
 
]
 
=
 
$
g
u
e
s
t
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
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
 
=
 
$
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
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
 
]
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
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
 
]
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
]
 
=
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
r
a
t
e
s
_
u
i
d
s
'
 
]
 
=
 
$
r
a
t
e
s
_
u
i
d
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
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
 
]
 
=
 
$
r
o
o
m
s
R
e
q
u
e
s
t
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
c
o
n
t
r
a
c
t
_
u
i
d
'
 
]
 
=
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
'
 
]
 
=
 
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
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
3
0
2
5
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
 
/
/
 
G
e
n
e
r
a
t
e
 
i
n
v
o
i
c
e


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
B
o
o
k
i
n
g
 
a
m
e
n
d
m
e
n
t
 
s
u
c
c
e
s
s
f
u
l
 
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
B
o
o
k
i
n
g
 
a
m
e
n
d
m
e
n
t
 
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
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
b
o
o
k
i
n
g
_
m
o
d
i
f
i
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
b
o
o
k
i
n
g
 
i
s
 
m
o
d
i
f
i
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
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
 
 
 
 
 
 
 
 
 
 
 
=
 
$
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
u
s
e
r
_
i
d
 
=
 
0
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
u
s
e
N
e
w
u
s
e
r
s
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
u
s
e
r
_
i
d
 
=
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
c
r
e
a
t
e
N
e
w
U
s
e
r
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
s
_
u
i
d
 
=
 
i
n
s
e
r
t
G
u
e
s
t
D
e
e
t
s
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
r
t
n
u
m
b
e
r
 
=
 
g
e
t
_
b
o
o
k
i
n
g
_
n
u
m
b
e
r
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
t
r
i
m
(
$
c
a
r
t
n
u
m
b
e
r
)
 
=
=
 
'
'
)
 
{

	
	
	
	
	
$
c
a
r
t
n
u
m
b
e
r
 
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
R
E
Q
U
E
S
T
,
 
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
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
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
e
d
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
e
d
 
=
 
0
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
p
p
r
o
v
e
d
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
S
e
t
t
i
n
g
 
c
a
r
t
 
n
u
m
b
e
r
.
 
'
.
$
c
a
r
t
n
u
m
b
e
r
.
'
 
f
o
r
 
'
.
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
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
D
a
t
a
L
i
s
t
 
a
s
 
$
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
D
a
t
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
$
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
D
a
t
a
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
D
a
t
a
-
>
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
D
a
t
a
-
>
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
S
t
r
i
n
g
 
=
 
$
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
D
a
t
a
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
(
i
n
t
)
 
$
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
D
a
t
a
-
>
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
s
_
u
i
d
 
=
 
$
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
D
a
t
a
-
>
r
a
t
e
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
n
g
l
e
_
p
e
r
s
o
n
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
 
=
 
$
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
D
a
t
a
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
$
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
D
a
t
a
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
=
 
$
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
D
a
t
a
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
 
=
 
$
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
D
a
t
a
-
>
e
x
t
r
a
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
e
s
 
=
 
$
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
D
a
t
a
-
>
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
i
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
V
a
l
u
e
 
=
 
$
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
D
a
t
a
-
>
e
x
t
r
a
s
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
p
e
c
i
a
l
R
e
q
s
 
=
 
a
d
d
s
l
a
s
h
e
s
(
$
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
D
a
t
a
-
>
e
r
r
o
r
_
l
o
g
)
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
D
a
t
a
-
>
d
i
s
c
o
u
n
t
s
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
D
a
t
a
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
 
=
 
$
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
D
a
t
a
-
>
t
a
x
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
p
o
n
_
i
d
 
=
 
$
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
D
a
t
a
-
>
c
o
u
p
o
n
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
e
d
_
i
n
 
=
 
$
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
D
a
t
a
-
>
b
o
o
k
e
d
_
i
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
n
d
G
u
e
s
t
E
m
a
i
l
 
=
 
$
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
D
a
t
a
-
>
s
e
n
d
G
u
e
s
t
E
m
a
i
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
n
d
H
o
t
e
l
E
m
a
i
l
 
=
 
$
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
D
a
t
a
-
>
s
e
n
d
H
o
t
e
l
E
m
a
i
l
;

	
	
	
	
	

	
	
	
	
	
$
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
 
=
 
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
D
a
t
a
-
>
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
)
)

	
	
	
	
	
	
$
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
 
=
 
$
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
D
a
t
a
-
>
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
)
 
{
 
/
/
 
T
h
e
 
u
s
e
r
 
i
s
 
a
l
r
e
a
d
y
 
r
e
g
i
s
t
e
r
e
d

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
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
c
m
s
s
p
e
c
i
f
i
c
_
g
e
t
C
M
S
_
u
s
e
r
s
_
f
r
o
n
t
e
n
d
_
u
s
e
r
d
e
t
a
i
l
s
_
b
y
_
i
d
(
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
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
e
r
s
U
s
e
r
n
a
m
e
 
=
 
$
u
s
e
r
[
 
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
d
 
]
[
 
'
u
s
e
r
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
n
e
w
_
u
s
e
r
_
i
d
 
>
 
0
 
&
&
 
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
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
)
 
{
 
/
/
 
I
f
 
a
 
n
e
w
 
u
s
e
r
 
i
s
n
'
t
 
c
r
e
a
t
e
d
,
 
t
h
e
n
 
$
n
e
w
_
u
s
e
r
_
i
d
 
w
i
l
l
 
b
e
 
-
1
.
 
T
h
e
 
i
d
e
a
 
h
e
r
e
 
i
s
 
t
o
 
g
e
t
 
t
h
e
 
n
e
w
 
u
s
e
r
n
a
m
e
 
o
f
 
t
h
e
 
n
e
w
l
y
 
c
r
e
a
t
e
d
 
u
s
e
r
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
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
c
m
s
s
p
e
c
i
f
i
c
_
g
e
t
C
M
S
_
u
s
e
r
s
_
f
r
o
n
t
e
n
d
_
u
s
e
r
d
e
t
a
i
l
s
_
b
y
_
i
d
(
$
n
e
w
_
u
s
e
r
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
e
r
s
U
s
e
r
n
a
m
e
 
=
 
$
u
s
e
r
[
 
$
n
e
w
_
u
s
e
r
_
i
d
 
]
[
 
'
u
s
e
r
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
 
B
o
o
k
e
d
 
b
y
 
a
 
n
o
n
-
l
o
g
g
e
d
 
i
n
 
u
s
e
r

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
e
r
s
U
s
e
r
n
a
m
e
 
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
t
m
p
g
u
e
s
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
.
'
 
'
.
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
t
m
p
g
u
e
s
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
B
a
s
i
c
 
d
e
t
a
i
l
s
 
s
e
t
 
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
h
e
 
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
e
s
 
i
s
 
p
a
s
s
e
d
 
w
i
t
h
 
A
L
L
 
e
x
t
r
a
 
u
i
d
s
 
a
n
d
 
d
e
f
a
u
l
t
 
q
u
a
n
t
i
e
s
.
 
A
t
 
t
h
i
s
 
p
o
i
n
t
 
w
e
 
w
i
l
l
 
s
t
r
i
p
 
o
u
t
 
t
h
e
 
e
x
t
r
a
 
u
i
d
 
t
h
a
t
 
w
e
r
e
n
'
t
 
a
c
t
u
a
l
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
 
b
e
f
o
r
e
 
a
d
d
i
n
g
 
t
h
e
 
s
e
r
i
a
l
i
z
e
d
 
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
i
e
s
 
t
o
 
t
h
e
 
d
b

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
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
i
e
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
E
x
t
r
a
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
e
x
t
r
a
s
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
c
u
r
r
e
n
t
E
x
t
r
a
s
)
 
&
&
 
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
i
e
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
i
e
s
 
a
s
 
$
i
d
 
=
>
 
$
q
u
a
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
i
d
,
 
$
c
u
r
r
e
n
t
E
x
t
r
a
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
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
i
e
s
[
 
$
i
d
 
]
 
=
 
$
q
u
a
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
e
s
 
=
 
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
t
m
p
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
i
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
i
e
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
o
u
r
c
e
 
=
 
$
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
D
a
t
a
-
>
r
e
s
o
u
r
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
o
u
r
c
e
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
P
a
i
d
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
u
n
t
_
d
e
t
a
i
l
s
 
=
 
'
'
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
d
i
s
c
o
u
n
t
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
d
i
s
c
o
u
n
t
 
a
s
 
$
d
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
_
d
e
t
a
i
l
s
 
.
=
 
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
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
N
o
t
 
a
 
s
e
c
r
e
t
 
k
e
y
 
b
o
o
k
i
n
g
 
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
N
o
w
 
t
o
 
d
o
u
b
l
e
 
c
h
e
c
k
 
t
h
a
t
 
t
h
e
 
r
o
o
m
s
 
h
a
v
e
n
'
t
 
b
e
e
n
 
b
o
o
k
e
d
 
w
h
i
l
e
 
t
h
i
s
 
p
e
r
s
o
n
 
w
a
s
 
p
a
y
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
,
'
,
 
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
S
t
r
i
n
g
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
 
=
 
c
o
u
n
t
(
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
A
r
r
a
y
)
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
B
o
o
k
e
d
D
a
t
e
 
=
 
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
A
r
r
a
y
[
 
$
i
 
]
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
s
e
l
e
c
t
e
d
 
a
s
 
$
r
o
o
m
s
R
e
q
u
e
s
t
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
 
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
s
R
e
q
u
e
s
t
e
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
u
i
d
 
=
 
$
r
m
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
s
_
u
i
d
s
[
 
]
 
=
 
$
r
m
[
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
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
s
_
u
i
d
 
F
R
O
M
 
#
_
_
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
_
b
o
o
k
i
n
g
s
 
W
H
E
R
E
 
`
r
o
o
m
_
u
i
d
`
 
=
 
'
"
.
(
i
n
t
)
 
$
r
m
u
i
d
.
"
'
 
A
N
D
 
`
d
a
t
e
`
 
=
 
'
"
.
$
r
o
o
m
B
o
o
k
e
d
D
a
t
e
.
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
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
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
F
a
i
l
e
d
 
t
o
 
i
n
s
e
r
t
 
b
o
o
k
i
n
g
 
l
o
o
k
s
 
l
i
k
e
 
t
h
e
 
r
o
o
m
 
h
a
s
 
b
e
e
n
 
d
o
u
b
l
e
 
b
o
o
k
e
d
 
'
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
"
t
a
s
k
"
 
=
=
 
'
p
r
o
c
e
s
s
p
a
y
m
e
n
t
'
)
 
)
 
{
 
/
/
 
W
e
 
d
o
n
'
t
 
w
a
n
t
 
t
o
 
t
r
i
g
g
e
r
 
e
r
r
o
r
s
 
i
f
 
t
h
i
s
 
s
c
r
i
p
t
 
i
s
 
b
e
i
n
g
 
c
a
l
l
e
d
 
b
y
 
o
t
h
e
r
 
s
o
u
r
c
e
s
 
s
u
c
h
 
a
s
 
c
h
a
n
n
e
l
 
m
a
n
a
g
e
r
 
i
m
p
o
r
t
 
s
c
r
i
p
t
s
.

	
	
	
	
	
	
	
	
	
	
	
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
F
a
i
l
e
d
 
t
o
 
i
n
s
e
r
t
 
b
o
o
k
i
n
g
 
l
o
o
k
s
 
l
i
k
e
 
t
h
e
 
r
o
o
m
 
h
a
s
 
b
e
e
n
 
d
o
u
b
l
e
 
b
o
o
k
e
d
 
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

	
	
	
	
	
	
	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
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
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
R
o
o
m
(
s
)
 
h
a
v
e
 
n
o
t
 
b
e
e
n
 
d
o
u
b
l
e
 
b
o
o
k
e
d
 
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
G
e
t
t
i
n
g
 
g
u
e
s
t
 
t
y
p
e
 
d
a
t
a
 
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
L
e
t
'
s
 
g
e
t
 
o
u
r
 
g
u
e
s
t
 
t
y
p
e
 
d
a
t
a

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
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
v
a
r
i
a
n
c
e
t
y
p
e
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
D
a
t
a
-
>
v
a
r
i
a
n
c
e
t
y
p
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
r
i
a
n
c
e
u
i
d
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
D
a
t
a
-
>
v
a
r
i
a
n
c
e
u
i
d
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
r
i
a
n
c
e
q
t
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
,
'
,
 
$
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
D
a
t
a
-
>
v
a
r
i
a
n
c
e
q
t
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
r
i
a
n
c
e
v
a
l
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
D
a
t
a
-
>
v
a
r
i
a
n
c
e
v
a
l
s
)
;

	
	
	
	
	
$
n
 
=
 
c
o
u
n
t
(
$
v
a
r
i
a
n
c
e
t
y
p
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
a
r
i
a
n
c
e
t
y
p
e
s
[
 
$
i
 
]
 
=
=
 
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
 
&
&
 
$
v
a
r
i
a
n
c
e
q
t
y
[
 
$
i
 
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
 
=
 
$
v
a
r
i
a
n
c
e
u
i
d
s
[
 
$
i
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
t
y
 
=
 
$
v
a
r
i
a
n
c
e
q
t
y
[
 
$
i
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
 
=
 
$
v
a
r
i
a
n
c
e
v
a
l
s
[
 
$
i
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
A
r
r
a
y
[
 
]
 
=
 
a
r
r
a
y
(
'
i
d
'
 
=
>
 
$
i
d
,
 
'
q
t
y
'
 
=
>
 
$
q
t
y
,
 
'
v
a
l
'
 
=
>
 
$
v
a
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
R
u
l
e
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
c
o
u
n
t
(
$
t
m
p
A
r
r
a
y
)
 
>
 
0
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
t
m
p
A
r
r
a
y
 
a
s
 
$
g
u
e
s
t
T
y
p
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
R
u
l
e
s
 
.
=
 
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
.
'
_
'
.
$
g
u
e
s
t
T
y
p
e
s
[
 
'
i
d
'
 
]
.
'
_
'
.
$
g
u
e
s
t
T
y
p
e
s
[
 
'
q
t
y
'
 
]
.
'
_
'
.
$
g
u
e
s
t
T
y
p
e
s
[
 
'
v
a
l
'
 
]
.
'
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
c
o
n
t
r
a
c
t
_
s
e
c
r
e
t
_
k
e
y
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
t
r
a
c
t
_
s
e
c
r
e
t
_
k
e
y
 
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
c
o
n
t
r
a
c
t
_
s
e
c
r
e
t
_
k
e
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
c
r
e
t
_
k
e
y
 
=
 
$
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
t
r
a
c
t
_
s
e
c
r
e
t
_
k
e
y
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
s
e
c
r
e
t
_
k
e
y
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
 
W
H
E
R
E
 
t
a
g
 
=
 
'
"
.
$
c
a
r
t
n
u
m
b
e
r
.
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
_
i
d
 
=
 
(
i
n
t
)
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
R
e
f
e
r
r
e
r
 
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
t
m
p
b
o
o
k
i
n
g
[
 
'
r
e
f
e
r
r
e
r
'
 
]
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
m
p
b
o
o
k
i
n
g
[
 
'
r
e
f
e
r
r
e
r
'
 
]
)
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
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
r
e
f
e
r
r
e
r
'
 
]
 
=
 
'
J
o
m
r
e
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
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
t
r
a
c
t
s
 
(

	
	
	
	
	
	
`
a
r
r
i
v
a
l
`
,
 

	
	
	
	
	
	
`
d
e
p
a
r
t
u
r
e
`
,
 

	
	
	
	
	
	
`
r
a
t
e
s
_
u
i
d
`
,
 

	
	
	
	
	
	
`
g
u
e
s
t
_
u
i
d
`
,
 

	
	
	
	
	
	
`
r
a
t
e
_
r
u
l
e
s
`
,
 

	
	
	
	
	
	
`
r
o
o
m
s
_
t
a
r
i
f
f
s
`
,
 

	
	
	
	
	
	
`
c
o
n
t
r
a
c
t
_
t
o
t
a
l
`
,
 

	
	
	
	
	
	
`
s
p
e
c
i
a
l
_
r
e
q
s
`
,
 

	
	
	
	
	
	
`
d
e
p
o
s
i
t
_
p
a
i
d
`
,
 

	
	
	
	
	
	
`
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
`
,
 

	
	
	
	
	
	
`
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
`
,
 

	
	
	
	
	
	
`
b
o
o
k
e
d
_
i
n
`
,
 

	
	
	
	
	
	
`
b
o
o
k
e
d
_
o
u
t
`
,
 

	
	
	
	
	
	
`
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
`
,
 

	
	
	
	
	
	
`
s
i
n
g
l
e
_
p
e
r
s
o
n
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
`
,
 

	
	
	
	
	
	
`
e
x
t
r
a
s
`
,
 

	
	
	
	
	
	
`
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
i
e
s
`
,
 

	
	
	
	
	
	
`
e
x
t
r
a
s
v
a
l
u
e
`
,
 

	
	
	
	
	
	
`
t
a
x
`
,
 

	
	
	
	
	
	
`
t
a
g
`
,
 

	
	
	
	
	
	
`
t
i
m
e
s
t
a
m
p
`
,
 

	
	
	
	
	
	
`
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
`
,
 

	
	
	
	
	
	
`
d
i
s
c
o
u
n
t
`
,
 

	
	
	
	
	
	
`
c
u
r
r
e
n
c
y
_
c
o
d
e
`
,
 

	
	
	
	
	
	
`
d
i
s
c
o
u
n
t
_
d
e
t
a
i
l
s
`
,
 

	
	
	
	
	
	
`
u
s
e
r
n
a
m
e
`
,
 

	
	
	
	
	
	
`
c
o
u
p
o
n
_
i
d
`
,
 

	
	
	
	
	
	
`
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
`
,
 

	
	
	
	
	
	
`
a
p
p
r
o
v
e
d
`
,
 

	
	
	
	
	
	
`
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
_
i
d
`
,
 

	
	
	
	
	
	
`
s
e
c
r
e
t
_
k
e
y
`
,
 

	
	
	
	
	
	
`
b
o
o
k
i
n
g
_
l
a
n
g
u
a
g
e
`
,
 

	
	
	
	
	
	
`
r
e
f
e
r
r
e
r
`

	
	
	
	
	
	
)

	
	
	
	
	
V
A
L
U
E
S
 
(

	
	
	
	
	
	
'
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
'
,

	
	
	
	
	
	
'
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
'
,

	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
r
a
t
e
s
_
u
i
d
.
"
,

	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
g
u
e
s
t
s
_
u
i
d
.
"
,

	
	
	
	
	
	
'
$
r
a
t
e
R
u
l
e
s
'
,

	
	
	
	
	
	
'
"
.
(
s
t
r
i
n
g
)
 
$
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
.
"
'
,
 

	
	
	
	
	
	
"
.
(
f
l
o
a
t
)
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
.
"
,

	
	
	
	
	
	
'
$
s
p
e
c
i
a
l
R
e
q
s
'
,

	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
d
e
p
o
s
i
t
P
a
i
d
.
"
,

	
	
	
	
	
	
"
.
(
f
l
o
a
t
)
 
$
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
.
"
,

	
	
	
	
	
	
'
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
S
t
r
i
n
g
'
,

	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
b
o
o
k
e
d
_
i
n
.
"
,

	
	
	
	
	
	
0
,

	
	
	
	
	
	
"
 
.
(
i
n
t
)
 
$
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
.
"
,

	
	
	
	
	
	
"
.
(
f
l
o
a
t
)
 
$
s
i
n
g
l
e
_
p
e
r
s
o
n
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
.
"
,

	
	
	
	
	
	
'
$
e
x
t
r
a
s
'
,

	
	
	
	
	
	
'
"
.
(
s
t
r
i
n
g
)
 
$
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
i
e
s
.
"
'
,

	
	
	
	
	
	
"
.
(
f
l
o
a
t
)
 
$
e
x
t
r
a
s
V
a
l
u
e
.
"
,

	
	
	
	
	
	
"
.
(
f
l
o
a
t
)
 
$
t
a
x
.
"
,

	
	
	
	
	
	
'
$
c
a
r
t
n
u
m
b
e
r
'
,

	
	
	
	
	
	
'
$
d
a
t
e
t
i
m
e
'
,

	
	
	
	
	
	
"
.
(
f
l
o
a
t
)
 
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
.
"
,

	
	
	
	
	
	
"
.
(
f
l
o
a
t
)
 
$
d
i
s
c
o
u
n
t
.
"
,

	
	
	
	
	
	
'
$
c
c
o
d
e
'
,

	
	
	
	
	
	
'
"
.
$
d
i
s
c
o
u
n
t
_
d
e
t
a
i
l
s
.
"
'
,

	
	
	
	
	
	
'
"
.
$
b
o
o
k
e
r
s
U
s
e
r
n
a
m
e
.
"
'
,

	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
c
o
u
p
o
n
_
i
d
.
"
,

	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
.
"
,

	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
a
p
p
r
o
v
e
d
.
"
,

	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
_
i
d
.
"
,
 

	
	
	
	
	
	
'
"
.
$
s
e
c
r
e
t
_
k
e
y
.
"
'
,
 

	
	
	
	
	
	
'
"
.
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
l
a
n
g
'
)
.
"
'
,
 

	
	
	
	
	
	
'
"
.
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
t
m
p
b
o
o
k
i
n
g
[
 
'
r
e
f
e
r
r
e
r
'
 
]
.
"
'

	
	
	
	
	
	
)
"
;


	
	
	
	
	
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
I
n
s
e
r
t
 
q
u
e
r
y
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
_
i
d
 
>
 
0
)
 
{
 
/
/
 
Q
u
i
c
k
 
b
o
o
k
i
n
g
s
 
w
i
l
l
 
l
o
g
 
a
 
m
y
s
q
l
 
e
r
r
o
r
,
 
b
u
t
 
q
u
i
c
k
 
b
o
o
k
i
n
g
s
 
d
o
n
'
t
 
u
s
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
 
d
a
t
a
 
a
r
c
h
i
v
e
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
 
S
E
T
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
.
$
c
o
n
t
r
a
c
t
_
u
i
d
.
'
 
W
H
E
R
E
 
i
d
 
=
 
'
.
$
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
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
s
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
'
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
t
e
x
t
 
=
 
s
t
r
i
p
_
t
a
g
s
(
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
t
e
x
t
 
=
 
s
t
r
i
p
_
t
a
g
s
(
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
t
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
c
o
m
p
_
n
o
t
e
s
 
(
`
c
o
n
t
r
a
c
t
_
u
i
d
`
,
`
n
o
t
e
`
,
`
t
i
m
e
s
t
a
m
p
`
,
`
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
`
)
 
V
A
L
U
E
S
 
(
'
"
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
,
'
"
.
R
e
m
o
v
e
X
S
S
(
$
n
e
w
t
e
x
t
)
.
"
'
,
'
$
d
t
'
,
'
"
.
(
i
n
t
)
 
$
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
.
"
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
c
o
n
t
r
a
c
t
_
u
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
F
a
i
l
e
d
 
t
o
 
i
n
s
e
r
t
 
b
o
o
k
i
n
g
 
w
h
e
n
 
i
n
s
e
r
t
i
n
g
 
t
o
 
c
o
n
t
r
a
c
t
s
 
t
a
b
l
e
 
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
s
_
u
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
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
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
]
 
=
=
 
0
 
|
|
 
(
(
i
n
t
)
 
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
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
]
 
=
=
 
1
 
&
&
 
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
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
|
|
 
$
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
,
'
,
 
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
S
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
 
=
 
c
o
u
n
t
(
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
A
r
r
a
y
)
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
B
o
o
k
e
d
D
a
t
e
 
=
 
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
A
r
r
a
y
[
 
$
i
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
t
e
r
n
e
t
B
o
o
k
i
n
g
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
c
e
p
t
i
o
n
B
o
o
k
i
n
g
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
t
e
r
n
e
t
B
o
o
k
i
n
g
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
c
e
p
t
i
o
n
B
o
o
k
i
n
g
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
 
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
s
e
l
e
c
t
e
d
 
a
s
 
$
r
o
o
m
s
R
e
q
u
e
s
t
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
 
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
s
R
e
q
u
e
s
t
e
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
u
i
d
 
=
 
$
r
m
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
s
_
u
i
d
s
[
 
]
 
=
 
$
r
m
[
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
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
_
b
o
o
k
i
n
g
s
 
(
`
r
o
o
m
_
u
i
d
`
,
`
d
a
t
e
`
,
`
c
o
n
t
r
a
c
t
_
u
i
d
`
,
`
i
n
t
e
r
n
e
t
_
b
o
o
k
i
n
g
`
,
`
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
`
,
`
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
`
)
 
V
A
L
U
E
S
 
(
'
"
.
(
i
n
t
)
 
$
r
m
u
i
d
.
"
'
,
'
$
r
o
o
m
B
o
o
k
e
d
D
a
t
e
'
,
'
"
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
,
'
"
.
(
i
n
t
)
 
$
i
n
t
e
r
n
e
t
B
o
o
k
i
n
g
.
"
'
,
'
"
.
(
i
n
t
)
 
$
r
e
c
e
p
t
i
o
n
B
o
o
k
i
n
g
.
"
'
,
'
"
.
(
i
n
t
)
 
$
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
.
"
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
F
a
i
l
e
d
 
t
o
 
i
n
s
e
r
t
 
b
o
o
k
i
n
g
 
w
h
e
n
 
i
n
s
e
r
t
i
n
g
 
t
o
 
r
o
o
m
 
b
o
o
k
i
n
g
s
 
t
a
b
l
e
 
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
a
u
d
i
t
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
,
 
'
B
o
o
k
e
d
 
r
o
o
m
 
'
.
$
c
a
r
t
n
u
m
b
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
p
a
r
t
n
e
r
_
b
o
o
k
i
n
g
s
 
(
`
c
o
n
t
r
a
c
t
_
u
i
d
`
,
`
p
a
r
t
n
e
r
_
i
d
`
)
 
V
A
L
U
E
S
 
(
'
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
'
 
,
 
'
.
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
d
.
'
 
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
s
_
u
i
d
s
 
=
 
a
r
r
a
y
_
u
n
i
q
u
e
(
$
r
a
t
e
s
_
u
i
d
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
a
u
d
i
t
(
$
c
a
r
t
n
u
m
b
e
r
,
 
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
M
R
_
A
U
D
I
T
_
B
O
O
K
E
D
_
R
O
O
M
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
M
R
_
A
U
D
I
T
_
B
O
O
K
E
D
_
R
O
O
M
'
,
 
f
a
l
s
e
)
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
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
(
i
n
t
)
 
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
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
p
p
r
o
v
a
l
_
c
o
n
t
r
a
c
t
_
u
i
d
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
d
e
p
o
s
i
t
P
a
i
d
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
_
p
a
i
d
_
c
l
a
u
s
e
 
=
 
"
,
 
d
e
p
o
s
i
t
_
p
a
i
d
 
=
 
'
1
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
m
a
r
k
 
t
h
e
 
s
e
c
r
e
t
 
k
e
y
 
a
s
 
u
s
e
d

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
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
t
r
a
c
t
s
 
S
E
T
 
s
e
c
r
e
t
_
k
e
y
_
u
s
e
d
 
=
 
'
1
'
 
$
d
e
p
o
s
i
t
_
p
a
i
d
_
c
l
a
u
s
e
 
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
"
.
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
a
d
d
 
a
 
b
o
o
k
i
n
g
 
n
o
t
e
 
t
h
a
t
 
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
 
e
n
q
u
i
r
y
 
h
a
s
 
b
e
e
n
 
a
p
p
r
o
v
e
d

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
c
o
m
p
_
n
o
t
e
s
 
(
`
c
o
n
t
r
a
c
t
_
u
i
d
`
,
`
n
o
t
e
`
,
`
t
i
m
e
s
t
a
m
p
`
,
`
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
`
)
 
V
A
L
U
E
S
 
(
'
"
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
,
'
"
.
'
S
e
c
r
e
t
 
k
e
y
 
p
a
y
m
e
n
t
 
m
a
d
e
'
.
"
'
,
'
"
.
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
.
"
'
,
'
"
.
(
i
n
t
)
 
$
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
.
"
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
c
a
r
t
n
u
m
b
e
r
'
 
]
 
=
 
$
c
a
r
t
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
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
D
a
t
a
L
i
s
t
'
 
]
 
=
 
$
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
D
a
t
a
L
i
s
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
g
u
e
s
t
D
e
t
a
i
l
s
'
 
]
 
=
 
$
g
u
e
s
t
D
e
t
a
i
l
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
g
u
e
s
t
s
_
u
i
d
'
 
]
 
=
 
$
g
u
e
s
t
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
 
$
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
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
 
]
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
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
 
]
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
]
 
=
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
e
x
t
r
a
s
V
a
l
u
e
'
 
]
 
=
 
$
e
x
t
r
a
s
V
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
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
'
 
]
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
r
a
t
e
s
_
u
i
d
s
'
 
]
 
=
 
$
r
a
t
e
s
_
u
i
d
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
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
 
]
 
=
 
$
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
c
o
n
t
r
a
c
t
_
u
i
d
'
 
]
 
=
 
$
c
o
n
t
r
a
c
t
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
s
p
e
c
i
a
l
R
e
q
s
'
 
]
 
=
 
$
s
p
e
c
i
a
l
R
e
q
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
e
x
t
r
a
s
'
 
]
 
=
 
$
e
x
t
r
a
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
 
]
 
=
 
$
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
s
e
n
d
G
u
e
s
t
E
m
a
i
l
'
 
]
 
=
 
$
s
e
n
d
G
u
e
s
t
E
m
a
i
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
s
e
n
d
H
o
t
e
l
E
m
a
i
l
'
 
]
 
=
 
$
s
e
n
d
H
o
t
e
l
E
m
a
i
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
a
p
p
r
o
v
e
d
'
 
]
 
=
 
$
a
p
p
r
o
v
e
d
;

	
	
	
	
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
[
 
'
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
'
 
]
 
=
 
$
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
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
[
 
'
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
'
 
]
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
[
 
'
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
'
 
]
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
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
3
0
2
5
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
 
/
/
 
G
e
n
e
r
a
t
e
 
i
n
v
o
i
c
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
3
1
0
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
 
/
/
 
G
e
n
e
r
a
t
e
 
h
o
t
e
l
 
c
o
n
f
i
r
m
a
t
i
o
n
 
e
m
a
i
l

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
3
1
1
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
 
/
/
 
G
e
n
e
r
a
t
e
 
g
u
e
s
t
 
c
o
n
f
i
r
m
a
t
i
o
n
 
e
m
a
i
l

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
3
2
0
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
 
/
/
 
p
o
s
t
 
i
n
s
e
r
t
 
b
o
o
k
i
n
g
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
a
u
d
i
t
(
'
C
a
r
t
 
n
u
m
b
e
r
 
'
.
$
c
a
r
t
n
u
m
b
e
r
,
 
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
M
R
_
A
U
D
I
T
_
B
O
O
K
E
D
_
R
O
O
M
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
M
R
_
A
U
D
I
T
_
B
O
O
K
E
D
_
R
O
O
M
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
c
a
r
t
n
u
m
b
e
r
'
 
]
 
=
 
$
c
a
r
t
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
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
D
a
t
a
L
i
s
t
'
 
]
 
=
 
$
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
D
a
t
a
L
i
s
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
g
u
e
s
t
D
e
t
a
i
l
s
'
 
]
 
=
 
$
g
u
e
s
t
D
e
t
a
i
l
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
g
u
e
s
t
s
_
u
i
d
'
 
]
 
=
 
$
g
u
e
s
t
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
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
 
=
 
$
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
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
 
]
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
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
 
]
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
]
 
=
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
r
a
t
e
s
_
u
i
d
s
'
 
]
 
=
 
$
r
a
t
e
s
_
u
i
d
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
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
 
]
 
=
 
$
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
c
o
n
t
r
a
c
t
_
u
i
d
'
 
]
 
=
 
$
c
o
n
t
r
a
c
t
_
u
i
d
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
[
 
'
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
'
 
]
 
=
 
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
 
:
:
 
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
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
B
o
o
k
i
n
g
 
i
n
s
e
r
t
 
S
u
c
c
e
s
s
f
u
l
 
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
y
s
t
e
m
_
l
o
g
(
'
j
0
3
0
2
0
i
n
s
e
r
t
b
o
o
k
i
n
g
 
:
:
 
B
o
o
k
i
n
g
 
i
n
s
e
r
t
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
i
f
 
(
$
a
p
p
r
o
v
e
d
 
=
=
 
1
)
 
{

	
	
	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
b
o
o
k
i
n
g
_
a
d
d
e
d
'
;

	
	
	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
b
o
o
k
i
n
g
 
i
s
 
a
d
d
e
d
.
'
;

	
	
	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

	
	
	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
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
 
 
 
 
 
 
 
 
 
 
 
=
 
$
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
;

	
	
	
	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
c
o
n
t
r
a
c
t
_
u
i
d
;

	
	
	
	
	
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;

	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
 
&
&
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
N
o
t
e
s
 
=
 
$
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
D
a
t
a
-
>
b
o
o
k
i
n
g
_
n
o
t
e
s
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
o
o
k
i
n
g
N
o
t
e
s
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
t
e
 
=
 
'
 
'
.
s
t
r
i
p
_
t
a
g
s
(
$
k
)
.
'
 
'
.
s
t
r
i
p
_
t
a
g
s
(
$
v
)
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
c
o
m
p
_
n
o
t
e
s
 
(
`
c
o
n
t
r
a
c
t
_
u
i
d
`
,
`
n
o
t
e
`
,
`
t
i
m
e
s
t
a
m
p
`
,
`
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
`
)
 
V
A
L
U
E
S
 
(
'
"
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
,
'
"
.
$
n
o
t
e
.
"
'
,
'
$
d
t
'
,
'
"
.
(
i
n
t
)
 
$
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
.
"
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
t
m
p
b
o
o
k
i
n
g
[
 
'
g
a
t
e
w
a
y
'
 
]
)
)
 
{

	
	
	
	
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
c
o
m
p
_
n
o
t
e
s
 
(
`
c
o
n
t
r
a
c
t
_
u
i
d
`
,
`
n
o
t
e
`
,
`
t
i
m
e
s
t
a
m
p
`
,
`
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
`
)
 
V
A
L
U
E
S
 
(
'
"
 
.
 
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
.
 
"
'
,
'
"
 
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
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
_
U
S
E
D
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
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
_
U
S
E
D
'
,
 
f
a
l
s
e
)
.
"
 
"
.
 
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
t
m
p
b
o
o
k
i
n
g
[
 
'
g
a
t
e
w
a
y
'
 
]
 
.
 
"
'
,
'
"
.
d
a
t
e
(
 
"
Y
-
m
-
d
 
H
-
i
-
s
"
 
)
.
"
'
,
'
"
 
.
 
(
i
n
t
)
 
$
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
 
.
 
"
'
)
"
;

	
	
	
	
d
o
I
n
s
e
r
t
S
q
l
(
 
$
q
u
e
r
y
,
 
"
"
 
)
;

	
	
	
}

	
	
	


 
 
 
 
 
 
 
 
 
 
 
 
/
/
a
d
d
 
r
o
o
m
s
 
b
o
o
k
e
d
 
n
o
t
e
s
 
f
o
r
 
g
u
e
s
t
 
b
o
o
k
i
n
g
s
 
t
h
a
t
 
r
e
q
u
i
r
e
 
a
p
p
r
o
v
a
l
s

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
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
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
]
 
=
=
 
1
 
&
&
 
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
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 
!
$
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
$
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
D
a
t
a
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
u
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
s
e
l
e
c
t
e
d
 
a
s
 
$
r
o
o
m
s
R
e
q
u
e
s
t
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
 
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
s
R
e
q
u
e
s
t
e
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
u
i
d
s
[
]
 
=
 
$
r
m
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
r
o
o
m
_
u
i
d
,
 
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
,
 
r
o
o
m
_
n
u
m
b
e
r
,
 
r
o
o
m
_
n
a
m
e
 
F
R
O
M
 
#
_
_
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
s
 
W
H
E
R
E
 
r
o
o
m
_
u
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
r
m
u
i
d
s
)
.
'
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
N
o
t
e
 
=
 
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
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
R
O
O
M
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
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
R
O
O
M
'
,
 
f
a
l
s
e
)
.
'
 
'
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
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
-
>
r
o
o
m
_
n
u
m
b
e
r
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
N
o
t
e
 
.
=
 
$
r
-
>
r
o
o
m
_
n
u
m
b
e
r
.
'
 
-
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
-
>
r
o
o
m
_
n
a
m
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
N
o
t
e
 
.
=
 
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
N
A
M
E
_
T
I
T
L
E
'
.
$
r
-
>
r
o
o
m
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
r
o
o
m
_
n
a
m
e
)
,
 
f
a
l
s
e
)
.
'
 
-
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
N
o
t
e
 
.
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
a
l
l
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
s
[
 
(
i
n
t
)
 
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
]
[
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
N
o
t
e
 
.
=
 
'
,
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
c
o
m
p
_
n
o
t
e
s
 
(
`
c
o
n
t
r
a
c
t
_
u
i
d
`
,
`
n
o
t
e
`
,
`
t
i
m
e
s
t
a
m
p
`
,
`
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
`
)
 
V
A
L
U
E
S
 
(
'
"
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
,
'
"
.
$
r
o
o
m
N
o
t
e
.
"
'
,
'
$
d
t
'
,
'
"
.
(
i
n
t
)
 
$
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
.
"
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
i
n
s
e
r
t
 
c
u
s
t
o
m
 
f
i
e
l
d
s
 
n
o
t
e
s

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
s
e
c
r
e
t
_
k
e
y
_
p
a
y
m
e
n
t
 
&
&
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
u
i
d
 
=
=
 
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
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
t
y
p
e
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
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
t
y
p
e
_
i
d
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
c
u
s
t
o
m
_
f
i
e
l
d
_
h
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
c
u
s
t
o
m
_
f
i
e
l
d
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
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
 
=
 
$
j
o
m
r
e
s
_
c
u
s
t
o
m
_
f
i
e
l
d
_
h
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
A
l
l
C
u
s
t
o
m
F
i
e
l
d
s
B
y
P
t
y
p
e
I
d
(
$
p
t
y
p
e
_
i
d
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
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
t
e
 
=
 
'
'
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
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
 
a
s
 
$
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
o
r
m
f
i
e
l
d
n
a
m
e
 
=
 
$
f
[
 
'
f
i
e
l
d
n
a
m
e
'
 
]
.
'
_
'
.
$
f
[
 
'
u
i
d
'
 
]
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
t
m
p
b
o
o
k
i
n
g
[
 
$
f
o
r
m
f
i
e
l
d
n
a
m
e
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
t
e
 
.
=
 
$
f
[
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
]
.
'
 
'
.
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
t
m
p
b
o
o
k
i
n
g
[
 
$
f
o
r
m
f
i
e
l
d
n
a
m
e
 
]
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
c
o
m
p
_
n
o
t
e
s
 
(
`
c
o
n
t
r
a
c
t
_
u
i
d
`
,
`
n
o
t
e
`
,
`
t
i
m
e
s
t
a
m
p
`
,
`
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
`
)
 
V
A
L
U
E
S
 
(
'
"
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
,
'
"
.
$
n
o
t
e
.
"
'
,
'
$
d
t
'
,
'
"
.
(
i
n
t
)
 
$
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
.
"
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
i
n
s
e
r
t
B
o
o
k
i
n
g
E
v
e
n
t
V
a
l
u
e
s
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

