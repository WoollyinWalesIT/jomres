
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
2
2
0
2
a
_
u
p
d
a
t
e
_
i
n
v
o
i
c
e

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
 
g
e
t
D
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
(
)
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
U
i
d
 
=
 
i
n
t
v
a
l
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
P
O
S
T
,
 
'
c
o
n
t
r
a
c
t
U
i
d
'
,
 
0
)
)
;

	
	
$
d
e
p
o
s
i
t
R
e
f
 
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
P
O
S
T
,
 
'
d
e
p
o
s
i
t
R
e
f
'
,
 
'
'
)
)
;

	
	
$
p
a
y
m
e
n
t
_
m
e
t
h
o
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
P
O
S
T
,
 
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
,
 
'
'
)
)
;

	
	
$
t
r
a
n
s
a
c
t
i
o
n
_
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
P
O
S
T
,
 
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
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
c
o
n
t
r
a
c
t
U
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
i
s
 
a
 
s
e
c
u
r
i
t
y
 
c
h
e
c
k
 
b
e
c
a
u
s
e
 
w
e
 
d
o
n
'
t
 
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
 
a
s
s
o
c
i
a
t
e
d
 
w
i
t
h
 
i
n
v
o
i
c
e
s

 
 
 
 
 
 
 
 
 
 
 
 
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
,
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
o
n
t
r
a
c
t
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
U
i
d
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
u
i
d
 
=
 
'
.
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
r
e
c
e
i
v
e
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
P
O
S
T
,
 
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
c
e
i
v
e
d
'
,
 
0
.
0
0
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
d
a
y
 
=
 
o
u
t
p
u
t
D
a
t
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
)
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
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
i
d
 
=
 
$
i
n
v
o
i
c
e
-
>
g
e
t
_
i
n
v
o
i
c
e
_
i
d
_
b
y
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
U
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
g
e
t
I
n
v
o
i
c
e
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
s
 
=
 
a
r
r
a
y
(
'
t
a
x
_
c
o
d
e
_
i
d
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
n
a
m
e
'
 
=
>
 
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
E
N
T
E
R
E
D
D
E
P
O
S
I
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
M
R
_
A
U
D
I
T
_
E
N
T
E
R
E
D
D
E
P
O
S
I
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
(
'
.
$
t
o
d
a
y
.
'
 
-
 
R
e
f
:
 
'
.
$
d
e
p
o
s
i
t
R
e
f
.
'
)
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
p
r
i
c
e
'
 
=
>
 
0
 
-
 
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
c
e
i
v
e
d
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
q
t
y
'
 
=
>
 
1
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
s
_
p
a
y
m
e
n
t
'
 
=
>
 
1
,

	
	
	
	
	
	
	
	
	
	
 
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
 
=
>
 
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
,

	
	
	
	
	
	
	
	
	
	
 
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
 
=
>
 
$
t
r
a
n
s
a
c
t
i
o
n
_
i
d

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
a
d
d
_
l
i
n
e
_
i
t
e
m
(
$
l
i
n
e
_
i
t
e
m
s
)
;

	
	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
c
o
m
m
i
t
U
p
d
a
t
e
I
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
"
C
o
u
l
d
n
'
t
 
c
o
r
r
o
l
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
 
u
i
d
 
w
i
t
h
 
u
s
e
r
'
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
.
"
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


/
*
*

 
*
 
M
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

 
#

 
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
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
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
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
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
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
-
>
m
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
D
a
t
a
[
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

 
*
/

 
 
 
 
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

