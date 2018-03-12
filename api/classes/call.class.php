
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
a
l
l
s
 
a
 
r
e
m
o
t
e
 
A
P
I
 
w
h
e
n
 
h
a
n
d
e
d
 
a
 
R
E
S
T
 
A
P
I
 
s
e
t
 
o
f
 
o
p
t
i
o
n
s

 
*
 

 
*
 
@
t
o
d
o
 
T
e
s
t
 
a
n
d
 
c
o
n
f
i
r
m
 
i
t
 
i
s
 
s
t
i
l
l
 
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
.
 
C
o
n
v
e
r
t
 
t
o
 
u
s
e
 
G
u
z
z
l
e

 
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
 
c
a
l
l

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

 
 
 
 
}


	
/
*
*

	
*

	
*
 
C
a
l
l
s
 
t
h
e
 
r
e
m
o
t
e
 
s
e
r
v
e
r

	
*

	
*
/

 
 
 
 
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
 
c
a
l
l
_
s
e
r
v
e
r
(
$
o
p
t
i
o
n
s
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
o
p
t
i
o
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
,
 
n
o
 
r
e
q
u
e
s
t
 
e
l
e
m
e
n
t
s
 
s
e
t
 
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
s
e
r
v
e
r
 
=
 
$
o
p
t
i
o
n
s
[
'
s
e
r
v
e
r
'
]
;

 
 
 
 
 
 
 
 
$
t
o
k
e
n
 
=
 
$
o
p
t
i
o
n
s
[
'
t
o
k
e
n
'
]
[
'
a
c
c
e
s
s
_
t
o
k
e
n
'
]
;

 
 
 
 
 
 
 
 
$
m
e
t
h
o
d
 
=
 
$
o
p
t
i
o
n
s
[
'
m
e
t
h
o
d
'
]
;

 
 
 
 
 
 
 
 
$
r
e
q
u
e
s
t
 
=
 
$
o
p
t
i
o
n
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
'
]
;

 
 
 
 
 
 
 
 
$
d
a
t
a
 
=
 
$
o
p
t
i
o
n
s
[
'
d
a
t
a
'
]
;


 
 
 
 
 
 
 
 
$
c
h
 
=
 
c
u
r
l
_
i
n
i
t
(
$
s
e
r
v
e
r
.
$
r
e
q
u
e
s
t
)
;


 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
m
e
t
h
o
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
a
s
e
 
'
P
O
S
T
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
P
O
S
T
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
P
O
S
T
F
I
E
L
D
S
,
 
h
t
t
p
_
b
u
i
l
d
_
q
u
e
r
y
(
$
d
a
t
a
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
D
E
L
E
T
E
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
C
U
S
T
O
M
R
E
Q
U
E
S
T
,
 
'
D
E
L
E
T
E
'
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
P
U
T
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
C
U
S
T
O
M
R
E
Q
U
E
S
T
,
 
'
P
U
T
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
P
O
S
T
F
I
E
L
D
S
,
 
h
t
t
p
_
b
u
i
l
d
_
q
u
e
r
y
(
$
d
a
t
a
)
)
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
H
T
T
P
H
E
A
D
E
R
,
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
'
A
u
t
h
o
r
i
z
a
t
i
o
n
:
 
B
e
a
r
e
r
 
'
.
$
t
o
k
e
n
,

 
 
 
 
 
 
 
 
 
 
 
 
'
A
c
c
e
p
t
:
 
a
p
p
l
i
c
a
t
i
o
n
/
j
s
o
n
'
,

 
 
 
 
 
 
 
 
 
 
 
 
)
)
;


 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
I
N
F
O
_
H
E
A
D
E
R
_
O
U
T
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
T
I
M
E
O
U
T
,
 
3
0
)
;
 
/
/
t
i
m
e
o
u
t
 
a
f
t
e
r
 
3
0
 
s
e
c
o
n
d
s

 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
R
E
T
U
R
N
T
R
A
N
S
F
E
R
,
 
1
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
 
c
u
r
l
_
e
x
e
c
(
$
c
h
)
;

 
 
 
 
 
 
 
 
$
s
t
a
t
u
s
 
=
 
c
u
r
l
_
g
e
t
i
n
f
o
(
$
c
h
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
_
c
o
d
e
 
=
 
c
u
r
l
_
g
e
t
i
n
f
o
(
$
c
h
,
 
C
U
R
L
I
N
F
O
_
H
T
T
P
_
C
O
D
E
)
;

 
 
 
 
 
 
 
 
/
/
i
f
 
(
$
r
e
s
p
o
n
s
e
_
c
o
d
e
 
!
=
 
2
0
0
 
&
&
 
$
r
e
s
p
o
n
s
e
_
c
o
d
e
 
!
=
 
2
0
4
)


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(
'
r
e
s
u
l
t
'
 
=
>
 
$
r
e
s
u
l
t
,
 
'
s
t
a
t
u
s
'
 
=
>
 
$
s
t
a
t
u
s
)
;

 
 
 
 
}

}

