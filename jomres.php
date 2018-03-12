
<
?
p
h
p

/
*
*

 
*
 
M
a
i
n
 
s
c
r
i
p
t
 
c
a
l
l
e
d
 
b
y
 
t
h
e
 
h
o
s
t
 
C
M
S
 
t
h
a
t
 
p
r
o
d
u
c
e
s
 
o
u
t
p
u
t
 
a
n
d
 
r
u
n
s
 
t
a
s
k
s

 
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
#


@
i
g
n
o
r
e
_
u
s
e
r
_
a
b
o
r
t
(
t
r
u
e
)
;

$
c
u
r
r
T
i
m
e
L
i
m
i
t
 
=
 
i
n
i
_
g
e
t
(
'
m
a
x
_
e
x
e
c
u
t
i
o
n
_
t
i
m
e
'
)
;

s
e
t
_
t
i
m
e
_
l
i
m
i
t
(
$
c
u
r
r
T
i
m
e
L
i
m
i
t
)
;
 
/
/
 
T
h
i
s
 
s
e
t
t
i
n
g
 
i
s
 
a
b
s
o
l
u
t
e
l
y
 
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
 
s
y
s
t
e
m
s
 
t
h
a
t
 
w
i
l
l
 
u
s
e
 
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
m
e
n
t
 
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
 
a
s
 
d
e
f
e
r
r
e
d
 
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
s
 
t
o
 
B
e
d
s
2
4
 
c
a
n
 
t
a
k
e
 
q
u
i
t
e
 
a
 
w
h
i
l
e
.
 
I
d
e
a
l
l
y
 
w
e
'
d
 
s
e
t
 
t
h
i
s
 
t
o
 
0
 
h
o
w
e
v
e
r
 
s
o
m
e
 
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
s
,
 
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
l
y
 
W
o
r
d
p
r
e
s
s
 
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
s
 
t
h
a
t
 
m
a
y
 
b
e
 
o
n
 
"
b
u
d
g
e
t
"
 
a
n
d
 
o
r
 
s
h
a
r
e
d
 
h
o
s
t
i
n
g
 
p
a
c
k
a
g
e
s
 
m
i
g
h
t
 
t
h
r
o
w
 
a
t
 
m
i
n
i
m
u
m
 
a
 
w
a
r
n
i
n
g
 
a
b
o
u
t
 
s
e
t
t
i
n
g
 
t
h
e
 
l
i
m
i
t
 
t
o
 
0
.
 
W
e
'
l
l
 
t
r
y
 
i
n
s
t
e
a
d
 
t
o
 
s
e
t
 
i
t
 
t
o
 
t
h
e
 
m
a
x
 
e
x
e
c
u
t
i
o
n
 
t
i
m
e
 
a
n
d
 
h
o
p
e
 
t
h
a
t
 
t
h
a
t
'
s
 
e
n
o
u
g
h
.
 
I
t
 
w
i
l
l
 
b
e
 
i
n
 
9
9
%
 
o
f
 
c
a
s
e
s
.



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
t
a
s
k
'
]
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
f
i
e
l
d
'
]
)
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
 
e
n
g
i
n
e
 
h
e
a
r
t
b
e
a
t
 
i
s
 
u
s
e
d
 
t
o
 
k
e
e
p
 
t
h
e
 
s
e
s
s
i
o
n
 
a
l
i
v
e
,
 
b
u
t
 
d
o
e
s
n
'
t
 
d
o
 
a
n
y
t
h
i
n
g
 
e
l
s
e
.
 
W
e
'
l
l
 
k
i
l
l
 
i
t
 
d
e
a
d
 
r
i
g
h
t
 
o
f
f
 
t
h
e
 
b
a
t
.

 
 
 
 
i
f
 
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
t
a
s
k
'
]
 
=
=
 
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
'
 
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
f
i
e
l
d
'
]
 
=
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
)
 
{

 
 
 
 
 
 
 
 
d
i
e
(
)
;

 
 
 
 
}

}


o
b
_
s
t
a
r
t
(
'
r
e
m
o
v
e
B
O
M
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
 
X
-
C
l
a
c
k
s
 
O
v
e
r
h
e
a
d
.
 
I
f
 
y
o
u
'
r
e
 
a
 
f
a
n
 
o
f
 
S
i
r
 
T
e
r
r
y
,
 
l
e
a
v
e
 
i
t
 
i
n
.
 
I
f
 
y
o
u
'
r
e
 
n
o
t
,
 
t
a
k
e
 
i
t
 
o
u
t

h
e
a
d
e
r
(
'
X
-
C
l
a
c
k
s
-
O
v
e
r
h
e
a
d
:
 
G
N
U
 
T
e
r
r
y
 
P
r
a
t
c
h
e
t
t
'
)
;


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
 
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
.
'
/
i
n
t
e
g
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
'
;


t
r
y
 
{

 
 
 
 
/
/
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
 
o
b
j
e
c
t

 
 
 
 
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


 
 
 
 
/
/
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
 
o
b
j
e
c
t

 
 
 
 
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

	

	
/
/
r
e
q
u
e
s
t
 
l
o
g

	
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
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
]
 
=
=
 
'
d
e
v
e
l
o
p
m
e
n
t
'
)
 
{

	
	
r
e
q
u
e
s
t
_
l
o
g
(
)
;

	
}


 
 
 
 
/
/
g
e
t
 
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
 
i
n
 
s
y
s
t
e
m
.

 
 
 
 
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
i
e
s
(
)
;


 
 
 
 
/
/
l
a
n
g
u
a
g
e
 
o
b
j
e
c
t
 
-
 
l
o
a
d
 
d
e
f
a
u
l
t
 
l
a
n
g
u
a
g
e
 
f
i
l
e
 
f
o
r
 
c
o
n
t
e
x
t

 
 
 
 
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
 
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
l
a
n
g
u
a
g
e
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
l
a
n
g
u
a
g
e
-
>
g
e
t
_
l
a
n
g
u
a
g
e
(
)
;


 
 
 
 
/
/
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
 
o
b
j
e
c
t
 
-
 
l
o
a
d
 
a
l
l
 
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

 
 
 
 
$
c
u
s
t
o
m
T
e
x
t
O
b
j
 
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
'
)
;

	

	
/
/
t
r
i
g
g
e
r
 
0
0
0
0
1
 
e
v
e
n
t

	
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
0
0
0
1
'
)
;


 
 
 
 
/
/
t
r
i
g
g
e
r
 
0
0
0
0
2
 
e
v
e
n
t

 
 
 
 
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
0
0
0
2
'
)
;


 
 
 
 
/
/
u
s
e
r
 
o
b
j
e
c
t

 
 
 
 
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


	
/
/
s
i
l
e
n
t
l
y
 
r
e
m
o
v
e
 
a
l
l
 
a
c
c
e
s
s
 
r
i
g
h
t
s
 
f
o
r
 
t
h
i
s
 
u
s
e
r
 
i
f
 
h
e
 
i
s
 
a
 
m
a
n
a
g
e
r
/
r
e
c
e
p
t
i
o
n
i
s
t
 
w
i
t
h
 
n
o
 
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
)
 
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

	
	
$
j
o
m
r
e
s
_
u
s
e
r
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
u
s
e
r
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
u
s
e
r
s
-
>
d
e
l
e
t
e
_
u
s
e
r
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
r
e
s
e
t
_
m
a
n
a
g
e
r
_
t
o
_
n
o
n
_
m
a
n
a
g
e
r
(
)
;

 
 
 
 
}


 
 
 
 
/
/
j
o
m
r
e
s
 
t
i
m
e
z
o
n
e
s
 
-
 
m
o
s
t
l
y
 
u
n
u
s
e
d
 
w
i
t
h
 
a
n
 
e
x
c
e
p
t
i
o
n

 
 
 
 
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
t
i
m
e
z
o
n
e
s
'
)
;

 
 
 
 
$
t
z
 
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
t
i
m
e
z
o
n
e
s
(
)
;


 
 
 
 
/
/
w
e
 
d
o
n
`
t
 
w
a
n
t
 
r
o
b
o
t
s
 
t
o
 
i
n
d
e
x
 
f
u
l
l
s
c
r
e
e
n
 
m
o
d
e
 
o
r
 
a
j
a
x
 
r
e
q
u
e
s
t
s

 
 
 
 
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
t
m
p
l
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
t
m
p
l
'
 
]
 
=
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
t
m
p
l
c
o
m
p
o
n
e
n
t
'
)
)
 
{

 
 
 
 
 
 
 
 
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
e
t
m
e
t
a
d
a
t
a
(
'
r
o
b
o
t
s
'
,
 
'
n
o
i
n
d
e
x
,
n
o
f
o
l
l
o
w
'
)
;

 
 
 
 
}


 
 
 
 
/
/
t
r
i
g
g
e
r
 
0
0
0
0
3
 
e
v
e
n
t

 
 
 
 
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
0
0
0
3
'
)
;


 
 
 
 
/
/
j
o
m
r
e
s
 
c
r
o
n
 
o
b
j
e
c
t

 
 
 
 
$
c
r
o
n
 
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
r
o
n
'
)
;

 
 
 
 
i
f
 
(
$
c
r
o
n
-
>
m
e
t
h
o
d
 
=
=
 
'
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
'
 
&
&
 
!
A
J
A
X
C
A
L
L
)
 
{

 
 
 
 
 
 
 
 
$
c
r
o
n
-
>
t
r
i
g
g
e
r
J
o
b
s
(
)
;

 
 
 
 
}


 
 
 
 
/
/
t
e
m
p
 
b
o
o
k
i
n
g
 
h
a
n
d
l
e
r
 
o
b
j
e
c
t
,
 
i
n
i
t
 
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
i
n
i
t
B
o
o
k
i
n
g
S
e
s
s
i
o
n
(
)
;


 
 
 
 
$
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
J
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
(
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
,
 
$
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
)
;


 
 
 
 
/
/
s
e
t
 
s
o
m
e
 
s
h
o
w
t
i
m
e
s
 
w
e
`
l
l
 
n
e
e
d
 
l
a
t
e
r

 
 
 
 
$
p
o
p
u
p
 
=
 
(
i
n
t
)
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
p
o
p
u
p
'
,
 
0
)
;

 
 
 
 
$
n
o
_
h
t
m
l
 
=
 
(
i
n
t
)
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
n
o
_
h
t
m
l
'
,
 
0
)
;

 
 
 
 
$
t
a
s
k
 
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
&
#
6
0
;
x
&
#
6
2
;
'
,
 
'
'
,
 
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
t
a
s
k
'
,
 
'
'
)
)
;


 
 
 
 
i
f
 
(
$
t
a
s
k
 
=
=
 
"
s
a
v
e
P
l
u
g
i
n
"
)
 
{
 
/
/
 
9
.
9
 
t
a
s
k
 
n
a
m
e
s
 
w
e
r
e
 
c
h
a
n
g
e
d
,
 
a
n
d
 
s
a
v
e
P
l
u
g
i
n
 
w
a
s
 
r
e
n
u
m
b
e
r
e
d
 
a
n
d
 
r
e
n
a
m
e
d
 
t
o
 
s
a
v
e
_
p
l
u
g
i
n
.
 
A
s
 
m
a
n
y
 
3
r
d
 
p
a
r
t
y
 
g
a
t
e
w
a
y
s
 
w
i
l
l
 
u
s
e
 
s
a
v
e
P
l
u
g
i
n
 
(
a
n
d
 
i
t
 
m
a
y
 
n
e
v
e
r
 
b
e
 
u
p
d
a
t
e
d
 
)
 
w
e
'
l
l
 
c
h
a
n
g
e
 
t
h
e
 
t
a
s
k
 
n
a
m
e
 
h
e
r
e
 
s
o
 
t
h
a
t
 
t
h
e
y
 
c
o
n
t
i
n
u
e
 
t
o
 
w
o
r
k
.

 
 
 
 
 
 
 
 
$
t
a
s
k
 
=
 
"
s
a
v
e
_
p
l
u
g
i
n
"
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
t
a
s
k
 
=
=
 
"
e
d
i
t
G
a
t
e
w
a
y
"
)
 
{
 
/
/
 
9
.
9
 
t
a
s
k
 
n
a
m
e
s
 
w
e
r
e
 
c
h
a
n
g
e
d
,
 
a
n
d
 
e
d
i
t
G
a
t
e
w
a
y
 
w
a
s
 
r
e
n
u
m
b
e
r
e
d
 
a
n
d
 
r
e
n
a
m
e
d
 
t
o
 
e
d
i
t
g
a
t
e
w
a
y
.
 
A
s
 
m
a
n
y
 
3
r
d
 
p
a
r
t
y
 
g
a
t
e
w
a
y
s
 
w
i
l
l
 
u
s
e
 
e
d
i
t
G
a
t
e
w
a
y
 
(
a
n
d
 
i
t
 
m
a
y
 
n
e
v
e
r
 
b
e
 
u
p
d
a
t
e
d
 
)
 
w
e
'
l
l
 
c
h
a
n
g
e
 
t
h
e
 
t
a
s
k
 
n
a
m
e
 
h
e
r
e
 
s
o
 
t
h
a
t
 
t
h
e
y
 
c
o
n
t
i
n
u
e
 
t
o
 
w
o
r
k
.

 
 
 
 
 
 
 
 
$
t
a
s
k
 
=
 
"
e
d
i
t
g
a
t
e
w
a
y
"
;

 
 
 
 
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
t
a
s
k
'
,
 
$
t
a
s
k
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
n
o
_
h
t
m
l
'
,
 
$
n
o
_
h
t
m
l
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
o
p
u
p
'
,
 
$
p
o
p
u
p
)
;


 
 
 
 
i
f
 
(
$
n
o
_
h
t
m
l
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
N
O
H
T
M
L
'
,
 
1
)
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
N
O
H
T
M
L
'
,
 
0
)
;

 
 
 
 
}


 
 
 
 
/
/
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
n
v
e
r
s
i
o
n
 
o
b
j
e
c
t

 
 
 
 
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
r
r
e
n
c
y
_
e
x
c
h
a
n
g
e
_
r
a
t
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
c
u
r
r
e
n
c
y
_
e
x
c
h
a
n
g
e
_
r
a
t
e
s
'
)
;

	

	
/
/
s
e
t
 
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
 
t
o
 
t
h
e
 
a
p
p
r
o
p
r
i
a
t
e
 
o
n
e
 
f
o
r
 
t
h
e
 
d
e
t
e
c
t
e
d
 
l
o
c
a
t
i
o
n

	
$
j
o
m
r
e
s
_
g
e
o
l
o
c
a
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
g
e
o
l
o
c
a
t
i
o
n
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
g
e
o
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
a
u
t
o
_
s
e
t
_
u
s
e
r
_
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
(
)
;


 
 
 
 
/
/
i
f
 
t
h
i
s
 
c
m
s
 
u
s
e
r
 
h
a
s
 
b
o
o
k
e
d
 
i
n
 
t
h
e
 
p
a
s
t
 
a
n
d
 
d
o
e
s
n
`
t
 
h
a
v
e
 
p
r
o
f
i
l
e
 
d
e
t
a
i
l
s
 
s
a
v
e
d
 
y
e
t
,
 
w
e
`
l
l
 
u
p
d
a
t
e
 
h
i
s
 
p
r
o
f
i
l
e
 
d
e
t
a
i
l
s
 
a
a
u
t
o
m
a
t
i
c
a
l
l
y
 
b
a
s
e
d
 
o
n
 
h
i
s
 
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
 
f
r
o
m
 
o
n
e
 
o
f
 
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
 
b
o
o
k
i
n
g
s
 
h
e
`
s
 
m
a
d
e

 
 
 
 
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
t
a
s
k
'
)
 
!
=
 
'
e
r
r
o
r
'
)
 
{

 
 
 
 
 
 
 
 
$
d
e
f
a
u
l
t
P
r
o
p
e
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
J
R
U
s
e
r
-
>
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
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
j
s
i
d
'
]
)
)
 
{
 
/
/
 
D
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
 
r
e
s
e
t
 
m
o
s
 
u
s
e
r
i
d
 
i
f
 
j
s
i
d
 
i
s
 
s
e
t
.
 
j
s
i
d
 
i
s
 
s
e
n
t
 
b
a
c
k
 
b
y
 
g
a
t
e
w
a
y
s
 
a
n
d
 
i
f
 
w
e
 
s
e
t
 
m
o
s
 
i
d
 
t
o
 
t
h
e
 
g
a
t
e
w
a
y
'
s
 
s
e
s
s
i
o
n
,
 
w
e
'
l
l
 
n
e
v
e
r
 
b
e
 
a
b
l
e
 
t
o
 
 
a
s
s
o
c
i
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
 
w
i
t
h
 
t
h
e
 
g
u
e
s
t

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
'
m
o
s
_
u
s
e
r
i
d
'
,
 
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
t
a
s
k
'
)
 
!
=
 
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
t
a
s
k
'
)
 
!
=
 
'
c
o
m
p
l
e
t
e
b
k
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
t
a
s
k
'
)
 
!
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
t
a
s
k
'
)
 
!
=
 
'
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
'
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
p
r
o
f
i
l
e
_
i
d
 
=
=
 
0
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
,
f
i
r
s
t
n
a
m
e
,
s
u
r
n
a
m
e
,
h
o
u
s
e
,
s
t
r
e
e
t
,
t
o
w
n
,
p
o
s
t
c
o
d
e
,
c
o
u
n
t
y
,
c
o
u
n
t
r
y
,
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
,
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
,
e
m
a
i
l
,
d
i
s
c
o
u
n
t
 
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
g
u
e
s
t
s
 
W
H
E
R
E
 
m
o
s
_
u
s
e
r
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
"
'
 
L
I
M
I
T
 
1
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
D
a
t
a
 
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
,
 
2
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
g
u
e
s
t
D
a
t
a
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
g
u
e
s
t
_
p
r
o
f
i
l
e
 
(
`
c
m
s
_
u
s
e
r
_
i
d
`
,
`
f
i
r
s
t
n
a
m
e
`
,
`
s
u
r
n
a
m
e
`
,
`
h
o
u
s
e
`
,
`
s
t
r
e
e
t
`
,
`
t
o
w
n
`
,
`
c
o
u
n
t
y
`
,
`
c
o
u
n
t
r
y
`
,
`
p
o
s
t
c
o
d
e
`
,
`
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
`
,
`
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
`
,
`
e
m
a
i
l
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
"
'
,
'
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
'
,
'
$
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
$
h
o
u
s
e
'
,
'
$
s
t
r
e
e
t
'
,
'
$
t
o
w
n
'
,
'
$
r
e
g
i
o
n
'
,
'
$
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
$
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
$
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
$
m
o
b
i
l
e
'
,
'
$
e
m
a
i
l
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
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
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
,
 
$
g
u
e
s
t
D
a
t
a
[
 
'
i
d
'
 
]
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
-
>
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
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
 
$
g
u
e
s
t
D
a
t
a
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
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
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
 
$
g
u
e
s
t
D
a
t
a
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
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
'
h
o
u
s
e
'
,
 
$
g
u
e
s
t
D
a
t
a
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
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
'
s
t
r
e
e
t
'
,
 
$
g
u
e
s
t
D
a
t
a
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
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
'
t
o
w
n
'
,
 
$
g
u
e
s
t
D
a
t
a
[
 
'
t
o
w
n
'
 
]
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
-
>
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
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
g
u
e
s
t
D
a
t
a
[
 
'
c
o
u
n
t
y
'
 
]
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
-
>
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
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
g
u
e
s
t
D
a
t
a
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
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
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
 
$
g
u
e
s
t
D
a
t
a
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
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
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
 
$
g
u
e
s
t
D
a
t
a
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
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
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
 
$
g
u
e
s
t
D
a
t
a
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
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
'
e
m
a
i
l
'
,
 
$
g
u
e
s
t
D
a
t
a
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
r
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
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
'
e
m
a
i
l
'
,
 
$
u
s
e
r
_
d
e
t
a
i
l
s
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
e
m
a
i
l
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
J
R
U
s
e
r
 
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
j
o
m
r
e
s
_
m
a
n
a
g
e
r
_
i
d
 
=
 
0
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
-
>
u
s
e
r
i
d
 
=
 
0
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
-
>
u
s
e
r
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
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
 
0
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
-
>
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
 
=
 
0
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
-
>
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
S
u
s
p
e
n
d
e
d
 
=
 
f
a
l
s
e
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
 
=
 
f
a
l
s
e
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
 
=
 
f
a
l
s
e
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
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
a
g
e
r
 
=
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
/
/
h
a
n
d
l
e
 
s
u
s
p
e
n
d
e
d
 
m
a
n
a
g
e
r
s

 
 
 
 
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
S
u
s
p
e
n
d
e
d
)
 
{

 
 
 
 
 
 
 
 
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
s
u
s
p
e
n
s
i
o
n
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
s
u
s
p
e
n
s
i
o
n
s
 
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
s
u
s
p
e
n
s
i
o
n
s
(
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
s
u
s
p
e
n
s
i
o
n
s
-
>
s
e
t
_
m
a
n
a
g
e
r
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
u
s
e
r
i
d
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
j
o
m
r
e
s
_
s
u
s
p
e
n
s
i
o
n
s
-
>
s
u
s
p
e
n
d
e
d
_
m
a
n
a
g
e
r
_
d
e
n
i
e
d
_
t
a
s
k
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
t
a
s
k
'
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
c
p
a
n
e
l
'
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
g
e
t
 
t
h
e
 
c
u
r
r
e
n
t
 
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
 
i
f
 
s
e
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
u
i
d
 
=
 
(
i
n
t
)
 
d
e
t
e
c
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
u
i
d
(
)
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
_
u
i
d
 
>
 
0
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
u
i
d
)
;


 
 
 
 
 
 
 
 
/
/
b
a
s
c
i
 
p
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s
 
o
b
j
e
c
t

 
 
 
 
 
 
 
 
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
t
a
s
k
'
)
 
=
=
 
'
v
i
e
w
p
r
o
p
e
r
t
y
'
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
l
a
s
t
_
v
i
e
w
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
u
i
d
)
;
 
/
/
 
s
h
o
w
t
i
m
e
'
s
 
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
 
v
a
r
i
a
b
l
e
 
c
a
n
 
c
h
a
n
g
e
,
 
f
o
r
 
e
x
a
m
p
l
e
 
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
 
w
i
l
l
 
c
h
a
n
g
e
 
w
h
i
l
e
 
t
h
e
 
s
y
s
t
e
m
 
i
s
 
v
i
e
w
i
n
g
 
d
i
f
f
e
r
e
n
t
 
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
n
d
 
f
i
n
d
i
n
g
 
l
a
n
g
u
a
g
e
 
s
t
r
i
n
g
s
 
f
o
r
 
e
a
c
h
.
 
W
e
'
l
l
 
s
e
t
 
a
 
s
p
e
c
i
f
i
c
 
v
a
r
i
a
b
l
e
 
h
e
r
e
 
t
h
a
t
 
c
a
n
 
b
e
 
r
e
l
i
a
b
l
y
 
b
e
 
u
s
e
d
 
t
o
 
t
a
k
e
 
t
h
e
 
u
s
e
r
 
b
a
c
k
 
t
o
 
t
h
e
 
l
a
s
t
 
v
i
e
w
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
.
 
T
y
p
i
c
a
l
l
y
 
f
o
r
 
c
a
n
c
e
l
 
b
u
t
t
o
n
s
,
 
w
e
 
c
a
n
 
u
s
e
 
t
h
e
 
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
 
c
o
m
m
o
n
 
d
e
f
i
n
i
t
i
o
n
 
C
O
M
M
O
N
_
L
A
S
T
_
V
I
E
W
E
D
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
U
I
D
 
t
o
 
a
l
l
o
w
 
c
a
n
c
e
l
 
b
u
t
t
o
n
s
 
t
o
 
t
a
k
e
 
u
s
 
b
a
c
k
 
t
o
 
t
h
e
 
l
a
s
t
 
v
i
e
w
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
 
w
i
t
h
o
u
t
 
h
a
v
i
n
g
 
t
o
 
s
p
e
c
i
f
i
c
a
l
l
y
 
c
o
d
e
 
f
o
r
 
i
t
 
i
n
 
t
h
e
 
s
c
r
i
p
t
 
c
a
l
l
i
n
g
 
t
h
e
 
t
e
m
p
l
a
t
e
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
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
l
a
s
t
_
v
i
e
w
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
s
i
n
c
e
 
w
e
 
h
a
v
e
 
a
 
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
,
 
w
e
 
a
l
s
o
 
h
a
v
e
 
a
 
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
,
 
s
o
 
l
e
t
`
s
 
s
e
t
 
a
 
s
h
o
w
t
i
m
e

 
 
 
 
 
 
 
 
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
'
,
 
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
t
y
p
e
_
i
d
'
,
 
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
)
;


 
 
 
 
 
 
 
 
/
/
l
o
a
d
 
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
p
e
c
i
f
i
c
 
l
a
n
g
u
a
g
e
 
f
i
l
e
 
i
f
 
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
t
y
p
e
 
i
s
 
s
e
t

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
-
>
g
e
t
_
l
a
n
g
u
a
g
e
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
t
y
p
e
)
;


 
 
 
 
 
 
 
 
/
/
s
a
n
i
t
y
 
c
h
e
c
k
s

 
 
 
 
 
 
 
 
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
 
0
 
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
t
a
s
k
'
)
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
A
J
A
X
C
A
L
L
 
&
&
 
$
n
o
_
h
t
m
l
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
a
n
i
t
y
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
w
a
r
n
i
n
g
 
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
s
a
n
i
t
y
_
c
h
e
c
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
 
$
w
a
r
n
i
n
g
-
>
c
o
n
s
t
r
u
c
t
_
w
a
r
n
i
n
g
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
P
R
O
P
E
R
T
Y
N
O
T
O
U
B
L
I
S
H
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
R
O
P
E
R
T
Y
N
O
T
O
U
B
L
I
S
H
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
u
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
s
k
 
=
 
'
'
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
t
a
s
k
'
,
 
'
'
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
'
,
 
'
'
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
 
0
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
r
e
d
i
r
e
c
t
 
t
o
 
n
e
w
 
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
 
i
f
 
d
i
f
f
e
r
e
n
t
 
t
h
a
n
 
m
a
n
a
g
e
r
`
s
 
c
u
r
r
e
n
t
 
p
r
o
p
e
r
t
y

 
 
 
 
 
 
 
 
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
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
 
!
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
 
&
&
 
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
_
u
i
d
,
 
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
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
_
c
u
r
r
e
n
t
p
r
o
p
e
r
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
)
,
 
'
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
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
l
a
s
t
_
v
i
e
w
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
y
_
u
i
d
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
l
a
s
t
_
v
i
e
w
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
y
_
u
i
d
'
,
 
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
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
l
a
s
t
_
v
i
e
w
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
y
_
u
i
d
'
 
]
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
i
f
 
(
!
A
J
A
X
C
A
L
L
 
&
&
 
$
n
o
_
h
t
m
l
 
=
=
 
0
)
 
{

	
	
/
/
a
d
d
 
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
 
t
o
 
h
e
a
d

 
 
 
 
 
 
 
 
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
0
0
0
4
'
)
;

	
	

	
	
/
/
c
o
r
e
 
m
e
n
u
 
i
t
e
m
s

	
	
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
9
9
9
5
'
,
 
'
m
e
n
u
'
,
 
a
r
r
a
y
(
)
)
;
 
/
/
c
o
r
e
 
m
e
n
u
 
i
t
e
m
s

 
 
 
 
}


 
 
 
 
/
/
T
O
D
O
 
f
i
n
d
 
a
 
b
e
t
t
e
r
 
p
l
a
c
e

 
 
 
 
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
,
 
t
r
u
e
)
;

	

	
/
/
r
e
g
i
s
t
e
r
 
j
o
m
r
e
s
 
f
r
o
n
t
e
n
d
 
w
i
d
g
e
t
s

	
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
9
9
9
0
'
)
;

	
}


 
 
 
 
/
/
t
r
i
g
g
e
r
 
0
0
0
0
5
 
e
v
e
n
t

 
 
 
 
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
0
0
0
5
'
)
;


 
 
 
 
/
/
t
r
i
g
g
e
r
 
0
0
0
0
6
 
e
v
e
n
t

	
i
f
 
(
!
A
J
A
X
C
A
L
L
 
&
&
 
$
n
o
_
h
t
m
l
 
=
=
 
0
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
0
0
0
6
'
)
;


	
	
/
/
t
r
i
g
g
e
r
 
0
0
0
6
0
 
e
v
e
n
t
.
 
R
u
n
 
o
u
t
 
o
f
 
t
r
i
g
g
e
r
 
p
o
i
n
t
s
.
 
I
l
l
o
g
i
c
a
l
l
y
 
n
o
w
,
 
6
0
 
t
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
 
t
o
p
 
t
e
m
p
l
a
t
e
,
 
6
1
 
t
h
e
 
b
o
t
t
o
m
 
t
e
m
p
l
a
t
e
.

	
	
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
0
0
6
0
'
,
 
a
r
r
a
y
(
'
t
z
'
 
=
>
 
$
t
z
)
)
;


	
	
/
/
t
r
i
g
g
e
r
 
0
0
0
1
2
 
e
v
e
n
t

	
	
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
0
0
1
2
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
 
O
p
t
i
o
n
a
l
 
o
t
h
e
r
 
s
t
u
f
f
 
t
o
 
d
o
 
b
e
f
o
r
e
 
s
w
i
t
c
h
 
i
s
 
d
o
n
e
.

	
}


 
 
 
 
/
/
h
a
n
d
l
e
 
t
a
s
k
s

	
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
6
0
0
0
'
,
 
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
t
a
s
k
'
)
)
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
6
0
0
0
'
,
 
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
t
a
s
k
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
6
0
0
1
'
,
 
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
t
a
s
k
'
)
)
 
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
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
5
0
)
 
{
 
/
/
 
R
e
c
e
p
t
i
o
n
i
s
t
 
a
n
d
 
m
a
n
a
g
e
r
 
t
a
s
k
s

	
	
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
6
0
0
1
'
,
 
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
t
a
s
k
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
6
0
0
2
'
,
 
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
t
a
s
k
'
)
)
 
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
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
7
0
)
 
{
 
/
/
 
M
a
n
a
g
e
r
 
o
n
l
y
 
t
a
s
k
s
 
(
h
i
g
h
e
r
 
t
h
a
n
 
r
e
c
e
p
t
i
o
n
i
s
t
)

	
	
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
6
0
0
2
'
,
 
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
t
a
s
k
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
6
0
0
5
'
,
 
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
t
a
s
k
'
)
)
 
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
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
1
)
 
{
 
/
/
 
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
 
o
n
l
y
 
u
s
e
r
 
t
a
s
k
s

	
	
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
6
0
0
5
'
,
 
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
t
a
s
k
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

	
	
n
o
_
t
a
s
k
_
s
e
t
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


	
i
f
 
(
!
A
J
A
X
C
A
L
L
 
&
&
 
$
n
o
_
h
t
m
l
 
=
=
 
0
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
0
0
6
1
'
)
;
 
/
/
 
R
u
n
 
o
u
t
 
o
f
 
t
r
i
g
g
e
r
 
p
o
i
n
t
s
.
 
I
l
l
o
g
i
c
a
l
l
y
 
n
o
w
,
 
6
0
 
t
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
 
t
o
p
 
t
e
m
p
l
a
t
e
,
 
6
1
 
t
h
e
 
b
o
t
t
o
m
 
t
e
m
p
l
a
t
e
.

	
}


 
 
 
 
/
/
r
e
s
e
t
 
l
a
n
g
u
a
g
e
 
a
n
d
 
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

 
 
 
 
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
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
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
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
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
s
-
>
r
e
s
e
t
_
l
a
n
g
_
a
n
d
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
(
)
;


 
 
 
 
/
/
t
r
i
g
g
e
r
 
9
9
9
9
4
 
e
v
e
n
t

	
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
9
9
9
9
4
'
)
;


	
/
/
g
e
n
e
r
a
t
e
 
t
h
e
 
c
p
a
n
e
l
 
m
e
n
u

 
 
 
 
i
f
 
(
!
A
J
A
X
C
A
L
L
 
&
&
 
$
n
o
_
h
t
m
l
 
=
=
 
0
 
&
&
 
!
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
o
p
u
p
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
9
9
9
7
'
,
 
'
m
e
n
u
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
}

	

	
/
/
t
r
i
g
g
e
r
 
9
9
9
9
8
 
e
v
e
n
t
 
-
 
j
o
m
r
e
s
 
f
e
e
d
b
a
c
k
 
m
e
s
s
a
g
e
s

	
i
f
 
(
!
A
J
A
X
C
A
L
L
 
&
&
 
$
n
o
_
h
t
m
l
 
=
=
 
0
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
9
9
9
9
8
'
)
;

	
}


 
 
 
 
/
/
t
r
i
g
g
e
r
 
9
9
9
9
9
 
e
v
e
n
t
:
 
O
p
t
i
o
n
a
l
 
e
n
d
 
r
u
n
 
s
c
r
i
p
t
s

 
 
 
 
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
9
9
9
9
9
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
c
l
o
s
e
/
s
a
v
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
c
l
o
s
e
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
(
)
;


 
 
 
 
i
f
 
(
!
A
J
A
X
C
A
L
L
 
&
&
 
$
n
o
_
h
t
m
l
 
=
=
 
0
 
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
'
 
]
 
=
=
 
'
1
'
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
l
o
g
 
a
s
 
$
l
o
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
L
o
g
 
:
'
.
$
l
o
g
.
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
A
f
t
e
r
 
u
p
d
a
t
i
n
g
 
j
q
u
e
r
y
 
u
i
 
t
o
 
1
.
9
.
3
 
w
e
 
s
t
a
r
t
e
d
 
s
e
e
i
n
g
 
a
 
p
r
o
b
l
e
m
 
w
h
e
r
e
 
t
h
e
 
e
n
t
i
r
e
 
s
i
t
e
 
w
o
u
l
d
 
b
e
 
r
e
l
o
a
d
e
d
 
i
n
t
o
 
t
h
e
 
j
q
u
e
r
y
 
t
a
b
s
.

 
 
 
 
/
/
 
h
t
t
p
:
/
/
s
t
a
c
k
o
v
e
r
f
l
o
w
.
c
o
m
/
q
u
e
s
t
i
o
n
s
/
1
3
8
3
7
3
0
4
/
j
q
u
e
r
y
-
u
i
-
n
o
n
-
a
j
a
x
-
t
a
b
-
l
o
a
d
i
n
g
-
w
h
o
l
e
-
w
e
b
s
i
t
e
-
i
n
t
o
-
i
t
s
e
l
f

 
 
 
 
/
/
 
a
c
c
o
r
d
i
n
g
 
t
o
 
h
t
t
p
:
/
/
b
u
g
s
.
j
q
u
e
r
y
u
i
.
c
o
m
/
t
i
c
k
e
t
/
7
8
2
2
 
t
h
i
s
 
p
r
o
b
l
e
m
 
w
i
l
l
 
n
o
t
 
b
e
 
"
f
i
x
e
d
"
 
i
n
 
j
q
u
e
r
y
,
 
s
o
 
w
e
'
l
l
 
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
 
t
h
e
 
b
a
s
e
 
t
a
g
 
f
r
o
m
 
J
o
o
m
l
a
'
s
 
o
u
t
p
u
t

 
 
 
 
/
/
 
T
h
i
s
 
p
a
g
e
 
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
e
l
t
e
.
n
l
/
n
i
e
u
w
s
/
2
4
-
j
o
o
m
l
a
-
r
e
m
o
v
e
-
b
a
s
e
-
h
r
e
f
 
s
u
g
g
e
s
t
s
 
r
e
m
o
v
i
n
g
 
t
h
e
 
b
a
s
e
 
t
a
g
 
f
o
r
 
S
E
O
 
r
e
a
s
o
n
s

 
 
 
 
/
/
 
M
o
r
e
 
r
e
a
d
i
n
g
 
h
t
t
p
s
:
/
/
g
r
o
u
p
s
.
g
o
o
g
l
e
.
c
o
m
/
f
o
r
u
m
/
?
f
r
o
m
g
r
o
u
p
s
=
#
!
t
o
p
i
c
/
j
o
o
m
l
a
-
d
e
v
e
l
/
H
O
H
z
z
n
e
5
H
Y
o

 
 
 
 
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
j
o
o
m
l
a
(
)
)
 
{

 
 
 
 
 
 
 
 
$
d
o
c
u
m
e
n
t
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
D
o
c
u
m
e
n
t
(
)
;

 
 
 
 
 
 
 
 
$
d
o
c
u
m
e
n
t
-
>
s
e
t
B
a
s
e
(
n
u
l
l
)
;

 
 
 
 
}


 
 
 
 
/
/
d
o
n
e

 
 
 
 
e
n
d
r
u
n
(
)
;

 
 
 
 
i
f
 
(
A
J
A
X
C
A
L
L
)
 
{

 
 
 
 
 
 
 
 
d
o
D
B
C
l
o
s
e
(
)
;

 
 
 
 
}


 
 
 
 
/
/
m
o
s
t
l
y
 
n
o
t
 
u
s
e
d
 
t
h
e
s
e
 
d
a
y
s

 
 
 
 
i
f
 
(
d
e
f
i
n
e
d
(
'
J
O
M
R
E
S
_
R
E
T
U
R
N
D
A
T
A
'
)
)
 
{

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
s
 
=
 
o
b
_
g
e
t
_
c
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

 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
s
 
=
 
$
h
e
a
d
_
c
o
n
t
e
n
t
s
.
$
c
o
n
t
e
n
t
s
;

 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
T
U
R
N
D
A
T
A
_
C
O
N
T
E
N
T
'
,
 
$
c
o
n
t
e
n
t
s
)
;

 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
c
o
n
t
e
n
t
s
)
;

 
 
 
 
 
 
 
 
o
b
_
e
n
d
_
c
l
e
a
n
(
)
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
o
b
_
e
n
d
_
f
l
u
s
h
(
)
;

 
 
 
 
}

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
9
9
9
9
4
'
)
;

	
	

	
/
/
g
e
n
e
r
a
t
e
 
t
h
e
 
c
p
a
n
e
l
 
m
e
n
u

	
i
f
 
(
!
A
J
A
X
C
A
L
L
 
&
&
 
$
n
o
_
h
t
m
l
 
=
=
 
0
 
&
&
 
!
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
o
p
u
p
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
9
9
9
7
'
,
 
'
m
e
n
u
'
,
 
a
r
r
a
y
(
)
)
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
9
9
9
9
9
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
 
O
p
t
i
o
n
a
l
 
e
n
d
 
r
u
n
 
s
c
r
i
p
t
s


 
 
 
 
o
u
t
p
u
t
_
f
a
t
a
l
_
e
r
r
o
r
(
$
e
)
;

}


/
/
 
S
c
r
i
p
t
 
s
t
o
p
s
 
h
e
r
e


f
u
n
c
t
i
o
n
 
n
o
_
t
a
s
k
_
s
e
t
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
 
=
 
0
)

{

 
 
 
 
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
'
)
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
 
!
=
 
'
'
 
|
|
 
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
l
i
s
t
p
a
g
e
'
 
]
)
)
 
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
6
0
0
0
'
,
 
"
s
e
a
r
c
h
"
)
;

 
 
 
 
}
 
e
l
s
e
 
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
6
0
0
1
'
,
 
'
c
p
a
n
e
l
'
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
)
 
=
=
 
1
 
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
0
'
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
t
a
s
k
'
,
 
'
v
i
e
w
p
r
o
p
e
r
t
y
'
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
6
0
0
0
'
,
 
'
v
i
e
w
p
r
o
p
e
r
t
y
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
 
e
l
s
e
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
[
 
0
 
]
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
2
0
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
t
a
s
k
'
,
 
'
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
6
0
0
0
'
,
 
"
s
e
a
r
c
h
"
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

/
/
 
J
o
m
r
e
s
 
4
.
7
.
8
 
s
t
r
i
p
s
 
B
O
M
 
f
r
o
m
 
a
l
l
 
a
r
e
a
s
 
o
f
 
t
h
e
 
o
u
t
p
u
t
,
 
n
o
t
 
j
u
s
t
 
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
.

f
u
n
c
t
i
o
n
 
r
e
m
o
v
e
B
O
M
(
$
s
t
r
 
=
 
'
'
)

{

 
 
 
 
$
b
o
m
 
=
 
p
a
c
k
(
'
C
C
C
'
,
 
0
x
e
f
,
 
0
x
b
b
,
 
0
x
b
f
)
;

 
 
 
 
$
s
t
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
$
b
o
m
,
 
'
'
,
 
$
s
t
r
)
;


 
 
 
 
r
e
t
u
r
n
 
$
s
t
r
;

}

