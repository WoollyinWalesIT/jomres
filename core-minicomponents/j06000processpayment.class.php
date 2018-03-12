
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

 
 
 
 
 
 
 
 
$
t
a
g
 
=
 
s
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


 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
 
=
 
j
o
m
r
e
s
_
v
a
l
i
d
a
t
e
_
g
a
t
e
w
a
y
_
p
l
u
g
i
n
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
 
`
i
d
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
 
`
t
a
g
`
 
=
 
'
"
.
$
t
a
g
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
'
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
'
 
=
>
 
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
,
 
'
t
m
p
g
u
e
s
t
'
 
=
>
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
 
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
'
"
,
 
"
'
'
"
,
 
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
a
t
a
)
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
 
`
d
a
t
a
`
=
'
"
.
$
d
a
t
a
.
"
'
,
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
 
`
t
a
g
`
 
=
 
'
"
.
$
t
a
g
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
5
9
9
'
,
 
a
r
r
a
y
(
'
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
'
 
=
>
 
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
)
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


 
 
 
 
 
 
 
 
/
/
 
W
e
'
l
l
 
l
e
t
 
b
o
o
k
i
n
g
s
 
o
f
 
0
 
v
a
l
u
e
 
p
a
s
s
e
d
 
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
 
p
l
u
g
i
n
 
h
a
n
d
l
i
n
g
 
a
s
 
s
o
m
e
 
u
s
e
r
s
 
o
f
f
e
r
 
1
0
0
%
 
d
i
s
c
o
u
n
t
s
 
v
i
a
 
c
o
u
p
o
n
s

 
 
 
 
 
 
 
 
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
d
a
t
a
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
=
 
0
.
0
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
 
=
 
'
N
A
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
p
l
u
g
i
n
 
!
=
 
'
N
A
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
 
i
d
,
p
l
u
g
i
n
 
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
l
u
g
i
n
s
e
t
t
i
n
g
s
 
W
H
E
R
E
 
(
p
r
i
d
 
=
 
'
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
 
O
R
 
p
r
i
d
 
=
 
0
)
 
 
A
N
D
 
`
p
l
u
g
i
n
`
 
=
 
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
p
l
u
g
i
n
.
"
'
 
A
N
D
 
s
e
t
t
i
n
g
 
=
 
'
a
c
t
i
v
e
'
 
A
N
D
 
v
a
l
u
e
 
=
 
'
1
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
D
e
e
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
g
a
t
e
w
a
y
D
e
e
t
s
)
)
 
{


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
t
e
r
r
u
p
t
e
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
i
n
t
e
r
r
u
p
t
e
d
'
,
 
0
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
t
e
r
r
u
p
t
O
u
t
g
o
i
n
g
F
i
l
e
 
=
 
f
a
l
s
e
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
e
v
e
n
t
F
i
l
e
L
o
c
a
t
e
(
'
0
0
6
0
0
'
,
 
$
p
l
u
g
i
n
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
t
e
r
r
u
p
t
O
u
t
g
o
i
n
g
F
i
l
e
 
=
 
'
j
0
0
6
0
0
'
.
$
p
l
u
g
i
n
.
'
.
c
l
a
s
s
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
g
o
i
n
g
F
i
l
e
 
=
 
'
j
0
0
6
0
5
'
.
$
p
l
u
g
i
n
.
'
.
c
l
a
s
s
.
p
h
p
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
t
e
r
r
u
p
t
O
u
t
g
o
i
n
g
F
i
l
e
 
&
&
 
$
i
n
t
e
r
r
u
p
t
e
d
 
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
0
6
0
0
'
,
 
$
p
l
u
g
i
n
,
 
a
r
r
a
y
(
'
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
'
 
=
>
 
$
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
 
=
>
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
/
/
I
n
t
e
r
r
u
p
t
 
o
u
t
g
o
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
l
s
e
 
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
0
6
0
5
'
,
 
$
p
l
u
g
i
n
,
 
a
r
r
a
y
(
'
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
'
 
=
>
 
$
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
 
=
>
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
/
/
o
u
t
g
o
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
n
s
e
r
t
I
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
 
f
a
l
s
e
,
 
$
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
P
a
g
e
R
e
q
u
i
r
e
d
 
=
 
t
r
u
e
,
 
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
F
o
r
C
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
F
o
r
m
 
=
 
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
n
s
e
r
t
I
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
 
f
a
l
s
e
,
 
$
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
P
a
g
e
R
e
q
u
i
r
e
d
 
=
 
t
r
u
e
,
 
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
F
o
r
C
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
F
o
r
m
 
=
 
'
'
)
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

