
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


/
*
*

 
*
 
S
e
a
r
c
h
 
c
l
a
s
s
 
a
n
d
 
s
u
p
p
o
r
t
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
s
.

 
*
/

c
l
a
s
s
 
j
o
m
S
e
a
r
c
h

{

 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
o
n
s
t
r
u
c
t
s
 
t
h
e
 
s
e
a
r
c
h
 
o
b
j
e
c
t
.

 
 
 
 
 
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
a
l
l
e
d
B
y
M
o
d
u
l
e
,
 
$
i
n
c
l
u
d
e
d
I
n
M
o
d
u
l
e
 
=
 
f
a
l
s
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
v
a
r
_
d
u
m
p
(
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
;

 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
A
l
l
 
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
S
E
A
R
C
H
_
A
L
L
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
S
E
A
R
C
H
_
A
L
L
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
t
h
i
s
-
>
f
o
r
m
n
a
m
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
a
r
c
h
A
l
l
 
=
 
$
s
e
a
r
c
h
A
l
l
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
i
l
t
e
r
 
=
 
a
r
r
a
y
(
'
p
r
o
p
e
r
t
y
n
a
m
e
'
 
=
>
 
'
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
 
=
>
 
'
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
 
=
>
 
'
'
,
 
'
t
o
w
n
'
 
=
>
 
'
'
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
 
'
'
,
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
=
>
 
'
'
,
 
'
a
r
r
i
v
a
l
'
 
=
>
 
'
'
,
 
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
'
 
=
>
 
'
'
,
 
'
p
t
y
p
e
'
 
=
>
 
'
'
,
 
'
c
a
t
_
i
d
'
 
=
>
 
'
'
,
 
'
r
o
o
m
_
t
y
p
e
'
 
=
>
 
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
m
a
k
e
F
o
r
m
N
a
m
e
(
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
c
a
l
l
e
d
B
y
M
o
d
u
l
e
)
 
|
|
 
e
m
p
t
y
(
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
l
e
d
B
y
M
o
d
u
l
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
R
E
Q
U
E
S
T
,
 
'
c
a
l
l
e
d
B
y
M
o
d
u
l
e
'
,
 
'
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
l
e
d
B
y
M
o
d
u
l
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
c
a
l
l
e
d
B
y
M
o
d
u
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
a
l
l
e
d
B
y
M
o
d
u
l
e
 
=
 
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
;


 
 
 
 
 
 
 
 
 
 
 
 
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
F
i
l
e
P
a
t
h
 
=
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
'
m
o
d
u
l
e
s
'
.
J
R
D
S
.
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
.
J
R
D
S
.
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
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
F
i
l
e
 
=
 
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
.
'
.
h
t
m
l
'
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
(
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
 
=
=
 
'
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
'
 
&
&
 
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
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
e
n
a
b
l
e
'
 
]
 
=
=
 
'
1
'
 
&
&
 
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
)
)
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
(
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
 
=
=
 
'
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
'
 
&
&
 
t
h
i
s
_
c
m
s
_
i
s
_
w
o
r
d
p
r
e
s
s
(
)
 
&
&
 
$
i
n
c
l
u
d
e
d
I
n
M
o
d
u
l
e
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
F
i
l
e
P
a
t
h
 
=
 
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
F
R
O
N
T
E
N
D
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
F
i
l
e
 
=
 
'
s
e
a
r
c
h
.
h
t
m
l
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
w
o
r
d
p
r
e
s
s
(
)
 
&
&
 
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
i
s
_
s
i
n
g
l
e
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
i
n
s
t
a
l
l
a
t
i
o
n
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
F
i
l
e
 
=
 
'
s
e
a
r
c
h
_
s
i
n
g
l
e
_
p
r
o
p
e
r
t
y
.
h
t
m
l
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
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
S
e
a
r
c
h
M
o
d
u
l
e
P
a
r
a
m
e
t
e
r
s
(
$
c
a
l
l
e
d
B
y
M
o
d
u
l
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
s
[
 
'
m
o
d
u
l
e
c
l
a
s
s
_
s
f
x
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
u
l
e
c
l
a
s
s
_
s
f
x
 
=
 
$
v
a
l
s
[
 
'
m
o
d
u
l
e
c
l
a
s
s
_
s
f
x
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
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
v
a
l
s
[
 
'
u
s
e
C
o
l
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
u
s
e
C
o
l
s
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
!
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
s
[
 
'
f
e
a
t
u
r
e
c
o
l
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
f
e
a
t
u
r
e
c
o
l
s
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
!
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
s
[
 
'
g
e
o
s
e
a
r
c
h
t
y
p
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
g
e
o
s
e
a
r
c
h
t
y
p
e
'
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
/
/
 
0
 
n
o
n
e
 
1
 
T
o
w
n
 
2
 
R
e
g
i
o
n
 
3
 
C
o
u
n
t
r
y

 
 
 
 
 
 
 
 
 
 
 
 
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
v
a
l
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
n
a
m
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
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
n
a
m
e
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
!
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
s
[
 
'
p
t
y
p
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
p
t
y
p
e
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
!
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
s
[
 
'
c
a
t
_
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
c
a
t
_
i
d
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
!
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
s
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
r
o
o
m
_
t
y
p
e
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
!
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
s
[
 
'
f
e
a
t
u
r
e
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
f
e
a
t
u
r
e
s
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
!
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
s
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
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
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
!
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
s
[
 
'
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
a
v
a
i
l
a
b
i
l
i
t
y
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
!
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
s
[
 
'
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
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
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
!
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
s
[
 
'
s
t
a
r
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
s
t
a
r
s
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
!
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
s
[
 
'
g
e
o
s
e
a
r
c
h
_
d
r
o
p
d
o
w
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
g
e
o
s
e
a
r
c
h
_
d
r
o
p
d
o
w
n
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
!
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
n
a
m
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
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
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
n
a
m
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
!
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
s
[
 
'
p
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
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
p
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
!
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
s
[
 
'
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
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
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
!
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
s
[
 
'
f
e
a
t
u
r
e
s
_
d
r
o
p
d
o
w
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
f
e
a
t
u
r
e
s
_
d
r
o
p
d
o
w
n
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
!
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
s
[
 
'
p
r
i
c
e
r
a
n
g
e
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
p
r
i
c
e
r
a
n
g
e
s
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

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
/
*
 

 
 
 
 
 
 
 
 
 
 
 
 
T
h
e
 
p
u
r
p
o
s
e
 
i
s
 
t
o
 
a
l
l
o
w
 
u
s
 
t
o
 
a
d
d
 
s
e
a
r
c
h
a
b
l
e
 
u
r
l
s
 
w
i
t
h
o
u
t
 
f
o
r
c
i
n
g
 
t
h
e
 
u
s
e
r
 
t
o
 
m
o
d
i
f
y
 
t
h
e
 
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
 
m
a
n
u
a
l
l
y
.


 
 
 
 
 
 
 
 
 
 
 
 
B
i
t
 
o
f
 
a
 
h
a
c
k
,
 
b
u
t
 
t
h
i
s
 
c
l
a
s
s
 
i
s
 
s
o
 
o
l
d
 
b
u
t
 
y
e
t
 
r
o
b
u
s
t
,
 
I
 
c
a
n
'
t
 
s
e
e
 
i
t
 
c
h
a
n
g
i
n
g
 
n
o
w
.

 
 
 
 
 
 
 
 
 
 
 
 
T
h
e
 
c
a
l
l
e
d
 
b
y
 
m
o
d
u
l
e
 
m
0
 
i
s
 
s
u
p
p
o
s
e
d
 
t
o
 
b
e
 
s
e
t
 
i
n
 
S
i
t
e
 
C
o
n
f
i
g
 
i
n
t
e
g
r
a
t
e
d
 
s
e
a
r
c
h
,
 
w
h
i
c
h
 
w
a
s
 
o
r
i
g
i
n
a
l
l
y
 
d
e
s
i
g
n
e
d
 
t
o
 
o
f
f
e
r
 
a
 
s
e
a
r
c
h
 
"
m
o
d
u
l
e
"
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
 
l
i
s
t
 
p
a
g
e
.
 
T
h
a
t
 
w
a
s
 
a
b
a
n
d
o
n
e
d
 
a
t
 
s
o
m
e
 
p
o
i
n
t

 
 
 
 
 
 
 
 
 
 
 
 
h
o
w
e
v
e
r
 
t
h
e
 
m
0
 
t
a
g
e
 
w
a
s
n
'
t
.
 
U
n
f
o
r
t
u
n
a
t
e
l
y
,
 
t
h
e
 
v
a
r
i
o
u
s
 
s
e
t
t
i
n
g
s
 
i
n
 
s
i
t
e
 
c
o
n
f
i
g
 
a
r
e
 
n
o
w
 
m
i
s
s
i
n
g
,
 
s
o
 
i
t
'
s
 
n
o
t
 
p
o
s
s
i
b
l
e
 
t
o
 
c
o
n
f
i
g
u
r
a
t
i
o
n
a
l
l
y
 
e
n
a
b
l
e
 
t
h
e
m
 
(
 
a
n
d
 
t
h
a
t
'
s
 
a
 
g
o
o
d
 
t
h
i
n
g
,
 
l
e
s
s
 
o
p
t
i
o
n
s
 
=
 
l
e
s
s
 
c
o
n
f
u
s
i
o
n
)
,
 
s
o
 
i
n
s
t
e
a
d
 
w
e
'
l
l
 
d
o
 
t
h
a
t
 
h
e
r
e
.

 
 
 
 
 
 
 
 
 
 
 
 
T
h
i
s
 
*
s
o
l
e
y
*
 
e
n
a
b
l
e
s
 
s
e
a
r
c
h
i
n
g
 
o
n
 
v
a
r
i
o
u
s
 
a
r
r
a
y
s
,
 
*
i
f
*
 
t
h
e
y
'
r
e
 
p
o
p
u
l
a
t
e
d
.
 
I
t
 
w
i
l
l
 
i
n
e
v
i
t
a
b
l
y
 
a
d
d
 
s
o
m
e
 
q
u
e
r
i
e
s
,
 
b
u
t
 
o
n
l
y
 
i
f
 
c
a
l
l
e
d
b
y
m
o
d
u
l
e
 
i
s
 
s
e
t
 
t
o
 
m
0


 
 
 
 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
 
=
=
 
'
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
'
 
&
&
 
!
t
h
i
s
_
c
m
s
_
i
s
_
w
o
r
d
p
r
e
s
s
(
)
 
)
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
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
n
a
m
e
'
 
]
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
p
t
y
p
e
'
 
]
 
 
 
 
 
 
 
 
=
 
t
r
u
e
;

	
	
	
	
$
v
a
l
s
[
 
'
c
a
t
_
i
d
'
 
]
 
 
 
 
 
 
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
 
 
 
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
f
e
a
t
u
r
e
s
'
 
]
 
 
 
 
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
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
 
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
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
'
 
]
 
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
s
t
a
r
s
'
 
]
 
 
 
 
 
 
 
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
s
[
 
'
p
r
i
c
e
r
a
n
g
e
s
'
 
]
 
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
C
o
l
s
 
=
 
$
v
a
l
s
[
 
'
u
s
e
C
o
l
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
c
o
l
s
 
=
 
$
v
a
l
s
[
 
'
f
e
a
t
u
r
e
c
o
l
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
e
o
s
e
a
r
c
h
t
y
p
e
 
=
 
$
v
a
l
s
[
 
'
g
e
o
s
e
a
r
c
h
t
y
p
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
n
 
=
 
$
v
a
l
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
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
t
y
p
e
 
=
 
$
v
a
l
s
[
 
'
p
t
y
p
e
'
 
]
;

	
	
	
$
c
a
t
_
i
d
 
=
 
$
v
a
l
s
[
 
'
c
a
t
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
t
y
p
e
 
=
 
$
v
a
l
s
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
s
 
=
 
$
v
a
l
s
[
 
'
f
e
a
t
u
r
e
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
$
v
a
l
s
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
v
a
i
l
a
b
i
l
i
t
y
 
=
 
$
v
a
l
s
[
 
'
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
$
v
a
l
s
[
 
'
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
s
 
=
 
$
v
a
l
s
[
 
'
s
t
a
r
s
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
g
e
o
s
e
a
r
c
h
_
d
r
o
p
d
o
w
n
 
=
 
$
v
a
l
s
[
 
'
g
e
o
s
e
a
r
c
h
_
d
r
o
p
d
o
w
n
'
 
]
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
n
a
m
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
 
=
 
$
v
a
l
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
n
a
m
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
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
 
=
 
$
v
a
l
s
[
 
'
p
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
$
v
a
l
s
[
 
'
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
s
_
d
r
o
p
d
o
w
n
 
=
 
$
v
a
l
s
[
 
'
f
e
a
t
u
r
e
s
_
d
r
o
p
d
o
w
n
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
r
a
n
g
e
s
 
=
 
$
v
a
l
s
[
 
'
p
r
i
c
e
r
a
n
g
e
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
r
a
n
g
e
_
i
n
c
r
e
m
e
n
t
s
 
=
 
$
v
a
l
s
[
 
'
p
r
i
c
e
r
a
n
g
e
_
i
n
c
r
e
m
e
n
t
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
c
o
m
b
o
 
=
 
$
v
a
l
s
[
 
'
s
e
l
e
c
t
c
o
m
b
o
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
o
p
t
i
o
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
R
E
Q
U
E
S
T
,
 
'
o
p
t
i
o
n
'
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
f
e
a
t
u
r
e
c
o
l
s
 
=
 
$
f
e
a
t
u
r
e
c
o
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
c
o
l
s
 
=
 
$
u
s
e
C
o
l
s
;

 
 
 
 
 
 
 
 
/
/
$
t
h
i
s
-
>
o
v
e
r
l
i
b
L
a
b
l
e
s
=
$
u
s
e
o
v
e
r
l
i
b
L
a
b
e
l
s
;

 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
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
;

 
 
 
 
 
 
 
 
i
f
 
(
$
p
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
p
r
o
p
e
r
t
y
n
a
m
e
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
p
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
p
t
y
p
e
'
;

 
 
 
 
 
 
 
 
}

	
	
i
f
 
(
$
c
a
t
_
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
c
a
t
_
i
d
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
_
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
r
o
o
m
_
t
y
p
e
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
f
e
a
t
u
r
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
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
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
g
e
o
s
e
a
r
c
h
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
$
g
e
o
s
e
a
r
c
h
t
y
p
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
a
v
a
i
l
a
b
i
l
i
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
a
v
a
i
l
a
b
i
l
i
t
y
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
p
r
i
c
e
r
a
n
g
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
p
r
i
c
e
r
a
n
g
e
s
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
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
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
s
t
a
r
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
s
t
a
r
s
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
l
e
c
t
c
o
m
b
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
s
e
l
e
c
t
c
o
m
b
o
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
c
o
u
n
t
r
y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
r
e
g
i
o
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
[
 
]
 
=
 
'
t
o
w
n
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
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
'
p
r
o
p
e
r
t
y
n
a
m
e
'
 
=
>
 
'
d
r
o
p
d
o
w
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
 
=
>
 
'
d
r
o
p
d
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
 
=
>
 
'
d
r
o
p
d
o
w
n
'
,
 
'
t
o
w
n
'
 
=
>
 
'
d
r
o
p
d
o
w
n
'
,
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
=
>
 
'
d
r
o
p
d
o
w
n
'
,
 
'
p
t
y
p
e
'
 
=
>
 
'
d
r
o
p
d
o
w
n
'
,
 
'
c
a
t
_
i
d
'
 
=
>
 
'
d
r
o
p
d
o
w
n
'
,
 
'
r
o
o
m
_
t
y
p
e
'
 
=
>
 
'
d
r
o
p
d
o
w
n
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
$
g
e
o
s
e
a
r
c
h
_
d
r
o
p
d
o
w
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
u
t
p
u
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
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
u
t
p
u
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
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
u
t
p
u
t
[
 
'
t
o
w
n
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
$
p
r
o
p
e
r
t
y
n
a
m
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
u
t
p
u
t
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
n
a
m
e
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
$
p
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
u
t
p
u
t
[
 
'
p
t
y
p
e
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
$
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
u
t
p
u
t
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
$
f
e
a
t
u
r
e
s
_
d
r
o
p
d
o
w
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
u
t
p
u
t
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
 
=
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
u
t
p
u
t
 
=
 
$
s
e
a
r
c
h
O
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
h
i
s
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
s
_
u
i
d
[
 
]
 
=
 
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
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
e
s
_
i
n
_
s
y
s
t
e
m
'
)
;


 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
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
'
p
r
o
p
e
r
t
y
n
a
m
e
'
,
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
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

 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
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
a
l
l
_
p
r
o
p
e
r
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
a
l
l
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
u
i
d
s
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
e
s
 
=
 
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
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
e
s
_
i
n
_
s
y
s
t
e
m
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
e
s
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
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
s
_
u
i
d
,
p
u
b
l
i
s
h
e
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
p
r
o
p
e
r
t
y
s
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
n
u
m
b
e
r
O
f
P
r
o
p
e
r
t
i
e
s
I
n
S
y
s
t
e
m
 
=
 
c
o
u
n
t
(
$
r
e
s
u
l
t
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

	
	
	
	
	
$
a
l
l
_
p
r
o
p
e
r
t
i
e
s
[
 
]
 
=
 
$
r
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
s
_
u
i
d
;

	
	
	
	
	
i
f
 
(
$
r
-
>
p
u
b
l
i
s
h
e
d
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
	
$
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
e
s
[
 
]
 
=
 
$
r
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
s
_
u
i
d
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	
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
n
u
m
b
e
r
O
f
P
r
o
p
e
r
t
i
e
s
I
n
S
y
s
t
e
m
'
,
 
$
n
u
m
b
e
r
O
f
P
r
o
p
e
r
t
i
e
s
I
n
S
y
s
t
e
m
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
l
l
_
p
r
o
p
e
r
t
i
e
s
_
i
n
_
s
y
s
t
e
m
'
,
 
$
a
l
l
_
p
r
o
p
e
r
t
i
e
s
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
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
e
s
_
i
n
_
s
y
s
t
e
m
'
,
 
$
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
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
-
>
g
e
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
n
a
m
e
_
m
u
l
t
i
(
$
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
e
s
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
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
e
s
 
a
s
 
$
p
u
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
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
n
a
m
e
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
p
n
'
 
=
>
 
$
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
n
a
m
e
s
[
$
p
u
i
d
]
,
 
'
p
u
i
d
'
 
=
>
 
$
p
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
a
s
o
r
t
(
$
t
h
i
s
-
>
p
r
e
p
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
n
a
m
e
'
 
]
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
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
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
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
S
E
L
E
C
T
 
D
I
S
T
I
N
C
T
 
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
o
u
n
t
r
y
 
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
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
O
R
D
E
R
 
B
Y
 
 
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
o
u
n
t
r
y
 
A
S
C
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
c
t
i
v
e
C
o
u
n
t
r
i
e
s
L
i
s
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
t
m
p
C
o
u
n
t
r
y
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
t
m
p
C
o
u
n
t
r
y
A
r
r
a
y
[
 
]
 
=
 
$
t
h
i
s
-
>
s
e
a
r
c
h
A
l
l
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
c
t
i
v
e
C
o
u
n
t
r
i
e
s
L
i
s
t
 
a
s
 
$
c
o
u
n
t
r
y
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
c
o
u
n
t
r
y
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
c
o
u
n
t
r
y
,
 
$
t
m
p
C
o
u
n
t
r
y
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
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
[
 
g
e
t
S
i
m
p
l
e
C
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
c
o
u
n
t
r
y
)
 
]
 
=
 
a
r
r
a
y
(
'
c
o
u
n
t
r
y
c
o
d
e
'
 
=
>
 
$
c
o
u
n
t
r
y
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
c
o
u
n
t
r
y
,
 
'
c
o
u
n
t
r
y
n
a
m
e
'
 
=
>
 
g
e
t
S
i
m
p
l
e
C
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
c
o
u
n
t
r
y
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
C
o
u
n
t
r
y
A
r
r
a
y
[
 
]
 
=
 
$
c
o
u
n
t
r
y
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
c
o
u
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
k
s
o
r
t
(
$
t
h
i
s
-
>
p
r
e
p
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
;

 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
_
u
n
s
h
i
f
t
(
$
t
h
i
s
-
>
p
r
e
p
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
 
a
r
r
a
y
(
'
c
o
u
n
t
r
y
c
o
d
e
'
 
=
>
 
$
t
h
i
s
-
>
s
e
a
r
c
h
A
l
l
,
 
'
c
o
u
n
t
r
y
n
a
m
e
'
 
=
>
 
$
t
h
i
s
-
>
s
e
a
r
c
h
A
l
l
)
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
'
r
e
g
i
o
n
'
,
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
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
S
E
L
E
C
T
 
D
I
S
T
I
N
C
T
 
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
,
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
o
u
n
t
r
y
 
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
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
O
R
D
E
R
 
B
Y
 
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
 
A
S
C
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
c
t
i
v
e
R
e
g
i
o
n
s
L
i
s
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
t
m
p
R
e
g
i
o
n
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
t
h
i
s
-
>
p
r
e
p
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
r
e
g
i
o
n
'
 
=
>
 
$
t
h
i
s
-
>
s
e
a
r
c
h
A
l
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
R
e
g
i
o
n
A
r
r
a
y
[
 
]
 
=
 
$
t
h
i
s
-
>
s
e
a
r
c
h
A
l
l
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
c
t
i
v
e
R
e
g
i
o
n
s
L
i
s
t
 
a
s
 
$
r
e
g
i
o
n
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
r
e
g
i
o
n
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
r
e
g
i
o
n
,
 
$
t
m
p
R
e
g
i
o
n
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
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
r
e
g
i
o
n
'
 
=
>
 
f
i
n
d
_
r
e
g
i
o
n
_
n
a
m
e
(
$
r
e
g
i
o
n
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
r
e
g
i
o
n
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
R
e
g
i
o
n
A
r
r
a
y
[
 
]
 
=
 
f
i
n
d
_
r
e
g
i
o
n
_
n
a
m
e
(
$
r
e
g
i
o
n
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
r
e
g
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
R
e
g
i
o
n
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
_
u
n
i
q
u
e
(
$
t
m
p
R
e
g
i
o
n
A
r
r
a
y
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
'
t
o
w
n
'
,
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
r
e
s
u
l
t
=
p
r
e
p
G
e
o
g
r
a
p
h
i
c
S
e
a
r
c
h
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
 
D
I
S
T
I
N
C
T
 
(
C
A
S
E
 
W
H
E
N
 
(
a
.
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
b
.
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
 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
A
N
D
 
b
.
c
o
n
s
t
a
n
t
 
=
 
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
P
R
O
P
E
R
T
Y
_
T
O
W
N
'
 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
A
N
D
 
b
.
l
a
n
g
u
a
g
e
 
=
 
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
)
 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
T
H
E
N
 
b
.
c
u
s
t
o
m
t
e
x
t
 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
E
L
S
E
 
a
.
p
r
o
p
e
r
t
y
_
t
o
w
n
 

	
	
	
	
	
	
	
	
	
	
	
	
	
E
N
D
)
 
A
S
 
p
r
o
p
e
r
t
y
_
t
o
w
n
,

	
	
	
	
	
	
	
	
	
	
a
.
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
,

	
	
	
	
	
	
	
	
	
	
a
.
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
o
u
n
t
r
y
 

	
	
	
	
	
	
	
	
	
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
p
r
o
p
e
r
t
y
s
 
a

	
	
	
	
	
	
	
	
	
L
E
F
T
 
J
O
I
N
 
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
u
s
t
o
m
_
t
e
x
t
 
b
 
O
N
 
(
a
.
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
b
.
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
 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
A
N
D
 
b
.
c
o
n
s
t
a
n
t
 
=
 
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
P
R
O
P
E
R
T
Y
_
T
O
W
N
'
 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
A
N
D
 
b
.
l
a
n
g
u
a
g
e
 
=
 
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
)

	
	
	
	
	
	
	
	
	
W
H
E
R
E
 
a
.
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 

	
	
	
	
	
	
	
	
	
O
R
D
E
R
 
B
Y
 
p
r
o
p
e
r
t
y
_
t
o
w
n
 
A
S
C
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
c
t
i
v
e
T
o
w
n
L
i
s
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
t
m
p
T
o
w
n
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
t
h
i
s
-
>
p
r
e
p
[
 
'
t
o
w
n
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
t
o
w
n
'
 
=
>
 
$
t
h
i
s
-
>
s
e
a
r
c
h
A
l
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
w
n
 
=
 
$
t
h
i
s
-
>
s
e
a
r
c
h
A
l
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
n
a
m
e
 
=
 
$
t
h
i
s
-
>
s
e
a
r
c
h
A
l
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
n
a
m
e
 
=
 
$
t
h
i
s
-
>
s
e
a
r
c
h
A
l
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
R
e
g
i
o
n
A
r
r
a
y
[
 
]
 
=
 
$
t
h
i
s
-
>
s
e
a
r
c
h
A
l
l
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
c
t
i
v
e
T
o
w
n
L
i
s
t
 
a
s
 
$
t
o
w
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
 
=
 
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
t
o
w
n
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
t
o
w
n
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
t
o
w
n
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
t
o
w
n
'
 
]
[
 
$
t
 
]
 
=
 
a
r
r
a
y
(
'
t
o
w
n
'
 
=
>
 
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
t
o
w
n
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
t
o
w
n
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
/
/
 
C
u
r
r
e
n
t
l
y
 
r
e
t
u
r
n
s
 
a
n
 
e
m
p
t
y
 
a
r
r
a
y

 
 
 
 
 
 
 
 
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
,
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
)
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
 
p
r
e
p
D
e
s
c
r
i
p
t
i
v
e
S
e
a
r
c
h
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
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
'
a
v
a
i
l
a
b
i
l
i
t
y
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
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
 
p
r
e
p
A
v
a
i
l
a
b
i
l
i
t
y
S
e
a
r
c
h
(
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
r
e
s
u
l
t
[
 
'
a
r
r
i
v
a
l
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
a
r
r
i
v
a
l
'
 
]
 
=
 
$
r
e
s
u
l
t
[
 
'
a
r
r
i
v
a
l
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
t
h
i
s
-
>
p
r
e
p
[
 
'
a
r
r
i
v
a
l
'
 
]
 
=
 
'
'
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
s
u
l
t
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
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
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
'
 
]
 
=
 
$
r
e
s
u
l
t
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
t
h
i
s
-
>
p
r
e
p
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
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
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
'
f
e
a
t
u
r
e
_
u
i
d
s
'
,
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
)
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
 
p
r
e
p
F
e
a
t
u
r
e
S
e
a
r
c
h
(
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
r
e
s
u
l
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
r
e
s
u
l
t
 
a
s
 
$
f
e
a
t
u
r
e
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
f
e
a
t
u
r
e
[
 
'
t
i
t
l
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
f
e
a
t
u
r
e
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
i
d
'
 
=
>
 
$
f
e
a
t
u
r
e
[
 
'
i
d
'
 
]
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
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
'
p
f
e
a
t
u
r
e
s
/
'
.
$
f
e
a
t
u
r
e
[
 
'
i
m
a
g
e
'
 
]
,
 
'
t
i
t
l
e
'
 
=
>
 
$
f
e
a
t
u
r
e
[
 
'
t
i
t
l
e
'
 
]
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
 
$
f
e
a
t
u
r
e
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
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
'
r
o
o
m
_
t
y
p
e
'
,
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
)
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
 
p
r
e
p
R
o
o
m
t
y
p
e
S
e
a
r
c
h
(
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
r
e
s
u
l
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
t
y
p
e
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
r
t
y
p
e
[
 
'
i
d
'
 
]
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
r
t
y
p
e
[
 
'
t
i
t
l
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
r
t
y
p
e
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
i
d
'
 
=
>
 
$
r
t
y
p
e
[
 
'
i
d
'
 
]
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
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
'
r
m
t
y
p
e
s
/
'
.
$
r
t
y
p
e
[
 
'
i
m
a
g
e
'
 
]
,
 
'
t
i
t
l
e
'
 
=
>
 
$
r
t
y
p
e
[
 
'
t
i
t
l
e
'
 
]
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
 
$
r
t
y
p
e
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
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
'
p
t
y
p
e
'
,
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
)
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
 
p
r
e
p
P
r
o
p
e
r
t
y
T
y
p
e
S
e
a
r
c
h
(
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
r
e
s
u
l
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
r
e
s
u
l
t
 
a
s
 
$
p
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
p
t
y
p
e
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
i
d
'
 
=
>
 
$
p
t
y
p
e
[
 
'
i
d
'
 
]
,
 
'
p
t
y
p
e
'
 
=
>
 
$
p
t
y
p
e
[
 
'
p
t
y
p
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
t
y
p
e
[
'
i
d
'
]
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
p
t
y
p
e
[
'
p
t
y
p
e
'
]
)
 
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
t
h
i
s
-
>
p
r
e
p
[
'
p
t
y
p
e
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
i
d
'
=
>
$
p
t
y
p
e
[
'
i
d
'
]
 
,
'
p
t
y
p
e
'
=
>
$
p
t
y
p
e
[
'
p
t
y
p
e
'
]
,
'
n
u
m
b
e
r
'
=
>
$
p
t
y
p
e
[
'
n
u
m
b
e
r
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

	
	

	
	
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
'
c
a
t
_
i
d
'
,
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
)
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
 
p
r
e
p
P
r
o
p
e
r
t
y
C
a
t
e
g
o
r
i
e
s
S
e
a
r
c
h
(
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
r
e
s
u
l
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
r
e
s
u
l
t
 
a
s
 
$
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
c
a
t
e
g
o
r
i
e
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
i
d
'
 
=
>
 
$
c
[
 
'
i
d
'
 
]
,
 
'
t
i
t
l
e
'
 
=
>
 
$
c
[
 
'
t
i
t
l
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
t
y
p
e
[
'
i
d
'
]
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
p
t
y
p
e
[
'
p
t
y
p
e
'
]
)
 
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
t
h
i
s
-
>
p
r
e
p
[
'
p
t
y
p
e
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
i
d
'
=
>
$
p
t
y
p
e
[
'
i
d
'
]
 
,
'
p
t
y
p
e
'
=
>
$
p
t
y
p
e
[
'
p
t
y
p
e
'
]
,
'
n
u
m
b
e
r
'
=
>
$
p
t
y
p
e
[
'
n
u
m
b
e
r
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
'
p
r
i
c
e
r
a
n
g
e
s
'
,
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
)
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
 
p
r
e
p
P
r
i
c
e
R
a
n
g
e
S
e
a
r
c
h
(
$
p
r
i
c
e
r
a
n
g
e
_
i
n
c
r
e
m
e
n
t
s
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
r
e
s
u
l
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
p
r
i
c
e
r
a
n
g
e
s
'
 
]
[
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
'
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
'
,
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
)
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
 
p
r
e
p
G
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
S
e
a
r
c
h
(
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
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
A
l
l
 
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
S
E
A
R
C
H
_
A
L
L
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
S
E
A
R
C
H
_
A
L
L
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
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
i
d
'
 
=
>
 
0
,
 
'
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
'
 
=
>
 
$
s
e
a
r
c
h
A
l
l
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
e
s
u
l
t
 
a
s
 
$
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
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
i
d
'
 
=
>
 
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
n
u
m
b
e
r
,
 
'
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
'
 
=
>
 
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
i
n
_
a
r
r
a
y
(
'
s
t
a
r
s
'
,
 
$
t
h
i
s
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
A
l
l
 
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
S
E
A
R
C
H
_
A
L
L
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
S
E
A
R
C
H
_
A
L
L
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
s
t
a
r
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
i
d
'
 
=
>
 
0
,
 
'
s
t
a
r
s
'
 
=
>
 
$
s
e
a
r
c
h
A
l
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
s
t
a
r
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
i
d
'
 
=
>
 
1
,
 
'
s
t
a
r
s
'
 
=
>
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
s
t
a
r
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
i
d
'
 
=
>
 
2
,
 
'
s
t
a
r
s
'
 
=
>
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
s
t
a
r
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
i
d
'
 
=
>
 
3
,
 
'
s
t
a
r
s
'
 
=
>
 
3
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
s
t
a
r
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
i
d
'
 
=
>
 
4
,
 
'
s
t
a
r
s
'
 
=
>
 
4
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
p
[
 
'
s
t
a
r
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
i
d
'
 
=
>
 
5
,
 
'
s
t
a
r
s
'
 
=
>
 
5
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
T
r
i
g
g
e
r
s
 
t
h
e
 
l
i
s
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
s
 
m
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
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
s
h
o
w
r
e
s
u
l
t
s
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

 
 
 
 
 
 
 
 
$
t
m
p
R
e
s
u
l
t
s
A
r
r
a
y
 
=
 
e
n
d
(
$
t
h
i
s
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
s
_
u
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
t
m
p
R
e
s
u
l
t
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
p
r
o
p
e
r
t
y
s
_
u
i
d
'
 
]
 
=
 
$
t
m
p
R
e
s
u
l
t
s
A
r
r
a
y
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
1
0
0
4
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
 
o
p
t
i
o
n
a
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
1
0
0
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
 
o
p
t
i
o
n
a
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
1
0
0
6
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
 
o
p
t
i
o
n
a
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
1
0
0
7
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
 
o
p
t
i
o
n
a
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
1
0
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
 
l
i
s
t
P
r
o
p
e
r
t
y
s

 
 
 
 
 
 
 
 
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
N
O
R
E
S
U
L
T
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
F
R
O
N
T
_
N
O
R
E
S
U
L
T
S
'
,
 
$
e
d
i
t
a
b
l
e
 
=
 
t
r
u
e
,
 
$
i
s
l
i
n
k
 
=
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
l
i
s
t
P
r
o
p
e
r
t
y
s
(
$
t
m
p
R
e
s
u
l
t
s
A
r
r
a
y
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
o
r
t
s
 
t
h
e
 
s
e
a
r
c
h
 
r
e
s
u
l
t
s
.

 
 
 
 
 
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
 
s
o
r
t
R
e
s
u
l
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
t
 
a
s
 
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
 
$
r
e
s
u
l
t
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
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

	
	

	
	
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
_
u
n
i
q
u
e
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
;


 
 
 
 
 
 
 
 
$
t
h
i
s
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
s
_
u
i
d
[
 
]
 
=
 
$
t
m
p
A
r
r
a
y
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
r
a
n
d
o
m
 
s
e
a
r
c
h
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
r
a
n
d
o
m
(
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
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
e
s
 
=
 
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
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
e
s
_
i
n
_
s
y
s
t
e
m
'
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
a
l
l
_
p
u
b
l
i
s
h
e
d
_
p
r
o
p
e
r
t
i
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
o
b
j
 
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
o
b
j
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
s
_
u
i
d
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
[
 
]
 
=
 
$
o
b
j
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
t
 
=
 
$
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
e
a
r
c
h
 
b
a
s
e
d
 
o
n
 
c
o
u
n
t
r
y
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
c
o
u
n
t
r
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
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
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
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
i
l
t
e
r
)
 
&
&
 
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
o
r
s
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
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
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
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
A
N
D
 
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
o
u
n
t
r
y
 
L
I
K
E
 
'
$
f
i
l
t
e
r
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
o
r
s
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
e
a
r
c
h
 
b
a
s
e
d
 
o
n
 
r
e
g
i
o
n
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
r
e
g
i
o
n
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
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
h
i
s
-
>
f
i
l
t
e
r
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
 
&
&
 
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
o
r
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
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
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
t
e
r
 
!
=
 
'
%
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
f
i
l
t
e
r
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
s
t
r
i
n
g
U
R
L
S
a
f
e
(
$
t
h
i
s
-
>
f
i
l
t
e
r
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
_
i
d
 
=
 
f
i
n
d
_
r
e
g
i
o
n
_
i
d
(
$
t
h
i
s
-
>
f
i
l
t
e
r
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
n
u
l
l
(
$
r
e
g
i
o
n
_
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
i
l
t
e
r
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
 
.
=
 
"
'
 
O
R
 
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
 
=
 
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
g
i
o
n
_
i
d
.
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
i
l
t
e
r
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
 
.
=
 
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
i
l
t
e
r
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
'
-
'
,
 
'
%
'
,
 
$
t
h
i
s
-
>
f
i
l
t
e
r
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
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
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
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
 
L
I
K
E
 
'
"
.
$
t
h
i
s
-
>
f
i
l
t
e
r
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
.
"
 
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
o
r
s
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
e
a
r
c
h
 
b
a
s
e
d
 
o
n
 
c
i
t
y
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
t
o
w
n
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
[
 
'
t
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
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
i
l
t
e
r
)
 
&
&
 
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
o
r
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
t
e
r
 
!
=
 
'
%
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
t
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
s
t
r
i
n
g
U
R
L
S
a
f
e
(
$
f
i
l
t
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
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
'
-
'
,
 
'
%
'
,
 
$
f
i
l
t
e
r
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
S
E
L
E
C
T
 
a
.
p
r
o
p
e
r
t
y
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
p
r
o
p
e
r
t
y
s
 
a

	
	
	
	
	
	
	
	
	
	
L
E
F
T
 
J
O
I
N
 
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
u
s
t
o
m
_
t
e
x
t
 
b
 
O
N
 
(

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
a
.
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
b
.
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
 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
A
N
D
 
b
.
c
o
n
s
t
a
n
t
 
=
 
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
P
R
O
P
E
R
T
Y
_
T
O
W
N
'
 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
A
N
D
 
b
.
l
a
n
g
u
a
g
e
 
=
 
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

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
)

	
	
	
	
	
	
	
	
	
	
W
H
E
R
E
 
a
.
p
u
b
l
i
s
h
e
d
 
=
 
1
 
 

	
	
	
	
	
	
	
	
	
	
	
A
N
D
 
(
 
a
.
p
r
o
p
e
r
t
y
_
t
o
w
n
 
L
I
K
E
 
'
$
f
i
l
t
e
r
'
 
O
R
 
b
.
c
u
s
t
o
m
t
e
x
t
 
L
I
K
E
 
'
$
f
i
l
t
e
r
'
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
o
r
s
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
e
a
r
c
h
 
b
a
s
e
d
 
o
n
 
t
e
x
t
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
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
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
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
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
;

 
 
 
 
 
 
 
 
$
l
a
n
g
 
=
 
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
i
l
t
e
r
)
 
&
&
 
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
o
r
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
k
e
y
w
o
r
d
s
 
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
l
t
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
o
r
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
 
'
,
 
$
k
e
y
w
o
r
d
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
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

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
w
o
r
d
s
 
a
s
 
$
w
o
r
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
 
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
w
h
e
r
e
s
2
[
 
]
 
=
 
"
L
O
W
E
R
(
p
r
o
p
e
r
t
y
_
n
a
m
e
)
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
L
O
W
E
R
(
p
r
o
p
e
r
t
y
_
s
t
r
e
e
t
)
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
L
O
W
E
R
(
p
r
o
p
e
r
t
y
_
t
o
w
n
)
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
L
O
W
E
R
(
p
r
o
p
e
r
t
y
_
p
o
s
t
c
o
d
e
)
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
L
O
W
E
R
(
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
s
c
r
i
p
t
i
o
n
)
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
L
O
W
E
R
(
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
h
e
c
k
i
n
_
t
i
m
e
s
)
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
L
O
W
E
R
(
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
)
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
L
O
W
E
R
(
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
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
)
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
L
O
W
E
R
(
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
)
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
L
O
W
E
R
(
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
)
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
L
O
W
E
R
(
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
)
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
[
 
]
 
=
 
i
m
p
l
o
d
e
(
'
 
O
R
 
'
,
 
$
w
h
e
r
e
s
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
 
=
 
'
(
'
.
i
m
p
l
o
d
e
(
(
$
p
h
r
a
s
e
 
=
=
 
'
a
l
l
'
 
?
 
'
)
 
A
N
D
 
(
'
 
:
 
'
)
 
O
R
 
(
'
)
,
 
$
w
h
e
r
e
s
)
.
'
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
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
 
p
r
o
p
e
r
t
y
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
p
r
o
p
e
r
t
y
s
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
"
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
1
 
A
N
D
 
(
 
$
w
h
e
r
e
 
)
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
"
 
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
o
r
s
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
1
 
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
q
u
e
r
y
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
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

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
w
o
r
d
s
 
a
s
 
$
w
o
r
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
 
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
w
h
e
r
e
s
2
[
 
]
 
=
 
"
a
.
c
o
n
s
t
a
n
t
 
=
 
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
P
R
O
P
E
R
T
Y
_
N
A
M
E
'
 
A
N
D
 
L
O
W
E
R
(
a
.
c
u
s
t
o
m
t
e
x
t
)
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
 
A
N
D
 
a
.
l
a
n
g
u
a
g
e
 
=
 
'
$
l
a
n
g
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
a
.
c
o
n
s
t
a
n
t
 
=
 
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
P
R
O
P
E
R
T
Y
_
S
T
R
E
E
T
'
 
A
N
D
 
L
O
W
E
R
(
a
.
c
u
s
t
o
m
t
e
x
t
)
 
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
 
A
N
D
 
a
.
l
a
n
g
u
a
g
e
 
=
 
'
$
l
a
n
g
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
a
.
c
o
n
s
t
a
n
t
 
=
 
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
P
R
O
P
E
R
T
Y
_
T
O
W
N
'
 
A
N
D
 
L
O
W
E
R
(
a
.
c
u
s
t
o
m
t
e
x
t
)
 
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
 
A
N
D
 
a
.
l
a
n
g
u
a
g
e
 
=
 
'
$
l
a
n
g
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
a
.
c
o
n
s
t
a
n
t
 
=
 
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
P
R
O
P
E
R
T
Y
_
P
O
S
T
C
O
D
E
'
 
A
N
D
 
L
O
W
E
R
(
a
.
c
u
s
t
o
m
t
e
x
t
)
 
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
 
A
N
D
 
a
.
l
a
n
g
u
a
g
e
 
=
 
'
$
l
a
n
g
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
a
.
c
o
n
s
t
a
n
t
 
=
 
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
T
Y
P
E
_
D
E
S
C
R
I
P
T
I
O
N
'
 
A
N
D
 
L
O
W
E
R
(
a
.
c
u
s
t
o
m
t
e
x
t
)
 
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
 
A
N
D
 
a
.
l
a
n
g
u
a
g
e
 
=
 
'
$
l
a
n
g
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
a
.
c
o
n
s
t
a
n
t
 
=
 
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
T
Y
P
E
_
C
H
E
C
K
I
N
T
I
M
E
S
'
 
A
N
D
 
L
O
W
E
R
(
a
.
c
u
s
t
o
m
t
e
x
t
)
 
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
 
A
N
D
 
a
.
l
a
n
g
u
a
g
e
 
=
 
'
$
l
a
n
g
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
a
.
c
o
n
s
t
a
n
t
 
=
 
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
T
Y
P
E
_
A
R
E
A
A
C
T
I
V
I
T
I
E
S
'
 
A
N
D
 
L
O
W
E
R
(
a
.
c
u
s
t
o
m
t
e
x
t
)
 
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
 
A
N
D
 
a
.
l
a
n
g
u
a
g
e
 
=
 
'
$
l
a
n
g
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
a
.
c
o
n
s
t
a
n
t
 
=
 
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
T
Y
P
E
_
D
I
R
E
C
T
I
O
N
S
'
 
A
N
D
 
L
O
W
E
R
(
a
.
c
u
s
t
o
m
t
e
x
t
)
 
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
 
A
N
D
 
a
.
l
a
n
g
u
a
g
e
 
=
 
'
$
l
a
n
g
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
a
.
c
o
n
s
t
a
n
t
 
=
 
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
T
Y
P
E
_
A
I
R
P
O
R
T
S
'
 
A
N
D
 
L
O
W
E
R
(
a
.
c
u
s
t
o
m
t
e
x
t
)
 
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
 
A
N
D
 
a
.
l
a
n
g
u
a
g
e
 
=
 
'
$
l
a
n
g
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
a
.
c
o
n
s
t
a
n
t
 
=
 
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
T
Y
P
E
_
O
T
H
E
R
T
R
A
N
S
P
O
R
T
'
 
A
N
D
 
L
O
W
E
R
(
a
.
c
u
s
t
o
m
t
e
x
t
)
 
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
 
A
N
D
 
a
.
l
a
n
g
u
a
g
e
 
=
 
'
$
l
a
n
g
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
2
[
 
]
 
=
 
"
a
.
c
o
n
s
t
a
n
t
 
=
 
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
T
Y
P
E
_
D
I
S
C
L
A
I
M
E
R
S
'
 
A
N
D
 
L
O
W
E
R
(
a
.
c
u
s
t
o
m
t
e
x
t
)
 
 
L
I
K
E
 
'
%
$
w
o
r
d
%
'
 
A
N
D
 
a
.
l
a
n
g
u
a
g
e
 
=
 
'
$
l
a
n
g
'
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
s
[
 
]
 
=
 
i
m
p
l
o
d
e
(
'
 
O
R
 
'
,
 
$
w
h
e
r
e
s
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
w
h
e
r
e
 
=
 
'
(
'
.
i
m
p
l
o
d
e
(
(
$
p
h
r
a
s
e
 
=
=
 
'
a
l
l
'
 
?
 
'
)
 
A
N
D
 
(
'
 
:
 
'
)
 
O
R
 
(
'
)
,
 
$
w
h
e
r
e
s
)
.
'
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
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
 
a
.
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
c
u
s
t
o
m
_
t
e
x
t
 
a
,
 
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
r
o
p
e
r
t
y
s
 
b
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
"
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
1
 
A
N
D
 
(
 
$
w
h
e
r
e
 
)
 
A
N
D
 
(
 
a
.
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
 
b
.
p
r
o
p
e
r
t
y
s
_
u
i
d
 
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
"
 
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
o
r
s
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
2
 
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
e
s
u
l
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


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
t
1
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
s
e
t
1
 
a
s
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
b
j
 
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
v
 
=
 
$
v
a
l
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
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
b
j
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
s
_
u
i
d
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
[
 
]
 
=
 
$
o
b
j
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
t
2
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
s
e
t
2
 
a
s
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
b
j
 
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
v
 
=
 
$
v
a
l
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
o
b
j
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
s
_
u
i
d
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
[
 
]
 
=
 
$
o
b
j
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
t
 
=
 
$
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}


 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
p
r
o
p
e
r
t
y
n
a
m
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
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
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
;

 
 
 
 
 
 
 
 
$
l
a
n
g
 
=
 
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
i
l
t
e
r
)
 
&
&
 
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
o
r
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
k
e
y
w
o
r
d
s
 
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
l
t
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
 
p
r
o
p
e
r
t
y
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
p
r
o
p
e
r
t
y
s
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
"
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
n
a
m
e
 
L
I
K
E
 
'
%
$
k
e
y
w
o
r
d
s
%
'
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
1
 
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
 
a
.
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
c
u
s
t
o
m
_
t
e
x
t
 
a
,
 
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
r
o
p
e
r
t
y
s
 
b
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
"
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
n
a
m
e
 
L
I
K
E
 
'
%
$
k
e
y
w
o
r
d
s
%
'
 
A
N
D
 
a
.
l
a
n
g
u
a
g
e
 
=
 
$
l
a
n
g
 
A
N
D
 
(
 
a
.
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
 
b
.
p
r
o
p
e
r
t
y
s
_
u
i
d
 
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
2
 
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
e
s
u
l
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


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
t
1
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
s
e
t
1
 
a
s
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
b
j
 
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
v
 
=
 
$
v
a
l
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
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
b
j
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
s
_
u
i
d
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
[
 
]
 
=
 
$
o
b
j
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
t
2
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
s
e
t
2
 
a
s
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
b
j
 
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
v
 
=
 
$
v
a
l
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
o
b
j
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
s
_
u
i
d
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
[
 
]
 
=
 
$
o
b
j
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
t
 
=
 
$
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
e
a
r
c
h
 
b
a
s
e
d
 
o
n
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
f
e
a
t
u
r
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
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
f
i
l
t
e
r
[
 
0
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
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
i
l
t
e
r
)
 
&
&
 
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
o
r
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
s
 
=
 
$
f
i
l
t
e
r
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
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
 
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
i
d
s
 
a
s
 
$
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
 
.
=
 
"
'
%
,
"
.
$
i
d
.
"
,
%
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
 
L
I
K
E
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
 
=
 
s
u
b
s
t
r
(
$
s
t
,
 
0
,
 
-
2
8
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
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
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
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
 
L
I
K
E
 
$
s
t
 
 
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
o
r
s
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
e
a
r
c
h
 
b
a
s
e
d
 
o
n
 
r
o
o
m
 
t
y
p
e
s
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
r
o
o
m
t
y
p
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
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
i
l
t
e
r
)
 
&
&
 
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
o
r
s
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
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
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
 
L
I
K
E
 
'
$
f
i
l
t
e
r
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
o
r
s
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
e
a
r
c
h
 
b
a
s
e
d
 
o
n
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
p
t
y
p
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
[
 
'
p
t
y
p
e
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
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
i
l
t
e
r
)
 
&
&
 
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
o
r
s
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
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
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
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
A
N
D
 
p
t
y
p
e
_
i
d
 
L
I
K
E
 
'
$
f
i
l
t
e
r
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
o
r
s
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
v
a
r
_
d
u
m
p
(
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
t
)
;
e
x
i
t
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}

	

	
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
e
a
r
c
h
 
b
a
s
e
d
 
o
n
 
p
r
o
p
e
r
t
y
 
c
a
t
e
g
o
r
y
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
c
a
t
e
g
o
r
i
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
[
 
'
c
a
t
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
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
i
l
t
e
r
)
 
&
&
 
$
f
i
l
t
e
r
 
>
 
0
 
&
&
 
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
o
r
s
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
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
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
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
A
N
D
 
c
a
t
_
i
d
 
=
 
$
f
i
l
t
e
r
 
 
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
o
r
s
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
v
a
r
_
d
u
m
p
(
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
t
)
;
e
x
i
t
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
e
a
r
c
h
 
b
a
s
e
d
 
o
n
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
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
(
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
a
r
c
h
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
a
r
c
h
'
 
]
 
=
 
'
e
q
u
a
l
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
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
a
r
c
h
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
l
e
s
s
t
h
a
n
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
<
=
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
e
q
u
a
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
=
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
g
r
e
a
t
e
r
t
h
a
n
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
>
=
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
(
i
n
t
)
 
$
t
h
i
s
-
>
f
i
l
t
e
r
[
 
'
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
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
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
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
;

	
	
$
r
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
i
l
t
e
r
)
 
&
&
 
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
o
r
s
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
S
E
L
E
C
T
 
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
a
t
e
s
 
W
H
E
R
E
 
m
a
x
p
e
o
p
l
e
 
'
.
$
c
l
a
u
s
e
.
'
 
'
.
$
f
i
l
t
e
r
.
'
 
'
.
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
o
r
s
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

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
W
e
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
a
 
n
e
w
 
r
e
s
u
l
t
 
a
r
r
a
y
 
w
i
t
h
 
c
l
a
s
s
e
s
 
c
a
l
l
e
d
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
i
n
,
 
c
o
s
 
t
h
a
t
'
s
 
w
h
a
t
 
r
e
s
u
l
t
B
u
c
k
e
t
 
n
e
e
d
s
.
 
A
n
n
o
y
i
n
g
 
f
i
d
d
l
y
 
s
t
u
f
f
 
b
e
c
a
u
s
e
 
w
e
'
v
e
 
n
o
t
 
c
o
n
s
i
s
t
e
n
t
l
y
 
n
a
m
e
d
 
t
h
e
 
p
r
o
p
e
r
t
y
 
u
i
d
s
 
c
o
l
u
m
n
 
i
n
 
v
a
r
i
o
u
s
 
t
a
b
l
e
s
,
 
b
u
t
 
t
h
e
r
e
 
y
o
u
 
h
a
v
e
 
i
t
.
 
I
t
'
s
 
n
o
t
 
g
o
i
n
g
 
t
o
 
c
h
a
n
g
e
 
n
o
w
.

 
 
 
 
 
 
 
 
 
 
 
 
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

	
	
	
	
$
r
e
s
u
l
t
O
b
j
 
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
r
e
s
u
l
t
O
b
j
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
s
_
u
i
d
 
=
 
$
r
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
r
e
s
u
l
t
O
b
j
,
 
$
r
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
[
 
]
 
=
 
$
r
e
s
u
l
t
O
b
j
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
t
 
=
 
$
r
e
s
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
e
a
r
c
h
 
b
a
s
e
d
 
o
n
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
s
t
a
r
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
(
i
n
t
)
 
$
t
h
i
s
-
>
f
i
l
t
e
r
[
 
'
s
t
a
r
s
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
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
i
l
t
e
r
)
 
&
&
 
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
o
r
s
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
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
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
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
s
t
a
r
s
 
L
I
K
E
 
'
$
f
i
l
t
e
r
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
o
r
s
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
e
a
r
c
h
 
b
a
s
e
d
 
o
n
 
p
r
i
c
e
 
r
a
n
g
e
s
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
p
r
i
c
e
r
a
n
g
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
 
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
[
 
'
p
r
i
c
e
r
a
n
g
e
s
'
 
]
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
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
i
l
t
e
r
)
 
&
&
 
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
o
r
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
t
e
r
 
!
=
 
'
%
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
o
r
s
 
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
'
p
r
o
p
e
r
t
y
s
_
u
i
d
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
'
,
 
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
o
r
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
e
t
 
a
r
r
i
v
a
l
 
d
a
t
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
d
a
t
e
(
'
Y
/
m
/
d
'
)
.
'
+
1
 
d
a
y
'
)
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
_
R
E
Q
U
E
S
T
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
)
 
&
&
 
$
_
R
E
Q
U
E
S
T
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
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
'
)
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
s
e
a
r
c
h
_
d
a
t
a
)
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
)
 
&
&
 
t
r
i
m
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
)
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
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
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
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
'
]
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
)
 
&
&
 
t
r
i
m
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
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
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
'
]
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
 
!
=
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
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
'
]
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
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
"
A
N
D
 
D
A
T
E
_
F
O
R
M
A
T
(
'
"
.
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
.
"
'
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
B
E
T
W
E
E
N
 
D
A
T
E
_
F
O
R
M
A
T
(
`
v
a
l
i
d
f
r
o
m
`
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
A
N
D
 
D
A
T
E
_
F
O
R
M
A
T
(
`
v
a
l
i
d
t
o
`
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
"
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
i
l
t
e
r
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
 
'
S
E
L
E
C
T
 
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
a
t
e
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
r
a
t
e
p
e
r
d
a
y
 
>
=
 
'
.
$
f
i
l
t
e
r
[
 
'
f
r
o
m
'
 
]
.
'
 
A
N
D
 
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
<
=
 
'
.
$
f
i
l
t
e
r
[
 
'
t
o
'
 
]
.
"
 
$
c
l
a
u
s
e
 
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
o
r
s
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
a
t
e
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
r
a
t
e
p
e
r
d
a
y
 
L
I
K
E
 
'
%
'
 
$
c
l
a
u
s
e
 
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
o
r
s
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
i
l
t
e
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
o
r
s
 
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
s
_
u
i
d
'
,
 
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
o
r
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
p
r
o
p
e
r
t
y
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
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
k
e
y
 
>
=
 
'
.
$
f
i
l
t
e
r
[
 
'
f
r
o
m
'
 
]
.
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
k
e
y
 
<
=
 
'
.
$
f
i
l
t
e
r
[
 
'
t
o
'
 
]
.
"
 
 
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
o
r
s
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
2
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
W
e
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
a
 
n
e
w
 
r
e
s
u
l
t
 
a
r
r
a
y
 
w
i
t
h
 
c
l
a
s
s
e
s
 
c
a
l
l
e
d
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
i
n
,
 
c
o
s
 
t
h
a
t
'
s
 
w
h
a
t
 
r
e
s
u
l
t
B
u
c
k
e
t
 
n
e
e
d
s
.
 
A
n
n
o
y
i
n
g
 
f
i
d
d
l
y
 
s
t
u
f
f
 
b
e
c
a
u
s
e
 
w
e
'
v
e
 
n
o
t
 
c
o
n
s
i
s
t
e
n
t
l
y
 
n
a
m
e
d
 
t
h
e
 
p
r
o
p
e
r
t
y
 
u
i
d
s
 
c
o
l
u
m
n
 
i
n
 
v
a
r
i
o
u
s
 
t
a
b
l
e
s
,
 
b
u
t
 
t
h
e
r
e
 
y
o
u
 
h
a
v
e
 
i
t
.
 
I
t
'
s
 
n
o
t
 
g
o
i
n
g
 
t
o
 
c
h
a
n
g
e
 
n
o
w
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
O
b
j
 
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
r
e
s
u
l
t
O
b
j
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
s
_
u
i
d
 
=
 
$
r
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
r
e
s
u
l
t
O
b
j
,
 
$
r
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
[
 
]
 
=
 
$
r
e
s
u
l
t
O
b
j
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
r
e
s
u
l
t
2
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
r
e
s
u
l
t
2
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
O
b
j
 
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
r
e
s
u
l
t
O
b
j
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
s
_
u
i
d
 
=
 
$
r
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
s
_
u
i
d
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
r
e
s
u
l
t
O
b
j
,
 
$
r
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
[
 
]
 
=
 
$
r
e
s
u
l
t
O
b
j
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
t
 
=
 
$
r
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
s
 
=
 
e
n
d
(
$
t
h
i
s
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
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
i
d
s
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
O
b
j
 
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
r
e
s
u
l
t
O
b
j
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
s
_
u
i
d
 
=
 
$
r
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
r
e
s
u
l
t
O
b
j
,
 
$
r
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
[
 
]
 
=
 
$
r
e
s
u
l
t
O
b
j
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
t
 
=
 
$
r
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
/
/
v
a
r
_
d
u
m
p
(
$
t
h
i
s
-
>
r
e
s
u
l
t
B
u
c
k
e
t
)
;
e
x
i
t
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
o
r
t
R
e
s
u
l
t
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
P
e
r
f
o
r
m
s
 
a
 
s
e
a
r
c
h
 
b
a
s
e
d
 
o
n
 
a
v
a
i
l
a
b
i
l
i
t
y
.

 
 
 
 
 
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
 
j
o
m
S
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
a
l
l
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
r
o
o
m
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
a
l
l
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
b
o
o
k
i
n
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
h
i
s
-
>
f
i
l
t
e
r
[
 
'
a
r
r
i
v
a
l
'
 
]
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
h
i
s
-
>
f
i
l
t
e
r
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
'
 
]
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
k
e
O
r
s
(
)
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
o
r
s
 
=
 
$
t
h
i
s
-
>
o
r
s
;


 
 
 
 
 
 
 
 
i
f
 
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
 
!
=
 
'
'
 
&
&
 
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
 
!
=
 
'
'
 
&
&
 
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
o
r
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
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
 
=
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
y
D
a
y
s
 
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
t
a
y
D
a
y
s
 
=
 
d
a
t
e
D
i
f
f
(
'
d
'
,
 
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
,
 
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
_
e
l
e
m
e
n
t
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
/
'
,
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
c
o
n
d
s
I
n
D
a
y
 
=
 
8
6
4
0
0
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
U
n
i
x
D
a
y
 
=
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
D
a
y
 
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
 
$
s
t
a
y
D
a
y
s
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
c
u
r
r
e
n
t
D
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
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
A
r
r
a
y
[
 
]
 
=
 
$
c
u
r
r
e
n
t
D
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
$
c
u
r
r
e
n
t
D
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
=
 
$
u
n
i
x
C
u
r
r
e
n
t
D
a
t
e
 
+
 
$
s
e
c
o
n
d
s
I
n
D
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
i
e
s
W
i
t
h
F
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
 
p
r
o
p
e
r
t
y
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
 
m
a
x
_
p
e
o
p
l
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
 
p
r
o
p
e
r
t
y
s
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
e
n
d
(
$
t
h
i
s
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
s
_
u
i
d
)
)
.
'
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
s
L
i
s
t
s
 
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
o
o
m
s
L
i
s
t
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
r
o
o
m
s
L
i
s
t
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
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
r
o
o
m
s
[
 
$
r
o
o
m
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
s
_
u
i
d
 
]
[
 
$
r
o
o
m
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
 
]
 
=
 
a
r
r
a
y
(
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
e
s
_
u
i
d
'
 
=
>
 
$
r
o
o
m
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
,
 
'
r
o
o
m
_
u
i
d
'
 
=
>
 
$
r
o
o
m
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
 
'
m
a
x
_
p
e
o
p
l
e
'
 
=
>
 
$
r
o
o
m
-
>
m
a
x
_
p
e
o
p
l
e
)
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
 
'
S
E
L
E
C
T
 
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
,
r
o
o
m
_
u
i
d
,
`
d
a
t
e
`
 
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
e
n
d
(
$
t
h
i
s
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
s
_
u
i
d
)
)
.
'
)
 
A
N
D
 
`
d
a
t
e
`
 
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
,
 
f
a
l
s
e
)
.
'
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
s
L
i
s
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
d
a
t
e
s
L
i
s
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
a
t
e
s
L
i
s
t
 
a
s
 
$
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
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
b
o
o
k
i
n
g
s
[
 
$
d
a
t
e
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
 
]
[
 
]
 
=
 
$
d
a
t
e
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
e
n
d
(
$
t
h
i
s
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
s
_
u
i
d
)
 
a
s
 
$
p
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
p
r
o
p
e
r
t
y
H
a
s
F
r
e
e
R
o
o
m
s
 
=
 
f
a
l
s
e
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
m
a
x
_
c
a
p
a
c
i
t
y
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
s
L
i
s
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
h
e
n
 
w
e
 
f
i
n
d
 
t
h
e
i
r
 
r
o
o
m
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
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
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
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
p
r
o
p
e
r
t
y
.
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
$
r
o
o
m
s
L
i
s
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
i
s
s
e
t
(
$
a
l
l
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
r
o
o
m
s
[
 
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
s
L
i
s
t
 
=
 
$
a
l
l
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
r
o
o
m
s
[
 
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
 
]
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
r
o
o
m
s
L
i
s
t
 
a
s
 
$
r
o
o
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
k
 
=
 
t
r
u
e
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
_
R
E
Q
U
E
S
T
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
)
 
&
&
 
$
_
R
E
Q
U
E
S
T
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
 
!
=
 
$
t
h
i
s
-
>
s
e
a
r
c
h
A
l
l
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
_
R
E
Q
U
E
S
T
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
)
 
&
&
 
$
r
o
o
m
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
e
s
_
u
i
d
'
 
]
 
!
=
 
$
t
h
i
s
-
>
f
i
l
t
e
r
[
 
'
r
o
o
m
_
t
y
p
e
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
k
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
o
k
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
h
e
n
 
w
e
 
s
e
e
 
i
f
 
e
a
c
h
 
r
o
o
m
 
i
s
 
f
r
e
e
 
o
n
 
t
h
e
 
d
a
t
e
(
s
)
 
i
n
 
t
h
e
 
d
a
t
e
 
r
a
n
g
e
 
a
r
r
a
y

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
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
 
r
o
o
m
_
u
i
d
 
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
o
o
m
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
.
"
'
 
A
N
D
 
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
.
"
'
 
 
A
N
D
 
(
"
.
$
s
t
.
"
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
$
d
a
t
e
s
L
i
s
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
i
s
s
e
t
(
$
a
l
l
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
b
o
o
k
i
n
g
s
[
 
$
p
r
o
p
e
r
t
y
 
]
)
 
|
|
 
(
i
s
s
e
t
(
$
a
l
l
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
b
o
o
k
i
n
g
s
[
 
$
p
r
o
p
e
r
t
y
 
]
)
 
&
&
 
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
r
o
o
m
[
 
'
r
o
o
m
_
u
i
d
'
 
]
,
 
$
a
l
l
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
b
o
o
k
i
n
g
s
[
 
$
p
r
o
p
e
r
t
y
 
]
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
H
a
s
F
r
e
e
R
o
o
m
s
 
=
 
t
r
u
e
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
[
$
r
o
o
m
[
 
'
r
o
o
m
_
u
i
d
'
 
]
]
 
=
 
$
r
o
o
m
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
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
d
a
t
e
s
L
i
s
t
)
=
=
0
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
$
p
r
o
p
e
r
t
y
H
a
s
F
r
e
e
R
o
o
m
s
=
T
R
U
E
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
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
H
a
s
F
r
e
e
R
o
o
m
s
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
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
x
_
c
a
p
a
c
i
t
y
 
+
=
 
$
r
[
'
m
a
x
_
p
e
o
p
l
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
h
i
s
-
>
f
i
l
t
e
r
[
 
'
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
'
 
]
)
 
|
|
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
f
i
l
t
e
r
[
 
'
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
'
 
]
)
 
&
&
 
(
i
n
t
)
 
$
t
h
i
s
-
>
f
i
l
t
e
r
[
 
'
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
'
 
]
 
=
=
 
0
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
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
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
=
 
(
i
n
t
)
$
t
h
i
s
-
>
f
i
l
t
e
r
[
 
'
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
'
 
]
;

	
	
	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
o
t
a
l
_
i
n
_
p
a
r
t
y
 
<
=
 
$
m
a
x
_
c
a
p
a
c
i
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
i
e
s
W
i
t
h
F
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
[
 
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
'
.
$
p
r
o
p
e
r
t
y
,
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
p
r
o
p
e
r
t
i
e
s
W
i
t
h
F
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
p
r
o
p
e
r
t
i
e
s
W
i
t
h
F
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
_
u
n
i
q
u
e
(
$
p
r
o
p
e
r
t
i
e
s
W
i
t
h
F
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
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
s
_
u
i
d
[
 
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
i
e
s
W
i
t
h
F
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
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
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
s
_
u
i
d
[
 
]
 
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
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
s
_
u
i
d
[
 
]
 
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

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
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
 
s
e
t
 
o
f
 
O
R
s
 
t
o
 
b
e
 
u
s
e
d
 
i
n
 
q
u
e
r
i
e
s
 
b
a
s
e
d
 
o
n
 
t
h
e
 
l
a
s
t
 
a
r
r
a
y
 
o
f
 
p
r
o
p
e
r
t
y
 
u
i
d
s
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
a
r
r
a
y
.

 
 
 
 
 
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
 
m
a
k
e
O
r
s
(
$
c
o
l
u
m
n
 
=
 
'
p
r
o
p
e
r
t
y
s
_
u
i
d
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
s
 
=
 
e
n
d
(
$
t
h
i
s
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
s
_
u
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
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
 
=
 
"
 
A
N
D
 
$
c
o
l
u
m
n
 
I
N
 
(
"
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
s
 
a
s
 
$
p
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
t
 
.
=
 
"
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
.
"
'
,
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
 
=
 
s
u
b
s
t
r
(
$
s
t
,
 
0
,
 
-
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
o
r
s
 
=
 
$
s
t
.
'
)
 
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
o
r
s
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
M
a
k
e
s
 
a
 
r
a
n
d
o
m
 
n
a
m
e
 
f
o
r
 
t
h
e
 
a
v
a
i
l
a
b
i
l
i
t
y
 
s
e
a
r
c
h
.

 
 
 
 
 
*
 
W
e
 
n
e
e
d
 
t
o
 
g
i
v
e
 
t
h
e
 
f
o
r
m
 
a
 
r
a
n
d
o
m
 
n
a
m
e
 
o
t
h
e
r
w
i
s
e
 
t
h
e
 
a
v
a
i
l
a
b
i
l
i
t
y
 
s
e
a
r
c
h
 
w
i
l
l
 
n
o
t
 
w
o
r
k
,
 
a
s
 
i
t
 
t
h
e
 
s
a
m
e
 
f
o
r
m
 
g
e
n
e
r
a
t
i
o
n
 
f
u
n
c
t
i
o
n
 
i
s
 
u
s
e
d
 
i
n
 
m
u
l
t
i
p
l
e
 
p
l
a
c
e
s
.

 
 
 
 
 
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
 
m
a
k
e
F
o
r
m
N
a
m
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
W
e
 
n
e
e
d
 
t
o
 
g
i
v
e
 
t
h
e
 
f
o
r
m
 
a
 
r
a
n
d
o
m
 
n
a
m
e
 
o
t
h
e
r
w
i
s
e
 
t
h
e
 
a
v
a
i
l
a
b
i
l
i
t
y
 
s
e
a
r
c
h
 
w
i
l
l
 
n
o
t
 
w
o
r
k

 
 
 
 
 
 
 
 
l
i
s
t
(
$
u
s
e
c
,
 
$
s
e
c
)
 
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
 
'
,
 
m
i
c
r
o
t
i
m
e
(
)
)
;

 
 
 
 
 
 
 
 
m
t
_
s
r
a
n
d
(
$
s
e
c
 
*
 
$
u
s
e
c
)
;

 
 
 
 
 
 
 
 
$
p
o
s
s
i
b
l
e
 
=
 
'
A
B
C
D
E
F
G
H
I
J
K
L
M
N
O
P
Q
R
S
T
U
V
W
X
Y
Z
a
b
c
d
e
f
h
i
j
k
l
m
n
o
p
q
r
s
t
u
v
w
x
y
z
'
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
 
1
0
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
k
e
y
 
=
 
m
t
_
r
a
n
d
(
0
,
 
s
t
r
l
e
n
(
$
p
o
s
s
i
b
l
e
)
 
-
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
o
r
m
n
a
m
e
 
.
=
 
$
p
o
s
s
i
b
l
e
[
 
$
k
e
y
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}
 
/
/
 
E
n
d
 
c
l
a
s
s
 
j
o
m
S
e
a
r
c
h


/
*
*

 
*
 
P
r
e
p
a
r
e
s
 
d
a
t
a
 
f
o
r
 
g
e
o
g
r
a
p
h
i
c
 
s
e
a
r
c
h
i
n
g
.
 
T
o
 
s
a
v
e
 
q
u
e
r
i
e
s
 
t
h
i
s
 
i
s
 
d
o
n
e
 
o
n
c
e
 
b
y
 
g
e
t
t
i
n
g
 
d
a
t
a
 
f
o
r
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s
,
 
t
h
e
n
 
s
e
p
e
r
a
t
i
n
g
 
t
h
e
 
d
a
t
a
 
i
n
t
o
 
v
a
r
i
o
u
s
 
a
r
r
a
y
s
,
 
w
h
i
c
h
 
a
r
e
 
t
h
e
n
 
p
a
r
s
e
d
 
b
y
 
m
e
t
h
o
d
s
 
i
n
 
t
h
e
 
s
e
a
r
c
h
 
c
l
a
s
s
.

 
*
/

f
u
n
c
t
i
o
n
 
p
r
e
p
G
e
o
g
r
a
p
h
i
c
S
e
a
r
c
h
(
)

{

 
 
 
 
/
/
 
P
r
e
p
a
r
e
s
 
t
h
e
 
g
e
o
g
r
a
p
h
i
c
 
d
a
t
a
 
r
e
q
u
i
r
e
d
 
f
o
r
 
a
 
s
e
a
r
c
h

	
$
l
a
n
g
 
=
 
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
 
D
I
S
T
I
N
C
T
 
(
C
A
S
E
 
W
H
E
N
 
(
a
.
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
b
.
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
 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
A
N
D
 
b
.
c
o
n
s
t
a
n
t
 
=
 
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
P
R
O
P
E
R
T
Y
_
T
O
W
N
'
 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
A
N
D
 
b
.
l
a
n
g
u
a
g
e
 
=
 
'
"
.
$
l
a
n
g
.
"
'
)
 

	
	
	
	
	
	
	
	
	
	
	
	
	
T
H
E
N
 
b
.
c
u
s
t
o
m
t
e
x
t
 

	
	
	
	
	
	
	
	
	
	
	
	
	
E
L
S
E
 
a
.
p
r
o
p
e
r
t
y
_
t
o
w
n
 

	
	
	
	
	
	
	
	
	
	
	
	
E
N
D
)
 
A
S
 
p
r
o
p
e
r
t
y
_
t
o
w
n
,

	
	
	
	
	
	
	
	
	
a
.
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
,

	
	
	
	
	
	
	
	
	
a
.
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
o
u
n
t
r
y
,

	
	
	
	
	
	
	
	
	
a
.
p
r
o
p
e
r
t
y
_
p
o
s
t
c
o
d
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
p
r
o
p
e
r
t
y
s
 
a

	
	
	
	
	
	
	
	
L
E
F
T
 
J
O
I
N
 
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
u
s
t
o
m
_
t
e
x
t
 
b
 
O
N
 
(
a
.
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
b
.
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
 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
A
N
D
 
b
.
c
o
n
s
t
a
n
t
 
=
 
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
P
R
O
P
E
R
T
Y
_
T
O
W
N
'
 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
A
N
D
 
b
.
l
a
n
g
u
a
g
e
 
=
 
'
"
.
$
l
a
n
g
.
"
'
)

	
	
	
	
	
	
	
	
W
H
E
R
E
 
a
.
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 

	
	
	
	
	
	
	
	
O
R
D
E
R
 
B
Y
 
a
.
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
o
u
n
t
r
y
,
a
.
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
,
p
r
o
p
e
r
t
y
_
t
o
w
n
 
"
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
L
o
c
a
t
i
o
n
s
 
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
a
l
l
P
r
o
p
e
r
t
y
L
o
c
a
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
r
o
p
e
r
t
y
L
o
c
a
t
i
o
n
s
 
a
s
 
$
l
o
c
a
t
i
o
n
)
 
{

	
	
$
r
 
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
r
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
 
=
 
$
l
o
c
a
t
i
o
n
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
p
o
s
t
c
o
d
e
;

	
	
i
f
 
(
i
s
_
n
u
m
e
r
i
c
(
$
l
o
c
a
t
i
o
n
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
r
e
g
i
o
n
)
)
 
{

	
	
	
$
j
o
m
r
e
s
_
r
e
g
i
o
n
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
j
o
m
r
e
s
_
r
e
g
i
o
n
s
'
)
;

	
	
	
$
r
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
E
G
I
O
N
S
_
'
.
$
l
o
c
a
t
i
o
n
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
r
e
g
i
o
n
,
 
$
j
o
m
r
e
s
_
r
e
g
i
o
n
s
-
>
g
e
t
_
r
e
g
i
o
n
_
n
a
m
e
(
$
l
o
c
a
t
i
o
n
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
r
e
g
i
o
n
)
,
 
f
a
l
s
e
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
 
=
 
$
l
o
c
a
t
i
o
n
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
r
e
g
i
o
n
;

	
	
}

	
	
$
r
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
 
=
 
$
l
o
c
a
t
i
o
n
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
c
o
u
n
t
r
y
;

	
	
$
r
[
 
'
c
o
u
n
t
r
y
n
a
m
e
'
 
]
 
=
 
g
e
t
S
i
m
p
l
e
C
o
u
n
t
r
y
(
$
r
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
;

	
	
$
r
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
t
o
w
n
'
 
]
 
=
 
$
l
o
c
a
t
i
o
n
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
t
o
w
n
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
t
o
w
n
'
 
]
)
)
 
{

	
	
	
$
a
l
l
P
r
o
p
e
r
t
y
L
o
c
a
t
i
o
n
s
[
 
]
 
=
 
$
r
;

	
	
}

	
}


 
 
 
 
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
r
o
p
e
r
t
y
L
o
c
a
t
i
o
n
s
'
 
]
 
=
 
$
a
l
l
P
r
o
p
e
r
t
y
L
o
c
a
t
i
o
n
s
;


 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


f
u
n
c
t
i
o
n
 
p
r
e
p
G
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
S
e
a
r
c
h
(
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
 
a
r
r
a
y
(
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
a
r
c
h
'
 
]
 
=
=
 
'
e
q
u
a
l
'
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
S
E
L
E
C
T
 
D
I
S
T
I
N
C
T
 
m
a
x
p
e
o
p
l
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
a
t
e
s
 
O
R
D
E
R
 
b
y
 
m
a
x
p
e
o
p
l
e
 
A
S
C
'
;

 
 
 
 
 
 
 
 
$
r
a
t
e
L
i
s
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
a
t
e
L
i
s
t
 
a
s
 
$
r
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
[
 
]
 
=
 
$
r
a
t
e
-
>
m
a
x
p
e
o
p
l
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
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
 
M
A
X
(
m
a
x
p
e
o
p
l
e
)
 
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
a
t
e
s
 
L
I
M
I
T
 
1
'
;

 
 
 
 
 
 
 
 
$
m
a
x
p
e
o
p
l
e
 
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


 
 
 
 
 
 
 
 
i
f
 
(
$
m
a
x
p
e
o
p
l
e
 
>
 
1
0
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
x
p
e
o
p
l
e
 
=
 
1
0
0
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
1
;
 
$
i
 
<
=
 
$
m
a
x
p
e
o
p
l
e
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
[
 
]
 
=
 
$
i
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


/
*
*

 
*
 
P
r
e
p
a
r
e
s
 
d
a
t
a
 
f
o
r
 
s
e
a
r
c
h
i
n
g
 
o
n
 
f
e
a
t
u
r
e
s
.

 
*
/

f
u
n
c
t
i
o
n
 
p
r
e
p
F
e
a
t
u
r
e
S
e
a
r
c
h
(
)

{

 
 
 
 
/
/
 
P
r
e
p
a
r
e
s
 
t
h
e
 
F
e
a
t
u
r
e
 
d
a
t
a
 
r
e
q
u
i
r
e
d
 
f
o
r
 
a
 
s
e
a
r
c
h

	
$
r
e
s
u
l
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
s
e
a
r
c
h
A
l
l
 
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
S
E
A
R
C
H
_
A
L
L
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
S
E
A
R
C
H
_
A
L
L
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
;


	
$
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


	
/
/
 
A
d
d
e
d
 
t
o
 
s
p
e
e
d
 
u
p
 
l
i
s
t
i
n
g
 
o
f
 
f
e
a
t
u
r
e
s
.
 
F
i
n
d
s
 
a
l
l
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s
 
a
g
a
i
n
s
t
 
p
u
b
l
i
s
h
e
d
 
p
r
o
p
e
r
t
y
s
 
a
n
d
 
c
r
e
a
t
e
s
 
a
 
u
n
i
q
u
e
 
a
r
r
a
y
 
o
f
 
t
h
e
 
f
e
a
t
u
r
e
 
u
i
d
s
.
 
T
h
i
s
 
w
a
y
 
w
e
 
c
a
n
 
s
t
i
l
l
 
h
a
v
e
 
o
u
r
 
l
i
s
t
 
o
f
 
f
e
a
t
u
r
e
s
 
b
u
t
 
n
o
t
 
i
n
c
l
u
d
e
 
a
n
y
 
t
h
a
t
 
a
r
e
 
n
o
t
 
a
s
s
i
g
n
e
d
 
t
o
 
a
n
y
 
p
r
o
p
e
r
t
i
e
s


	
$
u
n
i
q
u
e
F
e
a
t
u
r
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
 
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
 
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
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
"
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
s
f
e
a
t
u
r
e
s
 
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
r
o
p
e
r
t
y
s
f
e
a
t
u
r
e
s
 
a
s
 
$
p
f
)
 
{

	
	
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
p
f
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
f
e
a
t
u
r
e
s
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
f
e
a
t
u
r
e
u
i
d
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
f
e
a
t
u
r
e
u
i
d
,
 
$
u
n
i
q
u
e
F
e
a
t
u
r
e
s
)
)
 
{

	
	
	
	
$
u
n
i
q
u
e
F
e
a
t
u
r
e
s
[
 
]
 
=
 
$
f
e
a
t
u
r
e
u
i
d
;

	
	
	
}

	
	
}

	
}


	
$
r
 
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
r
[
 
'
i
d
'
 
]
 
=
 
0
;

	
$
r
[
 
'
t
i
t
l
e
'
 
]
 
=
 
$
s
e
a
r
c
h
A
l
l
;

	
$
r
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
 
=
 
$
s
e
a
r
c
h
A
l
l
;

	
$
r
[
 
'
i
m
a
g
e
'
 
]
 
=
 
'
'
;

	
$
r
[
 
'
p
t
y
p
e
_
x
r
e
f
'
 
]
 
=
 
'
'
;

	
$
r
e
s
u
l
t
[
 
]
 
=
 
$
r
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
-
>
a
l
l
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
f
e
a
t
u
r
e
s
 
a
s
 
$
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
I
d
 
=
>
 
$
f
e
a
t
u
r
e
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
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
I
d
,
 
$
u
n
i
q
u
e
F
e
a
t
u
r
e
s
)
 
&
&
 
$
f
e
a
t
u
r
e
[
'
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
'
]
 
=
=
 
"
1
"
 
)
 
{

	
	
	
$
r
 
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
r
[
 
'
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
F
e
a
t
u
r
e
I
d
;

	
	
	
$
r
[
 
'
t
i
t
l
e
'
 
]
 
=
 
$
f
e
a
t
u
r
e
[
'
a
b
b
v
'
]
;

	
	
	
$
r
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
 
=
 
$
f
e
a
t
u
r
e
[
'
d
e
s
c
'
]
;

	
	
	
$
r
[
 
'
i
m
a
g
e
'
 
]
 
=
 
$
f
e
a
t
u
r
e
[
'
i
m
a
g
e
'
]
;

	
	
	
$
r
[
 
'
p
t
y
p
e
_
x
r
e
f
'
 
]
 
=
 
$
f
e
a
t
u
r
e
[
'
p
t
y
p
e
_
x
r
e
f
'
]
;

	
	
	
$
r
e
s
u
l
t
[
 
]
 
=
 
$
r
;

	
	
}

	
}


 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


/
*
*

 
*
 
P
r
e
p
a
r
e
s
 
d
a
t
a
 
f
o
r
 
s
e
a
r
c
h
i
n
g
 
o
n
 
r
o
o
m
 
t
y
p
e
s
.

 
*
/

f
u
n
c
t
i
o
n
 
p
r
e
p
R
o
o
m
t
y
p
e
S
e
a
r
c
h
(
)

{

 
 
 
 
/
/
 
P
r
e
p
a
r
e
s
 
t
h
e
 
R
o
o
m
 
t
y
p
e
 
d
a
t
a
 
r
e
q
u
i
r
e
d
 
f
o
r
 
a
 
s
e
a
r
c
h

 
 
 
 
$
s
e
a
r
c
h
A
l
l
 
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
S
E
A
R
C
H
_
A
L
L
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
S
E
A
R
C
H
_
A
L
L
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
;


 
 
 
 
$
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
r
o
o
m
T
y
p
e
L
i
s
t
 
=
 
$
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
;


 
 
 
 
$
r
e
s
u
l
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
r
 
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
r
[
 
'
i
d
'
 
]
 
=
 
$
s
e
a
r
c
h
A
l
l
;

 
 
 
 
$
r
[
 
'
t
i
t
l
e
'
 
]
 
=
 
$
s
e
a
r
c
h
A
l
l
;

 
 
 
 
$
r
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
 
=
 
$
s
e
a
r
c
h
A
l
l
;

 
 
 
 
$
r
[
 
'
i
m
a
g
e
'
 
]
 
=
 
'
'
;

 
 
 
 
$
r
e
s
u
l
t
[
 
]
 
=
 
$
r
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
T
y
p
e
L
i
s
t
 
a
s
 
$
r
o
o
m
T
y
p
e
)
 
{

 
 
 
 
 
 
 
 
$
r
 
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
r
[
 
'
i
d
'
 
]
 
=
 
$
r
o
o
m
T
y
p
e
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
e
s
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
$
r
[
 
'
t
i
t
l
e
'
 
]
 
=
 
$
r
o
o
m
T
y
p
e
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
 
=
 
$
r
o
o
m
T
y
p
e
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
f
u
l
l
_
d
e
s
c
'
]
;

 
 
 
 
 
 
 
 
$
r
[
 
'
i
m
a
g
e
'
 
]
 
=
 
$
r
o
o
m
T
y
p
e
[
'
i
m
a
g
e
'
]
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
[
 
]
 
=
 
$
r
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


/
*
*

 
*
 
R
e
t
u
r
n
s
 
a
n
 
e
m
p
t
y
 
a
r
r
a
y
.

 
*
/

f
u
n
c
t
i
o
n
 
p
r
e
p
D
e
s
c
r
i
p
t
i
v
e
S
e
a
r
c
h
(
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
 
a
r
r
a
y
(
)
;


 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


/
*
*

 
*
 
P
r
e
p
a
r
e
s
 
t
h
e
 
a
v
a
i
l
a
b
i
l
i
t
y
 
s
e
a
r
c
h
 
d
a
t
e
s
.
 
I
f
 
a
 
s
e
a
r
c
h
 
h
a
s
 
a
l
r
e
a
d
y
 
b
e
e
n
 
d
o
n
e
 
o
n
c
e
 
t
h
e
n
,
 
i
f
 
v
a
l
i
d
,
 
t
h
e
 
p
r
e
v
i
o
u
s
l
y
 
c
h
o
s
e
n
 
d
a
t
e
s
 
a
r
e
 
r
e
t
u
r
n
e
d
.

 
*
/

f
u
n
c
t
i
o
n
 
p
r
e
p
A
v
a
i
l
a
b
i
l
i
t
y
S
e
a
r
c
h
(
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
r
e
s
u
l
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

 
 
 
 
/
/
$
a
v
a
i
l
a
b
i
l
i
t
y
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
t
o
d
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;

 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
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
/
'
,
 
$
t
o
d
a
y
)
;

 
 
 
 
$
u
n
i
x
T
o
m
o
r
r
o
w
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
1
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
$
g
m
t
T
o
m
o
r
r
o
w
s
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
T
o
m
o
r
r
o
w
s
D
a
t
e
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
 
'
'
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
 
'
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
_
R
E
Q
U
E
S
T
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
)
 
&
&
 
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
'
)
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
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
'
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
_
R
E
Q
U
E
S
T
[
 
'
p
d
e
t
a
i
l
s
_
c
a
l
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
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
/
'
,
 
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
;

 
 
 
 
 
 
 
 
$
u
n
i
x
T
o
m
o
r
r
o
w
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
1
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
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
_
R
E
Q
U
E
S
T
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
 
'
'
)
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
T
o
m
o
r
r
o
w
s
D
a
t
e
)
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
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
D
a
t
e
 
=
 
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
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}
 
e
l
s
e
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
)
 
&
&
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
e
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
*
 
e
l
s
e

 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
d
a
t
e
(
 
"
Y
/
m
/
d
"
,
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
 
)
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
u
e
 
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
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
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
D
a
t
e
 
=
 
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
 
d
a
t
e
(
 
"
Y
/
m
/
d
"
,
 
$
u
n
i
x
T
o
m
o
r
r
o
w
s
D
a
t
e
 
)
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
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
D
a
t
e
 
=
 
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
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
u
e
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
*
/

 
 
 
 
}


 
 
 
 
/
/
 
A
s
s
u
m
i
n
g
 
t
h
e
 
a
r
r
i
v
a
l
 
d
a
t
e
 
w
a
s
 
p
a
s
s
e
d
 
f
r
o
m
 
$
_
R
E
Q
U
E
S
T

 
 
 
 
i
f
 
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
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
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
/
'
,
 
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
;

 
 
 
 
 
 
 
 
$
u
n
i
x
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
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
i
f
 
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
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
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
 
<
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
o
d
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
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
/
'
,
 
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
u
n
i
x
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
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
i
f
 
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
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
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
 
<
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
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
g
m
t
T
o
m
o
r
r
o
w
s
D
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
a
r
r
a
y
(
'
a
r
r
i
v
a
l
'
 
=
>
 
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
,
 
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
'
 
=
>
 
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


 
 
 
 
 
 
 
 
i
f
 
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
 
!
=
 
'
'
 
&
&
 
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
 
!
=
 
'
'
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
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
 
a
r
r
a
y
(
)
;

 
 
 
 
}

}


/
*
*

 
*
 
P
r
e
p
a
r
e
s
 
t
h
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
s
e
a
r
c
h
 
d
a
t
a
.

 
*
/

f
u
n
c
t
i
o
n
 
p
r
e
p
P
r
o
p
e
r
t
y
T
y
p
e
S
e
a
r
c
h
(
)

{

 
 
 
 
/
/
 
P
r
e
p
a
r
e
s
 
t
h
e
 
P
r
o
p
e
r
t
y
T
y
p
e
 
d
a
t
a
 
r
e
q
u
i
r
e
d
 
f
o
r
 
a
 
s
e
a
r
c
h

 
 
 
 
$
s
e
a
r
c
h
A
l
l
 
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
S
E
A
R
C
H
_
A
L
L
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
S
E
A
R
C
H
_
A
L
L
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
;

 
 
 
 
$
r
e
s
u
l
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
r
 
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
r
[
 
'
i
d
'
 
]
 
=
 
$
s
e
a
r
c
h
A
l
l
;

 
 
 
 
$
r
[
 
'
p
t
y
p
e
'
 
]
 
=
 
$
s
e
a
r
c
h
A
l
l
;

 
 
 
 
$
r
[
 
'
p
t
y
p
e
_
d
e
s
c
'
 
]
 
=
 
$
s
e
a
r
c
h
A
l
l
;

 
 
 
 
$
r
e
s
u
l
t
[
 
]
 
=
 
$
r
;


 
 
 
 
$
j
o
m
r
e
s
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
t
y
p
e
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
j
o
m
r
e
s
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
t
y
p
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
p
r
o
p
e
r
t
y
_
t
y
p
e
s
-
>
g
e
t
_
a
l
l
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
t
y
p
e
s
(
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
j
o
m
r
e
s
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
t
y
p
e
s
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
t
y
p
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
j
o
m
r
e
s
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
t
y
p
e
s
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
t
y
p
e
s
 
a
s
 
$
p
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
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
$
p
t
[
'
p
u
b
l
i
s
h
e
d
'
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
i
d
'
 
]
 
=
 
$
p
t
[
'
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
p
t
y
p
e
'
 
]
 
=
 
$
p
t
[
'
p
t
y
p
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
p
t
y
p
e
_
d
e
s
c
'
 
]
 
=
 
$
p
t
[
'
p
t
y
p
e
_
d
e
s
c
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
[
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
v
a
r
_
d
u
m
p
(
$
r
e
s
u
l
t
)
;
e
x
i
t
;

 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


/
*
*

 
*
 
P
r
e
p
a
r
e
s
 
t
h
e
 
p
r
o
p
e
r
t
y
 
c
a
t
e
g
o
r
i
e
s
 
s
e
a
r
c
h
 
d
a
t
a
.

 
*
/

f
u
n
c
t
i
o
n
 
p
r
e
p
P
r
o
p
e
r
t
y
C
a
t
e
g
o
r
i
e
s
S
e
a
r
c
h
(
)

{

 
 
 
 
/
/
 
P
r
e
p
a
r
e
s
 
t
h
e
 
p
r
o
p
e
r
t
y
 
c
a
t
e
g
o
r
i
e
s
 
d
a
t
a
 
r
e
q
u
i
r
e
d
 
f
o
r
 
a
 
s
e
a
r
c
h

 
 
 
 
$
s
e
a
r
c
h
A
l
l
 
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
S
E
A
R
C
H
_
A
L
L
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
S
E
A
R
C
H
_
A
L
L
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
;

 
 
 
 
$
r
e
s
u
l
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
r
 
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
r
[
 
'
i
d
'
 
]
 
=
 
$
s
e
a
r
c
h
A
l
l
;

 
 
 
 
$
r
[
 
'
t
i
t
l
e
'
 
]
 
=
 
$
s
e
a
r
c
h
A
l
l
;

 
 
 
 
$
r
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
 
=
 
$
s
e
a
r
c
h
A
l
l
;

 
 
 
 
$
r
e
s
u
l
t
[
 
]
 
=
 
$
r
;


 
 
 
 
$
j
o
m
r
e
s
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
c
a
t
e
g
o
r
i
e
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
j
o
m
r
e
s
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
c
a
t
e
g
o
r
i
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
a
t
e
g
o
r
i
e
s
-
>
g
e
t
_
a
l
l
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
c
a
t
e
g
o
r
i
e
s
(
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
j
o
m
r
e
s
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
c
a
t
e
g
o
r
i
e
s
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
c
a
t
e
g
o
r
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
j
o
m
r
e
s
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
c
a
t
e
g
o
r
i
e
s
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
c
a
t
e
g
o
r
i
e
s
 
a
s
 
$
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
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
r
[
 
'
i
d
'
 
]
 
=
 
$
c
[
'
i
d
'
]
;

	
	
	
$
r
[
 
'
t
i
t
l
e
'
 
]
 
=
 
$
c
[
'
t
i
t
l
e
'
]
;

	
	
	
$
r
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
 
=
 
$
c
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
;


	
	
	
$
r
e
s
u
l
t
[
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
v
a
r
_
d
u
m
p
(
$
r
e
s
u
l
t
)
;
e
x
i
t
;

 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


/
*
*

 
*
 
P
r
e
p
a
r
e
s
 
t
h
e
 
p
r
i
c
e
 
r
a
n
g
e
 
s
e
a
r
c
h
 
d
r
o
p
d
o
w
n
 
d
a
t
a
.

 
*
/

f
u
n
c
t
i
o
n
 
p
r
e
p
P
r
i
c
e
R
a
n
g
e
S
e
a
r
c
h
(
$
i
n
c
r
e
m
e
n
t
s
 
=
 
1
0
)

{

 
 
 
 
/
/
 
P
r
e
p
a
r
e
s
 
t
h
e
 
P
r
o
p
e
r
t
y
T
y
p
e
 
d
a
t
a
 
r
e
q
u
i
r
e
d
 
f
o
r
 
a
 
s
e
a
r
c
h

	
$
s
e
a
r
c
h
A
l
l
 
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
S
E
A
R
C
H
_
A
L
L
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
S
E
A
R
C
H
_
A
L
L
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
;


	
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
 
D
I
S
T
I
N
C
T
 
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
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
a
t
e
s
,
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
r
o
p
e
r
t
y
s
 
W
H
E
R
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
r
a
t
e
s
.
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
r
o
p
e
r
t
y
s
.
p
r
o
p
e
r
t
y
s
_
u
i
d
 
A
N
D
 
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
r
o
p
e
r
t
y
s
.
p
u
b
l
i
s
h
e
d
 
=
 
1
 
O
R
D
E
R
 
b
y
 
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
a
t
e
s
.
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
;

	
$
r
a
t
e
L
i
s
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
 
D
I
S
T
I
N
C
T
 
p
r
o
p
e
r
t
y
_
k
e
y
 
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
p
r
o
p
e
r
t
y
s
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
1
 
O
R
D
E
R
 
b
y
 
p
r
o
p
e
r
t
y
_
k
e
y
'
;

	
$
r
e
a
l
e
s
t
a
t
e
L
i
s
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
e
s
u
l
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
r
e
s
u
l
t
[
 
]
 
=
 
$
s
e
a
r
c
h
A
l
l
;

	
$
a
l
l
T
a
r
i
f
f
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
r
a
t
e
L
i
s
t
 
a
s
 
$
r
a
t
e
)
 
{

	
	
$
a
l
l
T
a
r
i
f
f
s
[
 
]
 
=
 
$
r
a
t
e
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
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
r
e
a
l
e
s
t
a
t
e
L
i
s
t
 
a
s
 
$
r
a
t
e
)
 
{

	
	
i
f
 
(
(
f
l
o
a
t
)
 
$
r
a
t
e
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
k
e
y
 
>
 
0
.
0
0
)
 
{

	
	
	
$
a
l
l
T
a
r
i
f
f
s
[
 
]
 
=
 
$
r
a
t
e
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
k
e
y
;

	
	
}

	
}


	
s
o
r
t
(
$
a
l
l
T
a
r
i
f
f
s
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
l
l
T
a
r
i
f
f
s
[
 
0
 
]
)
)
 
{

	
	
$
h
i
g
h
e
s
t
 
=
 
e
n
d
(
$
a
l
l
T
a
r
i
f
f
s
)
;

	
	
$
l
o
w
e
s
t
 
=
 
r
e
s
e
t
(
$
a
l
l
T
a
r
i
f
f
s
)
;

	
	
/
/
 
F
o
u
n
d
 
d
u
r
i
n
g
 
t
e
s
t
i
n
g
,
 
w
h
e
n
 
o
n
e
 
p
r
o
p
e
r
t
y
 
h
a
s
 
t
h
e
 
p
r
i
c
e
 
1
0
0
,
0
0
0
,
0
0
0
 
a
n
d
 
t
h
e
 
i
n
c
r
e
m
e
n
t
s
 
i
s
 
l
e
f
t
 
t
o
 
t
h
e
 
d
e
f
a
u
l
t
 
2
0
,
 
y
o
u
'
l
l
 
g
e
t
 
a
n
 
o
u
t
 
o
f
 
m
e
m
o
r
y
 
e
r
r
o
r
.

	
	
/
/
 
T
h
i
s
 
i
s
 
b
e
c
a
u
s
e
 
y
o
u
'
l
l
 
h
a
v
e
 
u
p
 
t
o
 
h
a
l
f
 
a
 
m
i
l
l
i
o
n
 
p
o
s
s
i
b
l
e
 
r
a
n
g
e
s
.
 
H
e
r
e
 
w
e
'
l
l
 
t
e
s
t
 
h
i
g
h
e
s
t
/
i
n
c
r
e
m
e
n
t
s
.
 
I
f
 
t
h
e
 
r
e
s
u
l
t
 
i
s
 
>
 
1
0
0
 
w
e
'
l
l
 
h
a
v
e
 
t
o
 
s
e
t
 
t
h
e
 
i
n
c
r
e
m
e
n
t
s
 
t
o
 
s
o
m
e
t
h
i
n
g
 
a
 
b
i
t
 
m
o
r
e
 
s
e
n
s
i
b
l
e
 
t
o
 
s
t
a
v
e
 
o
f
f
 
o
u
t
 
o
f
 
m
e
m
o
r
y
 
e
r
r
o
r
s
.

	
	
i
f
 
(
$
h
i
g
h
e
s
t
 
/
 
$
i
n
c
r
e
m
e
n
t
s
 
>
 
1
0
0
0
0
)
 
{

	
	
	
$
i
n
c
r
e
m
e
n
t
s
 
=
 
$
i
n
c
r
e
m
e
n
t
s
 
*
 
1
0
0
0
;

	
	
}


	
	
$
r
a
n
g
e
s
 
=
 
m
y
_
r
a
n
g
e
(
0
,
 
$
h
i
g
h
e
s
t
,
 
$
i
n
c
r
e
m
e
n
t
s
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
a
n
g
e
s
 
a
s
 
$
r
a
n
g
e
)
 
{

	
	
	
$
s
t
a
r
t
R
a
n
g
e
 
=
 
$
r
a
n
g
e
;

	
	
	
$
e
n
d
R
a
n
g
e
 
=
 
$
r
a
n
g
e
 
+
 
$
i
n
c
r
e
m
e
n
t
s
;

	
	
	
$
r
a
n
g
e
H
a
s
E
l
e
m
e
n
t
s
 
=
 
f
a
l
s
e
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
T
a
r
i
f
f
s
 
a
s
 
$
t
)
 
{

	
	
	
	
i
f
 
(
$
t
 
>
 
$
s
t
a
r
t
R
a
n
g
e
 
&
&
 
$
t
 
<
=
 
$
e
n
d
R
a
n
g
e
)
 
{

	
	
	
	
	
$
r
a
n
g
e
H
a
s
E
l
e
m
e
n
t
s
 
=
 
t
r
u
e
;

	
	
	
	
}

	
	
	
}

	
	
	
i
f
 
(
$
r
a
n
g
e
H
a
s
E
l
e
m
e
n
t
s
)
 
{

	
	
	
	
$
r
e
s
u
l
t
[
 
]
 
=
 
$
s
t
a
r
t
R
a
n
g
e
.
'
-
'
.
$
e
n
d
R
a
n
g
e
;

	
	
	
}

	
	
}

	
	
$
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
a
l
l
T
a
r
i
f
f
s
)
 
-
 
1
;

	
	
$
h
i
g
h
e
s
t
 
=
 
$
a
l
l
T
a
r
i
f
f
s
[
 
$
c
o
u
n
t
 
]
;
	
	

	
}





 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

}


/
/
 
h
t
t
p
:
/
/
u
k
.
p
h
p
.
n
e
t
/
m
a
n
u
a
l
/
e
n
/
f
u
n
c
t
i
o
n
.
r
a
n
g
e
.
p
h
p
#
8
2
1
0
4

f
u
n
c
t
i
o
n
 
m
y
_
r
a
n
g
e
(
$
s
t
a
r
t
,
 
$
e
n
d
,
 
$
s
t
e
p
 
=
 
1
)

{

 
 
 
 
$
r
a
n
g
e
 
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
 
(
$
i
 
=
 
$
s
t
a
r
t
;
 
$
i
 
<
 
$
e
n
d
;
 
$
i
 
+
=
 
$
s
t
e
p
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
(
(
$
i
 
-
 
$
s
t
a
r
t
)
 
%
 
$
s
t
e
p
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
n
g
e
[
 
]
 
=
 
$
i
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
r
a
n
g
e
;

}

