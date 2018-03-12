
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
1
6
0
0
0
p
a
r
t
n
e
r
s

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
o
u
t
p
u
t
 
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
o
u
t
p
u
t
[
'
T
I
T
L
E
'
]
 
=
 
'
O
u
r
 
P
a
r
t
n
e
r
s
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
I
N
T
R
O
'
]
 
=
 
'
H
e
r
e
 
y
o
u
 
c
a
n
 
f
i
n
d
 
a
 
l
i
s
t
 
o
f
 
o
u
r
 
p
a
r
t
n
e
r
s
.
 
T
h
e
s
e
 
a
r
e
 
b
u
s
i
n
e
s
s
e
s
 
w
h
o
 
a
l
s
o
 
o
f
f
e
r
 
p
l
u
g
i
n
s
 
f
o
r
 
J
o
m
r
e
s
,
 
e
x
t
r
a
 
t
o
 
t
h
o
s
e
 
a
l
r
e
a
d
y
 
a
v
a
i
l
a
b
l
e
 
i
n
 
t
h
e
 
J
o
m
r
e
s
 
P
l
u
g
i
n
 
M
a
n
a
g
e
r
.
'
;


 
 
 
 
 
 
 
 
$
p
a
r
t
n
e
r
s
 
[
'
j
o
m
r
e
s
_
p
l
u
g
i
n
s
'
]
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
'
n
a
m
e
'
 
=
>
 
'
J
o
m
r
e
s
 
P
l
u
g
i
n
s
'
,

 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
t
r
o
'
 
=
>
 
'
R
o
d
r
i
g
o
 
i
s
 
v
e
r
y
 
a
c
t
i
v
e
 
i
n
 
t
h
e
 
J
o
m
r
e
s
.
n
e
t
 
f
o
r
u
m
s
,
 
m
a
n
y
 
u
s
e
r
s
 
h
a
v
e
 
b
e
n
e
f
i
t
e
d
 
f
r
o
m
 
h
i
s
 
h
e
l
p
f
u
l
n
e
s
s
 
a
n
d
 
s
k
i
l
l
s
 
o
v
e
r
 
t
h
e
 
y
e
a
r
s
.
 
H
e
 
p
r
o
d
u
c
e
s
 
h
i
s
 
o
w
n
 
p
l
u
g
i
n
s
 
f
o
r
 
J
o
m
r
e
s
,
 
b
u
t
 
h
i
s
 
m
a
i
n
 
f
o
c
u
s
 
i
s
 
c
u
s
t
o
m
 
c
o
d
i
n
g
 
f
o
r
 
i
n
d
i
v
i
d
u
a
l
 
p
r
o
j
e
c
t
s
.
'
,

 
 
 
 
 
 
 
 
 
 
 
 
'
p
l
u
g
i
n
_
l
i
s
t
_
u
r
l
'
 
=
>
 
'
h
t
t
p
:
/
/
w
w
w
.
j
o
m
r
e
s
-
p
l
u
g
i
n
s
.
c
o
m
/
j
o
m
r
e
s
p
l
u
g
i
n
s
m
a
n
i
f
e
s
t
/
j
o
m
r
e
s
-
p
l
u
g
i
n
s
.
c
o
m
.
p
h
p
'
,

 
 
 
 
 
 
 
 
 
 
 
 
'
i
m
a
g
e
'
 
=
>
 
'
j
o
m
r
e
s
-
p
l
u
g
i
n
s
.
c
o
m
.
p
n
g
'
,

 
 
 
 
 
 
 
 
 
 
 
 
'
l
i
n
k
'
 
=
>
 
'
h
t
t
p
:
/
/
w
w
w
.
j
o
m
r
e
s
-
p
l
u
g
i
n
s
.
c
o
m
'
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
p
a
r
t
n
e
r
s
 
[
'
o
s
d
c
s
'
]
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
'
n
a
m
e
'
 
=
>
 
'
O
S
D
C
S
'
,

 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
t
r
o
'
 
=
>
 
'
R
o
b
e
r
t
 
a
n
d
 
V
i
n
c
e
 
g
o
 
b
a
c
k
 
a
l
m
o
s
t
 
t
o
 
t
h
e
 
b
e
g
i
n
n
i
n
g
 
o
f
 
J
o
o
m
l
a
,
 
a
n
d
 
O
S
D
C
S
 
n
o
w
 
h
a
v
e
 
4
6
 
g
a
t
e
w
a
y
s
 
p
l
u
g
i
n
s
 
f
o
r
 
J
o
m
r
e
s
.
'
,

 
 
 
 
 
 
 
 
 
 
 
 
'
p
l
u
g
i
n
_
l
i
s
t
_
u
r
l
'
 
=
>
 
'
h
t
t
p
:
/
/
w
w
w
.
j
o
o
m
l
a
-
p
a
y
m
e
n
t
-
g
a
t
e
w
a
y
s
.
o
s
d
c
s
.
c
o
m
/
o
s
d
c
s
.
c
o
m
.
p
h
p
'
,

 
 
 
 
 
 
 
 
 
 
 
 
'
i
m
a
g
e
'
 
=
>
 
'
o
s
d
c
s
.
c
o
m
.
p
n
g
'
,

 
 
 
 
 
 
 
 
 
 
 
 
'
l
i
n
k
'
 
=
>
 
'
h
t
t
p
:
/
/
w
w
w
.
j
o
o
m
l
a
-
p
a
y
m
e
n
t
-
g
a
t
e
w
a
y
s
.
o
s
d
c
s
.
c
o
m
/
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
d
i
g
i
s
t
o
r
e
&
c
o
n
t
r
o
l
l
e
r
=
d
i
g
i
s
t
o
r
e
P
r
o
d
u
c
t
s
&
t
a
s
k
=
l
i
s
t
&
c
i
d
=
2
&
I
t
e
m
i
d
=
5
'
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
p
a
r
t
n
e
r
_
d
a
t
a
 
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
l
i
e
n
t
 
=
 
n
e
w
 
G
u
z
z
l
e
H
t
t
p
\
C
l
i
e
n
t
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
p
a
r
t
n
e
r
s
 
a
s
 
$
k
e
y
 
=
>
 
$
p
)
 
{

	
	
	
$
u
r
l
 
=
 
$
p
[
'
p
l
u
g
i
n
_
l
i
s
t
_
u
r
l
'
]
;


	
	
	
l
o
g
g
i
n
g
:
:
l
o
g
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
S
t
a
r
t
i
n
g
 
g
u
z
z
l
e
 
c
a
l
l
 
t
o
 
'
.
$
u
r
l
,
 
'
G
u
z
z
l
e
'
,
 
'
D
E
B
U
G
'
)
;

	
	
	

	
	
	
t
r
y
 
{

	
	
	
	
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
c
l
i
e
n
t
-
>
r
e
q
u
e
s
t
(
'
G
E
T
'
,
 
$
u
r
l
)
-
>
g
e
t
B
o
d
y
(
)
-
>
g
e
t
C
o
n
t
e
n
t
s
(
)
;

	
	
	
}

	
	
	
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
{

	
	
	
	
/
/
d
o
 
n
o
t
h
i
n
g
,
 
m
o
v
e
 
o
n

	
	
	
}


	
	
	
$
p
a
r
t
n
e
r
_
p
l
u
g
i
n
s
 
=
 
j
s
o
n
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
p
o
n
s
e
,
 
t
r
u
e
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
p
a
r
t
n
e
r
_
p
l
u
g
i
n
s
)
)
 
{

	
	
	
	
$
p
a
r
t
n
e
r
_
d
a
t
a
[
$
k
e
y
]
 
=
 
$
p
;

	
	
	
	
$
p
a
r
t
n
e
r
_
d
a
t
a
[
$
k
e
y
]
[
'
i
d
'
]
 
=
 
$
k
e
y
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
p
a
r
t
n
e
r
_
p
l
u
g
i
n
s
 
a
s
 
$
p
l
u
g
i
n
)
 
{

	
	
	
	
	
$
p
a
r
t
n
e
r
_
d
a
t
a
[
$
k
e
y
]
[
'
p
l
u
g
i
n
s
'
]
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
n
a
m
e
'
 
=
>
 
j
o
m
r
e
s
_
s
a
n
i
t
i
s
e
_
s
t
r
i
n
g
(
$
p
l
u
g
i
n
[
'
n
a
m
e
'
]
)
,

	
	
	
	
	
	
'
i
m
a
g
e
'
 
=
>
 
j
o
m
r
e
s
_
s
a
n
i
t
i
s
e
_
s
t
r
i
n
g
(
$
p
l
u
g
i
n
[
'
i
m
a
g
e
'
]
)
,

	
	
	
	
	
	
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
 
=
>
 
n
l
2
b
r
(
j
o
m
r
e
s
_
s
a
n
i
t
i
s
e
_
s
t
r
i
n
g
(
$
p
l
u
g
i
n
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
)
)
,

	
	
	
	
	
	
'
p
u
r
c
h
a
s
e
_
u
r
l
'
 
=
>
 
j
o
m
r
e
s
_
s
a
n
i
t
i
s
e
_
s
t
r
i
n
g
(
$
p
l
u
g
i
n
[
'
p
u
r
c
h
a
s
e
_
u
r
l
'
]
)
,

	
	
	
	
	
	
'
d
e
m
o
'
 
=
>
 
j
o
m
r
e
s
_
s
a
n
i
t
i
s
e
_
s
t
r
i
n
g
(
$
p
l
u
g
i
n
[
'
d
e
m
o
'
]
)
,

	
	
	
	
	
	
)
;

	
	
	
	
}


	
	
	
	
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

	
	
	
	
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

	
	
	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
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
p
a
r
t
n
e
r
s
_
p
l
u
g
i
n
s
.
h
t
m
l
'
)
;

	
	
	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
s
u
b
_
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
r
t
n
e
r
_
d
a
t
a
[
$
k
e
y
]
[
'
p
l
u
g
i
n
s
'
]
)
;

	
	
	
	
$
p
a
r
t
n
e
r
_
d
a
t
a
[
$
k
e
y
]
[
'
p
l
u
g
i
n
s
'
]
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

	
	
	
}

	
	
}


	
	
$
p
a
g
e
o
u
t
p
u
t
 
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
p
a
g
e
o
u
t
p
u
t
[
]
 
=
 
$
o
u
t
p
u
t
;

	
	
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

	
	
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
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
p
a
r
t
n
e
r
s
.
h
t
m
l
'
)
;

	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
p
a
r
t
n
e
r
_
d
a
t
a
)
;

	
	
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
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

