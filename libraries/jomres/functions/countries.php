
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
n
t
a
i
n
s
 
c
o
u
n
t
r
i
e
s
 
r
e
l
a
t
e
d
 
f
u
n
c
t
i
o
n
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

*
 
U
s
e
s
 
t
h
e
 
j
o
m
r
e
s
_
c
o
u
n
t
r
i
e
s
 
s
i
n
g
l
e
t
o
n
 
t
o
 
g
e
t
 
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
s

*
 

*
 
R
e
t
u
r
n
s
 
t
r
a
n
s
l
a
t
e
d
 
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
s
 
w
h
e
n
 
p
a
s
s
e
d
 
a
 
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
 
(
e
.
g
.
 
G
B
 
o
r
 
E
S
 
)

*

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
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
=
 
'
'
)

{

	
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
e
d
C
o
u
n
t
r
y
 
=
=
 
'
'
)
 
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
u
n
t
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
c
o
u
n
t
r
i
e
s
'
)
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
C
o
u
n
t
r
y
 
=
 
s
t
r
t
o
u
p
p
e
r
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
C
o
u
n
t
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
j
o
m
r
e
s
_
c
o
u
n
t
r
i
e
s
-
>
u
s
e
d
_
c
o
u
n
t
r
i
e
s
[
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
]
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
)
)
 
{

	
	
r
e
t
u
r
n
 
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
u
n
t
r
i
e
s
-
>
u
s
e
d
_
c
o
u
n
t
r
i
e
s
[
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
]
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
;

	
}
 
e
l
s
e
 
{
 
/
/
t
h
i
s
 
s
h
o
u
l
d
n
`
t
 
u
s
u
a
l
l
y
 
h
a
p
p
e
n

	
	
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
u
n
t
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
c
o
u
n
t
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
i
s
s
e
t
(
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
u
n
t
r
i
e
s
-
>
c
o
u
n
t
r
i
e
s
[
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
]
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
)
)
 
{

	
	
	
r
e
t
u
r
n
 
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
u
n
t
r
i
e
s
-
>
c
o
u
n
t
r
i
e
s
[
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
]
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
;

	
	
}

	
}

	

	
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


/
*
*

*

*
 
U
s
e
d
 
i
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
 
t
a
b
 
t
o
 
c
r
e
a
t
e
 
a
 
d
r
o
p
d
o
w
n
 
o
f
 
c
o
u
n
t
r
i
e
s

*
 

*
 
T
h
i
s
 
p
r
o
p
e
r
t
y
 
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
 
d
r
o
p
d
o
w
n
 
a
l
l
o
w
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
 
m
a
n
a
g
e
r
 
t
o
 
c
h
o
o
s
e
 
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
 
c
o
u
n
t
r
y
 
t
o
 
b
e
 
s
h
o
w
n
 
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
.
 
I
f
 
n
o
t
 
a
l
r
e
a
d
y
 
s
e
t
,
 
t
h
e
 
s
y
s
t
e
m
 
w
i
l
l
 
a
t
t
e
m
p
t
 
t
o
 
u
s
e
 
t
h
e
 
g
e
o
-
l
o
c
a
t
e
d
 
c
o
u
n
t
r
y
 
o
f
 
t
h
e
 
u
s
e
r
 
a
s
 
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

*

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
 
c
o
n
f
i
g
C
o
u
n
t
r
i
e
s
(
)

{

 
 
 
 
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
d
e
f
a
u
l
t
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
 
|
|
 
e
m
p
t
y
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
d
e
f
a
u
l
t
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
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
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
g
e
o
l
o
c
a
t
e
d
_
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

 
 
 
 
}
 
e
l
s
e
 
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
C
o
u
n
t
r
y
 
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
d
e
f
a
u
l
t
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
C
o
u
n
t
r
y
 
=
 
s
t
r
t
o
u
p
p
e
r
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
C
o
u
n
t
r
y
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
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
r
i
e
s
(
)
;


 
 
 
 
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
j
o
m
r
e
s
_
c
o
u
n
t
r
i
e
s
-
>
c
o
u
n
t
r
i
e
s
 
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

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
c
o
u
n
t
r
y
[
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
]
,
 
$
c
o
u
n
t
r
y
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
)
;

 
 
 
 
}


 
 
 
 
$
c
o
u
n
t
r
y
D
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
'
c
f
g
_
d
e
f
a
u
l
t
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
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
'
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
t
e
x
t
'
,
 
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
)
;


 
 
 
 
r
e
t
u
r
n
 
$
c
o
u
n
t
r
y
D
r
o
p
d
o
w
n
;

}


/
*
*

*

*
 
C
r
e
a
t
e
s
 
a
 
c
o
u
n
t
r
i
e
s
 
d
r
o
p
d
o
w
n

*
 

*
 
U
s
e
d
 
i
n
 
n
u
m
e
r
o
u
s
 
p
l
a
c
e
s
,
 
p
a
s
s
 
i
t
 
t
h
e
 
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
 
a
n
d
 
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
 
i
n
p
u
t
 
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
 
f
o
r
m
 
e
l
e
m
e
n
t
.
 
T
h
e
 
j
o
m
r
e
s
_
c
o
u
n
t
r
i
e
s
 
s
i
n
g
l
e
t
o
n
 
c
r
e
a
t
e
s
 
a
 
l
i
s
t
 
o
f
 
c
o
u
n
t
r
i
e
s
 
(
i
n
c
l
u
d
i
n
g
 
t
r
a
n
s
l
a
t
i
o
n
 
o
f
 
t
h
e
 
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
s
 
)
.
 

*

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
 
c
r
e
a
t
e
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
i
e
s
D
r
o
p
d
o
w
n
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
C
o
u
n
t
r
y
 
=
 
'
'
,
 
$
i
n
p
u
t
_
n
a
m
e
 
=
 
'
g
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
'
)

{

 
 
 
 
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
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
)
 
|
|
 
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
=
=
 
'
'
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
C
o
u
n
t
r
y
 
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
d
e
f
a
u
l
t
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
C
o
u
n
t
r
y
 
=
 
s
t
r
t
o
u
p
p
e
r
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
C
o
u
n
t
r
y
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
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
r
i
e
s
(
)
;


 
 
 
 
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
j
o
m
r
e
s
_
c
o
u
n
t
r
i
e
s
-
>
c
o
u
n
t
r
i
e
s
 
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

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
c
o
u
n
t
r
y
[
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
]
,
 
$
c
o
u
n
t
r
y
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
)
;

 
 
 
 
}


 
 
 
 
$
c
o
u
n
t
r
y
D
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
$
i
n
p
u
t
_
n
a
m
e
,
 
'
'
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
t
e
x
t
'
,
 
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
)
;


 
 
 
 
r
e
t
u
r
n
 
$
c
o
u
n
t
r
y
D
r
o
p
d
o
w
n
;

}


/
*
*

*

*
 
C
r
e
a
t
e
s
 
a
 
c
o
u
n
t
r
i
e
s
 
d
r
o
p
d
o
w
n

*
 

*
 
U
s
e
d
 
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
u
r
a
t
i
o
n
.
 
A
l
l
o
w
s
 
t
h
e
 
s
i
t
e
 
m
a
n
a
g
e
r
 
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
e
 
a
 
s
i
n
g
l
e
 
c
o
u
n
t
r
y
 
t
h
a
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
 
m
u
s
t
 
e
x
i
s
t
i
n
g
 
i
n
 
w
h
e
n
 
t
h
e
y
 
a
r
e
 
c
r
e
a
t
e
d
 
o
r
 
m
o
d
i
f
i
e
d
.

*

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
 
l
i
m
i
t
C
o
u
n
t
r
i
e
s
D
r
o
p
d
o
w
n
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
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
r
i
e
s
(
)
;


 
 
 
 
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
j
o
m
r
e
s
_
c
o
u
n
t
r
i
e
s
-
>
c
o
u
n
t
r
i
e
s
 
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

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
c
o
u
n
t
r
y
[
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
]
,
 
$
c
o
u
n
t
r
y
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
)
;

 
 
 
 
}

	

 
 
 
 
$
c
o
u
n
t
r
y
D
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
'
c
f
g
_
l
i
m
i
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
c
o
u
n
t
r
y
_
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
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
'
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
t
e
x
t
'
,
 
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
l
i
m
i
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
c
o
u
n
t
r
y
_
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


 
 
 
 
r
e
t
u
r
n
 
$
c
o
u
n
t
r
y
D
r
o
p
d
o
w
n
;

}


/
*
*

*

*
 
C
r
e
a
t
e
s
 
a
 
c
o
u
n
t
r
i
e
s
 
d
r
o
p
d
o
w
n
 
t
h
a
t
 
a
d
d
s
 
o
n
C
h
a
n
g
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
 
s
o
 
t
h
a
t
 
a
n
 
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
 
r
e
g
i
o
n
 
d
r
o
p
d
o
w
n
 
w
i
l
l
 
b
e
 
u
p
d
a
t
e
d
 

*

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
 
c
r
e
a
t
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
D
r
o
p
d
o
w
n
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
C
o
u
n
t
r
y
,
 
$
i
n
p
u
t
_
n
a
m
e
 
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
,
 
$
i
n
c
l
u
d
e
_
o
n
c
h
a
n
g
e
 
=
 
t
r
u
e
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
C
o
u
n
t
r
y
 
=
 
s
t
r
t
o
u
p
p
e
r
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
C
o
u
n
t
r
y
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
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
r
i
e
s
(
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
D
r
o
p
d
o
w
n
 
=
 
'
<
s
e
l
e
c
t
 
i
d
=
"
'
.
$
i
n
p
u
t
_
n
a
m
e
.
'
"
 
n
a
m
e
=
"
'
.
$
i
n
p
u
t
_
n
a
m
e
.
'
"
 
c
l
a
s
s
=
"
f
o
r
m
-
c
o
n
t
r
o
l
"
 
'
;

 
 
 
 

	
i
f
 
(
$
i
n
c
l
u
d
e
_
o
n
c
h
a
n
g
e
)
 
{

 
 
 
 
 
 
 
 
$
c
o
u
n
t
r
y
D
r
o
p
d
o
w
n
 
.
=
 
'
o
n
c
h
a
n
g
e
=
"
O
n
C
h
a
n
g
e
(
t
h
i
s
.
f
o
r
m
.
'
.
$
i
n
p
u
t
_
n
a
m
e
.
'
)
"
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
o
u
n
t
r
y
D
r
o
p
d
o
w
n
 
.
=
 
'
>
'
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
j
o
m
r
e
s
_
c
o
u
n
t
r
i
e
s
-
>
c
o
u
n
t
r
i
e
s
 
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
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
!
=
 
'
'
 
&
&
 
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
=
=
 
$
c
o
u
n
t
r
y
[
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
]
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
 
=
 
'
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}

	
	
$
c
o
u
n
t
r
y
D
r
o
p
d
o
w
n
 
.
=
 
'
<
o
p
t
i
o
n
 
v
a
l
u
e
=
"
'
.
$
c
o
u
n
t
r
y
[
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
]
.
'
"
 
'
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
.
'
 
>
'
.
$
c
o
u
n
t
r
y
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
.
'
<
/
o
p
t
i
o
n
>
'
;

 
 
 
 
}

	

	
$
c
o
u
n
t
r
y
D
r
o
p
d
o
w
n
 
.
=
 
'
<
/
s
e
l
e
c
t
>
'
;


 
 
 
 
r
e
t
u
r
n
 
$
c
o
u
n
t
r
y
D
r
o
p
d
o
w
n
;

}


/
*
*

*

*
 
B
u
i
l
d
s
 
a
 
r
e
g
i
o
n
 
n
a
m
e
 
d
r
o
p
d
o
w
n

*
 

*
 
P
a
s
s
 
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
 
a
n
d
 
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
 
r
e
g
i
o
n
.
 
F
i
r
s
t
 
b
l
a
n
k
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
h
a
v
e
 
t
h
e
 
f
i
r
s
t
 
r
e
g
i
o
n
 
t
o
 
b
e
 
b
l
a
n
k
,
 
a
n
d
 
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
 
i
n
p
u
t
 
n
a
m
e

*

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
c
o
u
n
t
r
y
C
o
d
e
 
=
 
'
G
B
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
R
e
g
i
o
n
 
=
 
'
P
e
m
b
r
o
k
e
s
h
i
r
e
'
,
 
$
f
i
r
s
t
B
l
a
n
k
 
=
 
f
a
l
s
e
,
 
$
i
n
p
u
t
_
n
a
m
e
 
=
 
'
r
e
g
i
o
n
'
)

{

 
 
 
 
$
r
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
r
e
g
i
o
n
D
r
o
p
d
o
w
n
 
=
 
'
'
;

	

	
i
f
 
(
$
c
o
u
n
t
r
y
C
o
d
e
 
=
=
 
'
'
)
 
{

	
	
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
c
o
u
n
t
r
y
C
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
d
e
f
a
u
l
t
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

	
}

 
 
 
 

	
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
c
o
u
n
t
r
y
_
r
e
g
i
o
n
s
(
$
c
o
u
n
t
r
y
C
o
d
e
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
m
e
r
i
c
(
$
c
u
r
r
e
n
t
R
e
g
i
o
n
)
)
 
{
 
/
/
 
T
h
i
s
 
a
l
l
o
w
s
 
u
s
 
t
o
 
t
r
a
n
s
i
t
i
o
n
 
f
r
o
m
 
u
s
i
n
g
 
r
e
g
i
o
n
 
n
a
m
e
s
 
i
n
 
t
h
e
 
d
r
o
p
d
o
w
n
'
s
 
v
a
l
u
e
 
f
i
e
l
d
,
 
t
o
 
r
e
g
i
o
n
 
i
d
s
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
g
i
o
n
A
r
r
a
y
 
a
s
 
$
i
d
 
=
>
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
 
=
=
 
$
c
u
r
r
e
n
t
R
e
g
i
o
n
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
R
e
g
i
o
n
 
=
 
$
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
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
R
e
g
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
d
e
c
o
d
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
R
e
g
i
o
n
)
;

 
 
 
 
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

 
 
 
 
 
 
 
 
n
a
t
c
a
s
e
s
o
r
t
(
$
r
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

 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
r
s
t
B
l
a
n
k
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
'
,
 
'
'
)
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
g
i
o
n
A
r
r
a
y
 
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
r
e
g
i
o
n
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
k
,
 
$
v
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
D
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
r
e
g
i
o
n
s
,
 
$
i
n
p
u
t
_
n
a
m
e
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
'
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
t
e
x
t
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
R
e
g
i
o
n
)
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
g
i
o
n
D
r
o
p
d
o
w
n
;

}


/
*
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
 
r
e
g
i
o
n
 
n
a
m
e
s
 
g
r
o
u
p
e
d
 
b
y
 
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
s

*
 

*
 
U
s
e
d
 
b
y
 
t
h
e
 
i
n
s
t
a
l
l
e
r
 
w
h
e
n
 
c
r
e
a
t
i
n
g
 
a
 
n
e
w
 
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
 
o
f
 
J
o
m
r
e
s
.

*

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
 
r
e
g
i
o
n
N
a
m
e
s
A
r
r
a
y
(
)

{

 
 
 
 
$
F
I
P
S
 
=
 
a
r
r
a
y
(
'
A
D
'
 
=
>
 
a
r
r
a
y
(
'
C
a
n
i
l
l
o
'
,
 
'
E
n
c
a
m
p
'
,
 
'
L
a
 
M
a
s
s
a
n
a
'
,
 
'
O
r
d
i
n
o
'
,
 
'
S
a
n
t
 
J
u
l
i
a
 
d
e
 
L
o
r
i
a
'
,
 
'
A
n
d
o
r
r
a
 
l
a
 
V
e
l
l
a
'
,
 
'
E
s
c
a
l
d
e
s
-
E
n
g
o
r
d
a
n
y
'
)
,
 
'
A
E
'
 
=
>
 
a
r
r
a
y
(
'
A
b
u
 
D
h
a
b
i
'
,
 
'
D
u
b
a
i
'
,
 
'
A
j
m
a
n
'
,
 
'
F
u
j
a
i
r
a
h
'
,
 
'
R
a
s
 
a
l
-
K
h
a
i
m
a
h
'
,
 
'
S
h
a
r
j
a
h
'
,
 
'
U
m
m
 
a
l
-
Q
u
w
a
i
n
'
)
,
 
'
A
F
'
 
=
>
 
a
r
r
a
y
(
'
B
a
d
a
k
h
s
h
a
n
'
,
 
'
B
a
d
g
h
i
s
'
,
 
'
B
a
g
h
l
a
n
'
,
 
'
B
a
m
i
a
n
'
,
 
'
F
a
r
a
h
'
,
 
'
F
a
r
y
a
b
'
,
 
'
G
h
a
z
n
i
'
,
 
'
G
h
o
w
r
'
,
 
'
H
e
l
m
a
n
d
'
,
 
'
H
e
r
a
t
'
,
 
'
K
a
b
o
l
'
,
 
'
K
a
p
i
s
a
'
,
 
'
K
o
n
a
r
'
,
 
'
L
a
g
h
m
a
n
'
,
 
'
L
o
w
g
a
r
'
,
 
'
N
a
n
g
a
r
h
a
r
'
,
 
'
N
i
m
r
u
z
'
,
 
'
O
r
u
z
g
a
n
'
,
 
'
P
a
k
t
i
a
'
,
 
'
P
a
r
v
a
n
'
,
 
'
K
a
n
d
a
h
a
r
'
,
 
'
K
o
n
d
o
z
'
,
 
'
T
a
k
h
a
r
'
,
 
'
V
a
r
d
a
k
'
,
 
'
Z
a
b
o
l
'
,
 
'
P
a
k
t
i
k
a
'
,
 
'
B
a
l
k
h
'
,
 
'
J
o
w
z
j
a
n
'
,
 
'
S
a
m
a
n
g
a
n
'
,
 
'
S
a
r
-
e
 
P
o
l
'
)
,
 
'
A
G
'
 
=
>
 
a
r
r
a
y
(
'
B
a
r
b
u
d
a
'
,
 
'
S
t
.
 
G
e
o
r
g
e
'
,
 
'
S
t
.
 
J
o
h
n
'
,
 
'
S
t
.
 
M
a
r
y
'
,
 
'
S
t
.
 
P
a
u
l
'
,
 
'
S
t
.
 
P
e
t
e
r
'
,
 
'
S
t
.
 
P
h
i
l
i
p
'
)
,
 
'
A
L
'
 
=
>
 
a
r
r
a
y
(
'
B
e
r
a
t
'
,
 
'
D
i
b
e
r
'
,
 
'
D
u
r
r
e
s
'
,
 
'
E
l
b
a
s
a
n
'
,
 
'
F
i
e
r
'
,
 
'
G
j
i
r
o
k
a
s
t
e
r
'
,
 
'
G
r
a
m
s
h
'
,
 
'
K
o
l
o
n
j
e
'
,
 
'
K
o
r
c
e
'
,
 
'
K
r
u
j
e
'
,
 
'
K
u
k
e
s
'
,
 
'
L
e
z
h
e
'
,
 
'
L
i
b
r
a
z
h
d
'
,
 
'
L
u
s
h
n
j
e
'
,
 
'
M
a
t
'
,
 
'
M
i
r
d
i
t
e
'
,
 
'
P
e
r
m
e
t
'
,
 
'
P
o
g
r
a
d
e
c
'
,
 
'
P
u
k
e
'
,
 
'
S
a
r
a
n
d
e
'
,
 
'
S
h
k
o
d
e
r
'
,
 
'
S
k
r
a
p
a
r
'
,
 
'
T
e
p
e
l
e
n
e
'
,
 
'
T
r
o
p
o
j
e
'
,
 
'
V
l
o
r
e
'
,
 
'
T
i
r
a
n
e
'
,
 
'
B
u
l
q
i
z
e
'
,
 
'
D
e
l
v
i
n
e
'
,
 
'
D
e
v
o
l
l
'
,
 
'
H
a
s
'
,
 
'
K
a
v
a
j
e
'
,
 
'
K
u
c
o
v
e
'
,
 
'
K
u
r
b
i
n
'
,
 
'
M
a
l
e
s
i
 
e
 
M
a
d
h
e
'
,
 
'
M
a
l
l
a
k
a
s
t
e
r
'
,
 
'
P
e
q
i
n
'
,
 
'
T
i
r
a
n
e
'
)
,
 
'
A
M
'
 
=
>
 
a
r
r
a
y
(
'
A
r
a
g
a
t
s
o
t
n
'
,
 
'
A
r
a
r
a
t
'
,
 
'
A
r
m
a
v
i
r
'
,
 
"
G
e
g
h
a
r
k
'
u
n
i
k
'
"
,
 
"
K
o
t
a
y
k
'
"
,
 
'
L
o
r
r
i
'
,
 
'
S
h
i
r
a
k
'
,
 
"
S
y
u
n
i
k
'
"
,
 
'
T
a
v
u
s
h
'
,
 
"
V
a
y
o
t
s
'
 
D
z
o
r
"
,
 
'
Y
e
r
e
v
a
n
'
)
,
 
'
A
O
'
 
=
>
 
a
r
r
a
y
(
'
B
e
n
g
u
e
l
a
'
,
 
'
B
i
e
'
,
 
'
C
a
b
i
n
d
a
'
,
 
'
C
u
a
n
d
o
 
C
u
b
a
n
g
o
'
,
 
'
C
u
a
n
z
a
 
N
o
r
t
e
'
,
 
'
C
u
a
n
z
a
 
S
u
l
'
,
 
'
C
u
n
e
n
e
'
,
 
'
H
u
a
m
b
o
'
,
 
'
H
u
i
l
a
'
,
 
'
M
a
l
a
n
j
e
'
,
 
'
M
o
x
i
c
o
'
,
 
'
U
i
g
e
'
,
 
'
Z
a
i
r
e
'
,
 
'
L
u
n
d
a
 
N
o
r
t
e
'
,
 
'
L
u
n
d
a
 
S
u
l
'
,
 
'
B
e
n
g
o
'
,
 
'
L
u
a
n
d
a
'
)
,
 
'
A
R
'
 
=
>
 
a
r
r
a
y
(
'
B
u
e
n
o
s
 
A
i
r
e
s
'
,
 
'
C
a
t
a
m
a
r
c
a
'
,
 
'
C
h
a
c
o
'
,
 
'
C
h
u
b
u
t
'
,
 
'
C
o
r
d
o
b
a
'
,
 
'
C
o
r
r
i
e
n
t
e
s
'
,
 
'
D
i
s
t
r
i
t
o
 
F
e
d
e
r
a
l
'
,
 
'
E
n
t
r
e
 
R
i
o
s
'
,
 
'
F
o
r
m
o
s
a
'
,
 
'
J
u
j
u
y
'
,
 
'
L
a
 
P
a
m
p
a
'
,
 
'
L
a
 
R
i
o
j
a
'
,
 
'
M
e
n
d
o
z
a
'
,
 
'
M
i
s
i
o
n
e
s
'
,
 
'
N
e
u
q
u
e
n
'
,
 
'
R
i
o
 
N
e
g
r
o
'
,
 
'
S
a
l
t
a
'
,
 
'
S
a
n
 
J
u
a
n
'
,
 
'
S
a
n
 
L
u
i
s
'
,
 
'
S
a
n
t
a
 
C
r
u
z
'
,
 
'
S
a
n
t
a
 
F
e
'
,
 
'
S
a
n
t
i
a
g
o
 
d
e
l
 
E
s
t
e
r
o
'
,
 
'
T
i
e
r
r
a
 
d
e
l
 
F
u
e
g
o
'
,
 
'
T
u
c
u
m
a
n
'
)
,
 
'
A
T
'
 
=
>
 
a
r
r
a
y
(
'
B
u
r
g
e
n
l
a
n
d
'
,
 
'
K
a
r
n
t
e
n
'
,
 
'
N
i
e
d
e
r
o
s
t
e
r
r
e
i
c
h
'
,
 
'
O
b
e
r
o
s
t
e
r
r
e
i
c
h
'
,
 
'
S
a
l
z
b
u
r
g
'
,
 
'
S
t
e
i
e
r
m
a
r
k
'
,
 
'
T
i
r
o
l
'
,
 
'
V
o
r
a
r
l
b
e
r
g
'
,
 
'
W
i
e
n
'
)
,
 
'
A
U
'
 
=
>
 
a
r
r
a
y
(
'
A
u
s
t
r
a
l
i
a
n
 
C
a
p
i
t
a
l
 
T
e
r
r
i
t
o
r
y
'
,
 
'
N
e
w
 
S
.
 
W
a
l
e
s
'
,
 
'
N
.
 
T
e
r
r
i
t
o
r
y
'
,
 
'
Q
u
e
e
n
s
l
a
n
d
'
,
 
'
S
.
 
A
u
s
t
r
a
l
i
a
'
,
 
'
T
a
s
m
a
n
i
a
'
,
 
'
V
i
c
t
o
r
i
a
'
,
 
'
W
.
 
A
u
s
t
r
a
l
i
a
'
)
,
 
'
A
Z
'
 
=
>
 
a
r
r
a
y
(
'
A
b
s
e
r
o
n
'
,
 
'
A
g
c
a
b
a
d
i
'
,
 
'
A
g
d
a
m
'
,
 
'
A
g
d
a
s
'
,
 
'
A
g
s
t
a
f
a
'
,
 
'
A
g
s
u
'
,
 
'
A
l
i
 
B
a
y
r
a
m
l
i
'
,
 
'
A
s
t
a
r
a
'
,
 
'
B
a
k
i
'
,
 
'
B
a
l
a
k
a
n
'
,
 
'
B
a
r
d
a
'
,
 
'
B
e
y
l
a
q
a
n
'
,
 
'
B
i
l
a
s
u
v
a
r
'
,
 
'
C
a
b
r
a
y
i
l
'
,
 
'
C
a
l
i
l
a
b
a
d
'
,
 
'
D
a
s
k
a
s
a
n
'
,
 
'
D
a
v
a
c
i
'
,
 
'
F
u
z
u
l
i
'
,
 
'
G
a
d
a
b
a
y
'
,
 
'
G
a
n
c
a
'
,
 
'
G
o
r
a
n
b
o
y
'
,
 
'
G
o
y
c
a
y
'
,
 
'
H
a
c
i
q
a
b
u
l
'
,
 
'
I
m
i
s
l
i
'
,
 
'
I
s
m
a
y
i
l
l
i
'
,
 
'
K
a
l
b
a
c
a
r
'
,
 
'
K
u
r
d
a
m
i
r
'
,
 
'
L
a
c
i
n
'
,
 
'
L
a
n
k
a
r
a
n
'
,
 
'
L
a
n
k
a
r
a
n
'
,
 
'
L
e
r
i
k
'
,
 
'
M
a
s
a
l
l
i
'
,
 
'
M
i
n
g
a
c
e
v
i
r
'
,
 
'
N
a
f
t
a
l
a
n
'
,
 
'
N
a
x
c
i
v
a
n
'
,
 
'
N
e
f
t
c
a
l
a
'
,
 
'
O
g
u
z
'
,
 
'
Q
a
b
a
l
a
'
,
 
'
Q
a
x
'
,
 
'
Q
a
z
a
x
'
,
 
'
Q
o
b
u
s
t
a
n
'
,
 
'
Q
u
b
a
'
,
 
'
Q
u
b
a
d
l
i
'
,
 
'
Q
u
s
a
r
'
,
 
'
S
a
a
t
l
i
'
,
 
'
S
a
b
i
r
a
b
a
d
'
,
 
'
S
a
k
i
'
,
 
'
S
a
k
i
'
,
 
'
S
a
l
y
a
n
'
,
 
'
S
a
m
a
x
i
'
,
 
'
S
a
m
k
i
r
'
,
 
'
S
a
m
u
x
'
,
 
'
S
i
y
a
z
a
n
'
,
 
'
S
u
m
q
a
y
i
t
'
,
 
'
S
u
s
a
'
,
 
'
T
a
r
t
a
r
'
,
 
'
T
o
v
u
z
'
,
 
'
U
c
a
r
'
,
 
'
X
a
c
m
a
z
'
,
 
'
X
a
n
k
a
n
d
i
'
,
 
'
X
a
n
l
a
r
'
,
 
'
X
i
z
i
'
,
 
'
X
o
c
a
l
i
'
,
 
'
X
o
c
a
v
a
n
d
'
,
 
'
Y
a
r
d
i
m
l
i
'
,
 
'
Y
e
v
l
a
x
'
,
 
'
Y
e
v
l
a
x
'
,
 
'
Z
a
n
g
i
l
a
n
'
,
 
'
Z
a
q
a
t
a
l
a
'
,
 
'
Z
a
r
d
a
b
'
)
,
 
'
B
A
'
 
=
>
 
a
r
r
a
y
(
'
F
e
d
e
r
a
t
i
o
n
 
o
f
 
B
o
s
n
i
a
 
H
e
r
z
'
,
 
'
R
.
u
b
l
i
k
a
 
S
r
p
s
k
a
'
)
,
 
'
B
B
'
 
=
>
 
a
r
r
a
y
(
'
C
h
r
i
s
t
 
C
h
u
r
c
h
'
,
 
'
S
t
.
 
A
n
d
r
e
w
'
,
 
'
S
t
.
 
G
e
o
r
g
e
'
,
 
'
S
t
.
 
J
a
m
e
s
'
,
 
'
S
t
.
 
J
o
h
n
'
,
 
'
S
t
.
 
J
o
s
e
p
h
'
,
 
'
S
t
.
 
L
u
c
y
'
,
 
'
S
t
.
 
M
i
c
h
a
e
l
'
,
 
'
S
t
.
 
P
e
t
e
r
'
,
 
'
S
t
.
 
P
h
i
l
i
p
'
,
 
'
S
t
.
 
T
h
o
m
a
s
'
)
,
 
'
B
D
'
 
=
>
 
a
r
r
a
y
(
'
B
a
r
i
s
a
l
'
,
 
'
B
a
n
d
a
r
b
a
n
'
,
 
'
C
o
m
i
l
l
a
'
,
 
'
M
y
m
e
n
s
i
n
g
h
'
,
 
'
N
o
a
k
h
a
l
i
'
,
 
'
P
a
t
u
a
k
h
a
l
i
'
,
 
'
B
a
g
e
r
h
a
t
'
,
 
'
B
h
o
l
a
'
,
 
'
B
o
g
r
a
'
,
 
'
B
a
r
g
u
n
a
'
,
 
'
B
r
a
h
m
a
n
b
a
r
i
a
'
,
 
'
C
h
a
n
d
p
u
r
'
,
 
'
C
h
a
p
a
i
 
N
a
w
a
b
g
a
n
j
'
,
 
'
C
h
a
t
t
a
g
r
a
m
'
,
 
'
C
h
u
a
d
a
n
g
a
'
,
 
"
C
o
x
'
s
 
B
a
z
a
r
"
,
 
'
D
h
a
k
a
'
,
 
'
D
i
n
a
j
p
u
r
'
,
 
'
F
a
r
i
d
p
u
r
'
,
 
'
F
e
n
i
'
,
 
'
G
a
i
b
a
n
d
h
a
'
,
 
'
G
a
z
i
p
u
r
'
,
 
'
G
o
p
a
l
g
a
n
j
'
,
 
'
H
a
b
i
g
a
n
j
'
,
 
'
J
a
i
p
u
r
h
a
t
'
,
 
'
J
a
m
a
l
p
u
r
'
,
 
'
J
e
s
s
o
r
e
'
,
 
'
J
h
a
l
a
k
a
t
i
'
,
 
'
J
h
e
n
a
i
d
a
h
'
,
 
'
K
h
a
g
r
a
c
h
a
r
i
'
,
 
'
K
h
u
l
n
a
'
,
 
'
K
i
s
h
o
r
g
a
n
j
'
,
 
'
K
u
r
i
g
r
a
m
'
,
 
'
K
u
s
h
t
i
a
'
,
 
'
L
a
k
s
m
i
p
u
r
'
,
 
'
L
a
l
m
o
n
i
r
h
a
t
'
,
 
'
M
a
d
a
r
i
p
u
r
'
,
 
'
M
a
g
u
r
a
'
,
 
'
M
a
n
i
k
g
a
n
j
'
,
 
'
M
e
h
e
r
p
u
r
'
,
 
'
M
o
u
l
a
v
i
b
a
z
a
r
'
,
 
'
M
u
n
s
h
i
g
a
n
j
'
,
 
'
N
a
o
g
a
o
n
'
,
 
'
N
a
r
a
i
l
'
,
 
'
N
a
r
a
y
a
n
g
a
n
j
'
,
 
'
N
a
r
s
i
n
g
d
i
'
,
 
'
N
a
t
o
r
'
,
 
'
N
e
t
r
a
k
o
n
a
'
,
 
'
N
i
l
p
h
a
m
a
r
i
'
,
 
'
P
a
b
n
a
'
,
 
'
P
a
n
c
h
a
g
a
r
'
,
 
'
P
a
r
b
a
t
t
y
a
 
C
h
a
t
t
a
g
r
a
m
'
,
 
'
P
i
r
o
j
p
u
r
'
,
 
'
R
a
j
b
a
r
i
'
,
 
'
R
a
j
s
h
a
h
i
'
,
 
'
R
a
n
g
p
u
r
'
,
 
'
S
a
t
k
h
i
r
a
'
,
 
'
S
h
a
r
i
y
a
t
p
u
r
'
,
 
'
S
h
e
r
p
u
r
'
,
 
'
S
i
r
a
j
g
a
n
j
'
,
 
'
S
u
n
a
m
g
a
n
j
'
,
 
'
S
y
l
h
e
t
'
,
 
'
T
a
n
g
a
i
l
'
,
 
'
T
h
a
k
u
r
g
a
o
n
'
)
,
 
'
B
E
'
 
=
>
 
a
r
r
a
y
(
'
A
n
t
w
e
r
p
e
n
'
,
 
'
B
r
a
b
a
n
t
'
,
 
'
H
a
i
n
a
u
t
'
,
 
'
L
i
e
g
e
'
,
 
'
L
i
m
b
u
r
g
'
,
 
'
L
u
x
e
m
b
o
u
r
g
'
,
 
'
N
a
m
u
r
'
,
 
'
O
o
s
t
-
V
l
a
a
n
d
e
r
e
n
'
,
 
'
W
e
s
t
-
V
l
a
a
n
d
e
r
e
n
'
,
 
'
B
r
a
b
a
n
t
 
W
a
l
l
o
n
'
,
 
'
B
r
u
s
s
e
l
s
 
H
o
o
f
d
s
t
e
d
e
l
i
j
k
 
G
e
w
e
s
t
'
,
 
'
V
l
a
a
m
s
-
B
r
a
b
a
n
t
'
)
,
 
'
B
F
'
 
=
>
 
a
r
r
a
y
(
'
B
a
m
'
,
 
'
B
a
z
e
g
a
'
,
 
'
B
o
u
g
o
u
r
i
b
a
'
,
 
'
B
o
u
l
g
o
u
'
,
 
'
B
o
u
l
k
i
e
m
d
e
'
,
 
'
G
a
n
z
o
u
r
g
o
u
'
,
 
'
G
n
a
g
n
a
'
,
 
'
G
o
u
r
m
a
'
,
 
'
H
o
u
e
t
'
,
 
'
K
a
d
i
o
g
o
'
,
 
'
K
e
n
e
d
o
u
g
o
u
'
,
 
'
K
o
m
o
e
'
,
 
'
K
o
s
s
i
'
,
 
'
K
o
u
r
i
t
e
n
g
a
'
,
 
'
M
o
u
h
o
u
n
'
,
 
'
N
a
m
e
n
t
e
n
g
a
'
,
 
'
N
a
o
u
r
i
'
,
 
'
O
u
b
r
i
t
e
n
g
a
'
,
 
'
O
u
d
a
l
a
n
'
,
 
'
P
a
s
s
o
r
e
'
,
 
'
P
o
n
i
'
,
 
'
S
a
n
g
u
i
e
'
,
 
'
S
a
n
m
a
t
e
n
g
a
'
,
 
'
S
e
n
o
'
,
 
'
S
i
s
s
i
l
i
'
,
 
'
S
o
u
m
'
,
 
'
S
o
u
r
o
u
'
,
 
'
T
a
p
o
a
'
,
 
'
Y
a
t
e
n
g
a
'
,
 
'
Z
o
u
n
d
w
e
o
g
o
'
)
,
 
'
B
G
'
 
=
>
 
a
r
r
a
y
(
'
M
i
k
h
a
y
l
o
v
g
r
a
d
'
,
 
'
B
l
a
g
o
e
v
g
r
a
d
'
,
 
'
B
u
r
g
a
s
'
,
 
'
D
o
b
r
i
c
h
'
,
 
'
G
a
b
r
o
v
o
'
,
 
'
G
r
a
d
 
S
o
f
i
y
a
'
,
 
'
K
h
a
s
k
o
v
o
'
,
 
'
K
u
r
d
z
h
a
l
i
'
,
 
'
K
y
u
s
t
e
n
d
i
l
'
,
 
'
L
o
v
e
c
h
'
,
 
'
M
o
n
t
a
n
a
'
,
 
'
P
a
z
a
r
d
z
h
i
k
'
,
 
'
P
e
r
n
i
k
'
,
 
'
P
l
e
v
e
n
'
,
 
'
P
l
o
v
d
i
v
'
,
 
'
R
a
z
g
r
a
d
'
,
 
'
R
u
s
e
'
,
 
'
S
h
u
m
e
n
'
,
 
'
S
i
l
i
s
t
r
a
'
,
 
'
S
l
i
v
e
n
'
,
 
'
S
m
o
l
y
a
n
'
,
 
'
S
o
f
i
y
a
'
,
 
'
S
t
a
r
a
 
Z
a
g
o
r
a
'
,
 
'
T
u
r
g
o
v
i
s
h
t
e
'
,
 
'
V
a
r
n
a
'
,
 
'
V
e
l
i
k
o
 
T
u
r
n
o
v
o
'
,
 
'
V
i
d
i
n
'
,
 
'
V
r
a
t
s
a
'
,
 
'
Y
a
m
b
o
l
'
)
,
 
'
B
H
'
 
=
>
 
a
r
r
a
y
(
'
A
l
 
H
a
d
d
'
,
 
'
A
l
 
M
a
n
a
m
a
h
'
,
 
'
A
l
 
M
u
h
a
r
r
a
q
'
,
 
'
J
i
d
d
 
H
a
f
s
'
,
 
'
S
i
t
r
a
h
'
,
 
'
A
l
 
M
i
n
t
a
q
a
h
 
a
l
 
G
h
a
r
b
i
y
a
h
'
,
 
'
M
i
n
t
a
q
a
t
 
J
u
z
u
r
 
H
a
w
a
r
'
,
 
'
A
l
 
M
i
n
t
a
q
a
h
 
a
s
h
 
S
h
a
m
a
l
i
y
a
h
'
,
 
'
A
l
 
M
i
n
t
a
q
a
h
 
a
l
 
W
u
s
t
a
'
,
 
'
M
a
d
i
n
a
t
'
,
 
'
A
r
 
R
i
f
a
'
,
 
'
M
a
d
i
n
a
t
 
H
a
m
a
d
'
)
,
 
'
B
I
'
 
=
>
 
a
r
r
a
y
(
'
B
u
j
u
m
b
u
r
a
'
,
 
'
B
u
b
a
n
z
a
'
,
 
'
B
u
r
u
r
i
'
,
 
'
C
a
n
k
u
z
o
'
,
 
'
C
i
b
i
t
o
k
e
'
,
 
'
G
i
t
e
g
a
'
,
 
'
K
a
r
u
z
i
'
,
 
'
K
a
y
a
n
z
a
'
,
 
'
K
i
r
u
n
d
o
'
,
 
'
M
a
k
a
m
b
a
'
,
 
'
M
u
y
i
n
g
a
'
,
 
'
N
g
o
z
i
'
,
 
'
R
u
t
a
n
a
'
,
 
'
R
u
y
i
g
i
'
,
 
'
M
u
r
a
m
v
y
a
'
,
 
'
M
w
a
r
o
'
)
,
 
'
B
J
'
 
=
>
 
a
r
r
a
y
(
'
A
t
a
k
o
r
a
'
,
 
'
A
t
l
a
n
t
i
q
u
e
'
,
 
'
B
o
r
g
o
u
'
,
 
'
M
o
n
o
'
,
 
'
O
u
e
m
e
'
,
 
'
Z
o
u
'
)
,
 
'
B
M
'
 
=
>
 
a
r
r
a
y
(
'
D
e
v
o
n
s
h
i
r
e
'
,
 
'
H
a
m
i
l
t
o
n
'
,
 
'
H
a
m
i
l
t
o
n
'
,
 
'
P
a
g
e
t
'
,
 
'
P
e
m
b
r
o
k
e
'
,
 
'
S
t
.
 
G
e
o
r
g
e
'
,
 
"
S
t
.
 
G
e
o
r
g
e
'
s
"
,
 
'
S
a
n
d
y
s
'
,
 
'
S
m
i
t
h
s
'
,
 
'
S
.
a
m
p
t
o
n
'
,
 
'
W
a
r
w
i
c
k
'
)
,
 
'
B
N
'
 
=
>
 
a
r
r
a
y
(
'
B
e
l
a
i
t
'
,
 
'
B
r
u
n
e
i
 
a
n
d
 
M
u
a
r
a
'
,
 
'
T
e
m
b
u
r
o
n
g
'
,
 
'
T
u
t
o
n
g
'
)
,
 
'
B
O
'
 
=
>
 
a
r
r
a
y
(
'
C
h
u
q
u
i
s
a
c
a
'
,
 
'
C
o
c
h
a
b
a
m
b
a
'
,
 
'
E
l
 
B
e
n
i
'
,
 
'
L
a
 
P
a
z
'
,
 
'
O
r
u
r
o
'
,
 
'
P
a
n
d
o
'
,
 
'
P
o
t
o
s
i
'
,
 
'
S
a
n
t
a
 
C
r
u
z
'
,
 
'
T
a
r
i
j
a
'
)
,
 
'
B
R
'
 
=
>
 
a
r
r
a
y
(
'
A
c
r
e
'
,
 
'
A
l
a
g
o
a
s
'
,
 
'
A
m
a
p
a
'
,
 
'
A
m
a
z
o
n
a
s
'
,
 
'
B
a
h
i
a
'
,
 
'
C
e
a
r
a
'
,
 
'
D
i
s
t
r
i
t
o
 
F
e
d
e
r
a
l
'
,
 
'
E
s
p
i
r
i
t
o
 
S
a
n
t
o
'
,
 
'
M
a
t
o
 
G
r
o
s
s
o
 
d
o
 
S
u
l
'
,
 
'
M
a
r
a
n
h
a
o
'
,
 
'
M
a
t
o
 
G
r
o
s
s
o
'
,
 
'
M
i
n
a
s
 
G
e
r
a
i
s
'
,
 
'
P
a
r
a
'
,
 
'
P
a
r
a
i
b
a
'
,
 
'
P
a
r
a
n
a
'
,
 
'
P
i
a
u
i
'
,
 
'
R
i
o
 
d
e
 
J
a
n
e
i
r
o
'
,
 
'
R
i
o
 
G
r
a
n
d
e
 
d
o
 
N
o
r
t
e
'
,
 
'
R
i
o
 
G
r
a
n
d
e
 
d
o
 
S
u
l
'
,
 
'
R
o
n
d
o
n
i
a
'
,
 
'
R
o
r
a
i
m
a
'
,
 
'
S
a
n
t
a
 
C
a
t
a
r
i
n
a
'
,
 
'
S
a
o
 
P
a
u
l
o
'
,
 
'
S
e
r
g
i
p
e
'
,
 
'
G
o
i
a
s
'
,
 
'
P
e
r
n
a
m
b
u
c
o
'
,
 
'
T
o
c
a
n
t
i
n
s
'
)
,
 
'
B
S
'
 
=
>
 
a
r
r
a
y
(
'
B
i
m
i
n
i
'
,
 
'
C
a
t
 
I
s
.
'
,
 
'
E
x
u
m
a
'
,
 
'
I
n
a
g
u
a
'
,
 
'
L
o
n
g
 
I
s
.
'
,
 
'
M
a
y
a
g
u
a
n
a
'
,
 
'
R
a
g
g
e
d
 
I
s
.
'
,
 
'
H
a
r
b
o
u
r
 
I
s
.
'
,
 
'
N
e
w
 
P
r
o
v
i
d
e
n
c
e
'
,
 
'
A
c
k
l
i
n
s
 
a
n
d
 
C
r
o
o
k
e
d
 
I
s
.
'
,
 
'
F
r
e
e
p
o
r
t
'
,
 
'
F
r
e
s
h
 
C
r
e
e
k
'
,
 
"
G
o
v
e
r
n
o
r
'
s
 
H
a
r
b
o
u
r
"
,
 
'
G
r
e
e
n
 
T
u
r
t
l
e
 
C
a
y
'
,
 
'
H
i
g
h
 
R
o
c
k
'
,
 
'
K
e
m
p
s
 
B
a
y
'
,
 
'
M
a
r
s
h
 
H
a
r
b
o
u
r
'
,
 
'
N
i
c
h
o
l
l
s
t
o
w
n
 
a
n
d
 
B
e
r
r
y
 
I
s
.
'
,
 
'
R
o
c
k
 
S
o
u
n
d
'
,
 
'
S
a
n
d
y
 
P
o
i
n
t
'
,
 
'
S
a
n
 
S
a
l
v
a
d
o
r
 
a
n
d
 
R
u
m
 
C
a
y
'
)
,
 
'
B
T
'
 
=
>
 
a
r
r
a
y
(
'
B
u
m
t
h
a
n
g
'
,
 
'
C
h
h
u
k
h
a
'
,
 
'
C
h
i
r
a
n
g
'
,
 
'
D
a
g
a
'
,
 
'
G
e
y
l
e
g
p
h
u
g
'
,
 
'
H
a
'
,
 
'
L
h
u
n
t
s
h
i
'
,
 
'
M
o
n
g
a
r
'
,
 
'
P
a
r
o
'
,
 
'
P
e
m
a
g
a
t
s
e
l
'
,
 
'
P
u
n
a
k
h
a
'
,
 
'
S
a
m
c
h
i
'
,
 
'
S
a
m
d
r
u
p
'
,
 
'
S
h
e
m
g
a
n
g
'
,
 
'
T
a
s
h
i
g
a
n
g
'
,
 
'
T
h
i
m
p
h
u
'
,
 
'
T
o
n
g
s
a
'
,
 
'
W
a
n
g
d
i
 
P
h
o
d
r
a
n
g
'
)
,
 
'
B
W
'
 
=
>
 
a
r
r
a
y
(
'
C
e
n
t
r
a
l
'
,
 
'
C
h
o
b
e
'
,
 
'
G
h
a
n
z
i
'
,
 
'
K
g
a
l
a
g
a
d
i
'
,
 
'
K
g
a
t
l
e
n
g
'
,
 
'
K
w
e
n
e
n
g
'
,
 
'
N
g
a
m
i
l
a
n
d
'
,
 
'
N
o
r
t
h
-
E
a
s
t
'
,
 
'
S
.
-
E
a
s
t
'
,
 
'
S
.
e
r
n
'
)
,
 
'
B
Y
'
 
=
>
 
a
r
r
a
y
(
"
B
r
e
s
t
s
k
a
y
a
 
V
o
b
l
a
s
t
s
'
"
,
 
"
H
o
m
y
e
l
'
s
k
a
y
a
 
V
o
b
l
a
s
t
s
'
"
,
 
"
H
r
o
d
z
y
e
n
s
k
a
y
a
 
V
o
b
l
a
s
t
s
'
"
,
 
'
M
i
n
s
k
'
,
 
"
M
i
n
s
k
a
y
a
 
V
o
b
l
a
s
t
s
'
"
,
 
"
M
a
h
i
l
y
o
w
s
k
a
y
a
 
V
o
b
l
a
s
t
s
'
"
,
 
"
V
i
t
s
y
e
b
s
k
a
y
a
 
V
o
b
l
a
s
t
s
'
"
)
,
 
'
B
Z
'
 
=
>
 
a
r
r
a
y
(
'
B
e
l
i
z
e
'
,
 
'
C
a
y
o
'
,
 
'
C
o
r
o
z
a
l
'
,
 
'
O
r
a
n
g
e
 
W
a
l
k
'
,
 
'
S
t
a
n
n
 
C
r
e
e
k
'
,
 
'
T
o
l
e
d
o
'
)
,
 
'
C
A
'
 
=
>
 
a
r
r
a
y
(
'
A
l
b
e
r
t
a
'
,
 
'
B
r
i
t
i
s
h
 
C
o
l
u
m
b
i
a
'
,
 
'
M
a
n
i
t
o
b
a
'
,
 
'
N
e
w
 
B
r
u
n
s
w
i
c
k
'
,
 
'
N
e
w
f
o
u
n
d
l
a
n
d
'
,
 
'
N
o
v
a
 
S
c
o
t
i
a
'
,
 
'
N
u
n
a
v
u
t
'
,
 
'
O
n
t
a
r
i
o
'
,
 
'
P
r
i
n
c
e
 
E
d
w
a
r
d
 
I
s
.
'
,
 
'
Q
u
e
b
e
c
'
,
 
'
S
a
s
k
a
t
c
h
e
w
a
n
'
,
 
'
N
o
r
t
h
w
e
s
t
 
T
e
r
r
i
t
o
r
i
e
s
'
,
 
'
Y
u
k
o
n
 
T
e
r
r
i
t
o
r
y
'
)
,
 
'
C
F
'
 
=
>
 
a
r
r
a
y
(
'
B
a
m
i
n
g
u
i
-
B
a
n
g
o
r
a
n
'
,
 
'
B
a
s
s
e
-
K
o
t
t
o
'
,
 
'
H
a
u
t
e
-
K
o
t
t
o
'
,
 
'
H
a
u
t
e
-
S
a
n
g
h
a
'
,
 
'
H
a
u
t
-
M
b
o
m
o
u
'
,
 
'
K
e
m
o
-
G
r
i
b
i
n
g
u
i
'
,
 
'
L
o
b
a
y
e
'
,
 
'
M
b
o
m
o
u
'
,
 
'
N
a
n
a
-
M
a
m
b
e
r
e
'
,
 
'
O
u
a
k
a
'
,
 
'
O
u
h
a
m
'
,
 
'
O
u
h
a
m
-
P
e
n
d
e
'
,
 
'
V
a
k
a
g
a
'
,
 
'
G
r
i
b
i
n
g
u
i
'
,
 
'
S
a
n
g
h
a
'
,
 
'
O
m
b
e
l
l
a
-
M
p
o
k
o
'
,
 
'
B
a
n
g
u
i
'
)
,
 
'
C
G
'
 
=
>
 
a
r
r
a
y
(
'
B
o
u
e
n
z
a
'
,
 
'
C
u
v
e
t
t
e
'
,
 
'
K
o
u
i
l
o
u
'
,
 
'
L
e
k
o
u
m
o
u
'
,
 
'
L
i
k
o
u
a
l
a
'
,
 
'
N
i
a
r
i
'
,
 
'
P
l
a
t
e
a
u
x
'
,
 
'
S
a
n
g
h
a
'
,
 
'
P
o
o
l
'
,
 
'
B
r
a
z
z
a
v
i
l
l
e
'
)
,
 
'
C
H
'
 
=
>
 
a
r
r
a
y
(
'
A
a
r
g
a
u
'
,
 
'
A
u
s
s
e
r
-
R
h
o
d
e
n
'
,
 
'
B
a
s
e
l
-
L
a
n
d
s
c
h
a
f
t
'
,
 
'
B
a
s
e
l
-
S
t
a
d
t
'
,
 
'
B
e
r
n
'
,
 
'
F
r
i
b
o
u
r
g
'
,
 
'
G
e
n
e
v
e
'
,
 
'
G
l
a
r
u
s
'
,
 
'
G
r
a
u
b
u
n
d
e
n
'
,
 
'
I
n
n
e
r
-
R
h
o
d
e
n
'
,
 
'
L
u
z
e
r
n
'
,
 
'
N
e
u
c
h
a
t
e
l
'
,
 
'
N
i
d
w
a
l
d
e
n
'
,
 
'
O
b
w
a
l
d
e
n
'
,
 
'
S
a
n
k
t
 
G
a
l
l
e
n
'
,
 
'
S
c
h
a
f
f
h
a
u
s
e
n
'
,
 
'
S
c
h
w
y
z
'
,
 
'
S
o
l
o
t
h
u
r
n
'
,
 
'
T
h
u
r
g
a
u
'
,
 
'
T
i
c
i
n
o
'
,
 
'
U
r
i
'
,
 
'
V
a
l
a
i
s
'
,
 
'
V
a
u
d
'
,
 
'
Z
u
g
'
,
 
'
Z
u
r
i
c
h
'
,
 
'
J
u
r
a
'
)
,
 
'
C
I
'
 
=
>
 
a
r
r
a
y
(
'
A
b
e
n
g
o
u
r
o
u
'
,
 
'
D
a
b
a
k
a
l
a
'
,
 
'
A
d
z
o
p
e
'
,
 
'
A
g
b
o
v
i
l
l
e
'
,
 
'
B
i
a
n
k
o
u
m
a
'
,
 
'
B
o
u
n
a
'
,
 
'
B
o
u
n
d
i
a
l
i
'
,
 
'
D
a
n
a
n
e
'
,
 
'
D
i
v
o
'
,
 
'
F
e
r
k
e
s
s
e
d
o
u
g
o
u
'
,
 
'
G
a
g
n
o
a
'
,
 
'
K
a
t
i
o
l
a
'
,
 
'
K
o
r
h
o
g
o
'
,
 
'
O
d
i
e
n
n
e
'
,
 
'
S
e
g
u
e
l
a
'
,
 
'
T
o
u
b
a
'
,
 
'
B
o
n
g
o
u
a
n
o
u
'
,
 
'
I
s
s
i
a
'
,
 
'
L
a
k
o
t
a
'
,
 
'
M
a
n
k
o
n
o
'
,
 
'
O
u
m
e
'
,
 
'
S
o
u
b
r
e
'
,
 
'
T
i
n
g
r
e
l
a
'
,
 
'
Z
u
e
n
o
u
l
a
'
,
 
'
B
a
n
g
o
l
o
'
,
 
'
B
e
o
u
m
i
'
,
 
'
B
o
n
d
o
u
k
o
u
'
,
 
'
B
o
u
a
f
l
e
'
,
 
'
B
o
u
a
k
e
'
,
 
'
D
a
l
o
a
'
,
 
'
D
a
o
u
k
r
o
'
,
 
'
D
u
e
k
o
u
e
'
,
 
'
G
r
a
n
d
-
L
a
h
o
u
'
,
 
'
M
a
n
'
,
 
'
M
b
a
h
i
a
k
r
o
'
,
 
'
S
a
k
a
s
s
o
u
'
,
 
'
S
a
n
 
P
e
d
r
o
'
,
 
'
S
a
s
s
a
n
d
r
a
'
,
 
'
S
i
n
f
r
a
'
,
 
'
T
a
b
o
u
'
,
 
'
T
a
n
d
a
'
,
 
'
T
i
a
s
s
a
l
e
'
,
 
'
T
o
u
m
o
d
i
'
,
 
'
V
a
v
o
u
a
'
,
 
'
A
b
i
d
j
a
n
'
,
 
'
A
b
o
i
s
s
o
'
,
 
'
A
d
i
a
k
e
'
,
 
'
A
l
e
p
e
'
,
 
'
B
o
c
a
n
d
a
'
,
 
'
D
a
b
o
u
'
,
 
'
D
i
m
b
o
k
r
o
'
,
 
'
G
r
a
n
d
-
B
a
s
s
a
m
'
,
 
'
G
u
i
g
l
o
'
,
 
'
J
a
c
q
u
e
v
i
l
l
e
'
,
 
'
T
i
e
b
i
s
s
o
u
'
,
 
'
T
o
u
l
e
p
l
e
u
'
,
 
'
Y
a
m
o
u
s
s
o
u
k
r
o
'
)
,
 
'
C
L
'
 
=
>
 
a
r
r
a
y
(
'
V
a
l
p
a
r
a
i
s
o
'
,
 
'
A
i
s
e
n
 
d
e
l
 
G
e
n
e
r
a
l
 
C
a
r
l
o
s
 
I
b
a
n
e
z
 
d
e
l
 
C
a
m
p
o
'
,
 
'
A
n
t
o
f
a
g
a
s
t
a
'
,
 
'
A
r
a
u
c
a
n
i
a
'
,
 
'
A
t
a
c
a
m
a
'
,
 
'
B
i
o
-
B
i
o
'
,
 
'
C
o
q
u
i
m
b
o
'
,
 
"
L
i
b
e
r
t
a
d
o
r
 
G
e
n
e
r
a
l
 
B
e
r
n
a
r
d
o
 
O
'
H
i
g
g
i
n
s
"
,
 
'
L
o
s
 
L
a
g
o
s
'
,
 
'
M
a
g
a
l
l
a
n
e
s
 
y
 
d
e
 
l
a
 
A
n
t
a
r
t
i
c
a
 
C
h
i
l
e
n
a
'
,
 
'
M
a
u
l
e
'
,
 
'
R
e
g
i
o
n
 
M
e
t
r
o
p
o
l
i
t
a
n
a
'
,
 
'
T
a
r
a
p
a
c
a
'
)
,
 
'
C
M
'
 
=
>
 
a
r
r
a
y
(
'
E
s
t
'
,
 
'
L
i
t
t
o
r
a
l
'
,
 
'
N
o
r
d
-
O
u
e
s
t
'
,
 
'
O
u
e
s
t
'
,
 
'
S
u
d
-
O
u
e
s
t
'
,
 
'
A
d
a
m
a
o
u
a
'
,
 
'
C
e
n
t
r
e
'
,
 
'
E
x
t
r
e
m
e
-
N
o
r
d
'
,
 
'
N
o
r
d
'
,
 
'
S
u
d
'
)
,
 
'
C
N
'
 
=
>
 
a
r
r
a
y
(
'
A
n
h
u
i
'
,
 
'
Z
h
e
j
i
a
n
g
'
,
 
'
J
i
a
n
g
x
i
'
,
 
'
J
i
a
n
g
s
u
'
,
 
'
J
i
l
i
n
'
,
 
'
Q
i
n
g
h
a
i
'
,
 
'
F
u
j
i
a
n
'
,
 
'
H
e
i
l
o
n
g
j
i
a
n
g
'
,
 
'
H
e
n
a
n
'
,
 
'
H
e
b
e
i
'
,
 
'
H
u
n
a
n
'
,
 
'
H
u
b
e
i
'
,
 
'
X
i
n
j
i
a
n
g
'
,
 
'
X
i
z
a
n
g
'
,
 
'
G
a
n
s
u
'
,
 
'
G
u
a
n
g
x
i
'
,
 
'
G
u
i
z
h
o
u
'
,
 
'
L
i
a
o
n
i
n
g
'
,
 
'
N
e
i
 
M
o
n
g
o
l
'
,
 
'
N
i
n
g
x
i
a
'
,
 
'
B
e
i
j
i
n
g
'
,
 
'
S
h
a
n
g
h
a
i
'
,
 
'
S
h
a
n
x
i
'
,
 
'
S
h
a
n
d
o
n
g
'
,
 
'
S
h
a
a
n
x
i
'
,
 
'
S
i
c
h
u
a
n
'
,
 
'
T
i
a
n
j
i
n
'
,
 
'
Y
u
n
n
a
n
'
,
 
'
G
u
a
n
g
d
o
n
g
'
,
 
'
H
a
i
n
a
n
'
)
,
 
'
C
O
'
 
=
>
 
a
r
r
a
y
(
'
A
m
a
z
o
n
a
s
'
,
 
'
A
n
t
i
o
q
u
i
a
'
,
 
'
A
r
a
u
c
a
'
,
 
'
A
t
l
a
n
t
i
c
o
'
,
 
'
C
a
q
u
e
t
a
'
,
 
'
C
a
u
c
a
'
,
 
'
C
e
s
a
r
'
,
 
'
C
h
o
c
o
'
,
 
'
C
o
r
d
o
b
a
'
,
 
'
G
u
a
v
i
a
r
e
'
,
 
'
G
u
a
i
n
i
a
'
,
 
'
H
u
i
l
a
'
,
 
'
L
a
 
G
u
a
j
i
r
a
'
,
 
'
M
e
t
a
'
,
 
'
N
a
r
i
n
o
'
,
 
'
N
o
r
t
e
 
d
e
 
S
a
n
t
a
n
d
e
r
'
,
 
'
P
u
t
u
m
a
y
o
'
,
 
'
Q
u
i
n
d
i
o
'
,
 
'
R
i
s
a
r
a
l
d
a
'
,
 
'
S
a
n
 
A
n
d
r
e
s
 
y
 
P
r
o
v
i
d
e
n
c
i
a
'
,
 
'
S
a
n
t
a
n
d
e
r
'
,
 
'
S
u
c
r
e
'
,
 
'
T
o
l
i
m
a
'
,
 
'
V
a
l
l
e
 
d
e
l
 
C
a
u
c
a
'
,
 
'
V
a
u
p
e
s
'
,
 
'
V
i
c
h
a
d
a
'
,
 
'
C
a
s
a
n
a
r
e
'
,
 
'
C
u
n
d
i
n
a
m
a
r
c
a
'
,
 
'
D
i
s
t
r
i
t
o
 
E
s
p
e
c
i
a
l
'
,
 
'
B
o
l
i
v
a
r
'
,
 
'
B
o
y
a
c
a
'
,
 
'
C
a
l
d
a
s
'
,
 
'
M
a
g
d
a
l
e
n
a
'
)
,
 
'
C
R
'
 
=
>
 
a
r
r
a
y
(
'
A
l
a
j
u
e
l
a
'
,
 
'
C
a
r
t
a
g
o
'
,
 
'
G
u
a
n
a
c
a
s
t
e
'
,
 
'
H
e
r
e
d
i
a
'
,
 
'
L
i
m
o
n
'
,
 
'
P
u
n
t
a
r
e
n
a
s
'
,
 
'
S
a
n
 
J
o
s
e
'
)
,
 
'
C
U
'
 
=
>
 
a
r
r
a
y
(
'
P
i
n
a
r
 
d
e
l
 
R
i
o
'
,
 
'
C
i
u
d
a
d
 
d
e
 
l
a
 
H
a
b
a
n
a
'
,
 
'
M
a
t
a
n
z
a
s
'
,
 
'
I
s
l
a
 
d
e
 
l
a
 
J
u
v
e
n
t
u
d
'
,
 
'
C
a
m
a
g
u
e
y
'
,
 
'
C
i
e
g
o
 
d
e
 
A
v
i
l
a
'
,
 
'
C
i
e
n
f
u
e
g
o
s
'
,
 
'
G
r
a
n
m
a
'
,
 
'
G
u
a
n
t
a
n
a
m
o
'
,
 
'
L
a
 
H
a
b
a
n
a
'
,
 
'
H
o
l
g
u
i
n
'
,
 
'
L
a
s
 
T
u
n
a
s
'
,
 
'
S
a
n
c
t
i
 
S
p
i
r
i
t
u
s
'
,
 
'
S
a
n
t
i
a
g
o
 
d
e
 
C
u
b
a
'
,
 
'
V
i
l
l
a
 
C
l
a
r
a
'
)
,
 
'
C
V
'
 
=
>
 
a
r
r
a
y
(
'
B
o
a
 
V
i
s
t
a
'
,
 
'
B
r
a
v
a
'
,
 
'
F
o
g
o
'
,
 
'
M
a
i
o
'
,
 
'
P
a
u
l
'
,
 
'
P
r
a
i
a
'
,
 
'
R
i
b
e
i
r
a
 
G
r
a
n
d
e
'
,
 
'
S
a
l
'
,
 
'
S
a
n
t
a
 
C
a
t
a
r
i
n
a
'
,
 
'
S
a
o
 
N
i
c
o
l
a
u
'
,
 
'
S
a
o
 
V
i
c
e
n
t
e
'
,
 
'
T
a
r
r
a
f
a
l
'
)
,
 
'
C
Y
'
 
=
>
 
a
r
r
a
y
(
'
F
a
m
a
g
u
s
t
a
'
,
 
'
K
y
r
e
n
i
a
'
,
 
'
L
a
r
n
a
c
a
'
,
 
'
N
i
c
o
s
i
a
'
,
 
'
L
i
m
a
s
s
o
l
'
,
 
'
P
a
p
h
o
s
'
)
,
 
'
C
Z
'
 
=
>
 
a
r
r
a
y
(
'
H
l
a
v
n
i
 
M
e
s
t
o
 
P
r
a
h
a
'
,
 
'
J
i
h
o
m
o
r
a
v
s
k
y
 
K
r
a
j
'
,
 
'
J
i
h
o
c
e
s
k
y
 
K
r
a
j
'
,
 
'
V
y
s
o
c
i
n
a
'
,
 
'
K
a
r
l
o
v
a
r
s
k
y
 
K
r
a
j
'
,
 
'
K
r
a
l
o
v
e
h
r
a
d
e
c
k
y
 
K
r
a
j
'
,
 
'
L
i
b
e
r
e
c
k
y
 
K
r
a
j
'
,
 
'
O
l
o
m
o
u
c
k
y
 
K
r
a
j
'
,
 
'
M
o
r
a
v
s
k
o
s
l
e
z
s
k
y
 
K
r
a
j
'
,
 
'
P
a
r
d
u
b
i
c
k
y
 
K
r
a
j
'
,
 
'
P
l
z
e
n
s
k
y
 
K
r
a
j
'
,
 
'
S
t
r
e
d
o
c
e
s
k
y
 
K
r
a
j
'
,
 
'
U
s
t
e
c
k
y
 
K
r
a
j
'
,
 
'
Z
l
i
n
s
k
y
 
K
r
a
j
'
)
,
 
'
D
E
'
 
=
>
 
a
r
r
a
y
(
'
B
a
d
e
n
-
W
u
r
t
t
e
m
b
e
r
g
'
,
 
'
B
a
y
e
r
n
'
,
 
'
B
r
e
m
e
n
'
,
 
'
H
a
m
b
u
r
g
'
,
 
'
H
e
s
s
e
n
'
,
 
'
N
i
e
d
e
r
s
a
c
h
s
e
n
'
,
 
'
N
o
r
d
r
h
e
i
n
-
W
e
s
t
f
a
l
e
n
'
,
 
'
R
h
e
i
n
l
a
n
d
-
P
f
a
l
z
'
,
 
'
S
a
a
r
l
a
n
d
'
,
 
'
S
c
h
l
e
s
w
i
g
-
H
o
l
s
t
e
i
n
'
,
 
'
B
r
a
n
d
e
n
b
u
r
g
'
,
 
'
M
e
c
k
l
e
n
b
u
r
g
-
V
o
r
p
o
m
m
e
r
n
'
,
 
'
S
a
c
h
s
e
n
'
,
 
'
S
a
c
h
s
e
n
-
A
n
h
a
l
t
'
,
 
'
T
h
u
r
i
n
g
e
n
'
,
 
'
B
e
r
l
i
n
'
)
,
 
'
D
J
'
 
=
>
 
a
r
r
a
y
(
'
D
i
k
h
i
l
'
,
 
'
D
j
i
b
o
u
t
i
'
,
 
'
O
b
o
c
k
'
,
 
'
T
a
d
j
o
u
r
a
'
)
,
 
'
D
K
'
 
=
>
 
a
r
r
a
y
(
'
A
r
h
u
s
'
,
 
'
B
o
r
n
h
o
l
m
'
,
 
'
F
r
e
d
e
r
i
k
s
b
o
r
g
'
,
 
'
F
y
n
'
,
 
'
K
o
b
e
n
h
a
v
n
'
,
 
'
S
t
a
d
e
n
 
K
o
b
e
n
h
a
v
n
'
,
 
'
N
o
r
d
j
y
l
l
a
n
d
'
,
 
'
R
i
b
e
'
,
 
'
R
i
n
g
k
o
b
i
n
g
'
,
 
'
R
o
s
k
i
l
d
e
'
,
 
'
S
o
n
d
e
r
j
y
l
l
a
n
d
'
,
 
'
S
t
o
r
s
t
r
o
m
'
,
 
'
V
e
j
l
e
'
,
 
'
V
e
s
t
s
j
a
l
l
a
n
d
'
,
 
'
V
i
b
o
r
g
'
)
,
 
'
D
M
'
 
=
>
 
a
r
r
a
y
(
'
S
t
.
 
A
n
d
r
e
w
'
,
 
'
S
t
.
 
D
a
v
i
d
'
,
 
'
S
t
.
 
G
e
o
r
g
e
'
,
 
'
S
t
.
 
J
o
h
n
'
,
 
'
S
t
.
 
J
o
s
e
p
h
'
,
 
'
S
t
.
 
L
u
k
e
'
,
 
'
S
t
.
 
M
a
r
k
'
,
 
'
S
t
.
 
P
a
t
r
i
c
k
'
,
 
'
S
t
.
 
P
a
u
l
'
,
 
'
S
t
.
 
P
e
t
e
r
'
)
,
 
'
D
O
'
 
=
>
 
a
r
r
a
y
(
'
A
z
u
a
'
,
 
'
B
a
o
r
u
c
o
'
,
 
'
B
a
r
a
h
o
n
a
'
,
 
'
D
a
j
a
b
o
n
'
,
 
'
D
i
s
t
r
i
t
o
 
N
a
c
i
o
n
a
l
'
,
 
'
D
u
a
r
t
e
'
,
 
'
E
s
p
a
i
l
l
a
t
'
,
 
'
I
n
d
e
p
e
n
d
e
n
c
i
a
'
,
 
'
L
a
 
A
l
t
a
g
r
a
c
i
a
'
,
 
'
E
l
i
a
s
 
P
i
n
a
'
,
 
'
L
a
 
R
o
m
a
n
a
'
,
 
'
M
a
r
i
a
 
T
r
i
n
i
d
a
d
 
S
a
n
c
h
e
z
'
,
 
'
M
o
n
t
e
 
C
r
i
s
t
i
'
,
 
'
P
e
d
e
r
n
a
l
e
s
'
,
 
'
P
e
r
a
v
i
a
'
,
 
'
P
u
e
r
t
o
 
P
l
a
t
a
'
,
 
'
S
a
l
c
e
d
o
'
,
 
'
S
a
m
a
n
a
'
,
 
'
S
a
n
c
h
e
z
 
R
a
m
i
r
e
z
'
,
 
'
S
a
n
 
J
u
a
n
'
,
 
'
S
a
n
 
P
e
d
r
o
 
D
e
 
M
a
c
o
r
i
s
'
,
 
'
S
a
n
t
i
a
g
o
'
,
 
'
S
a
n
t
i
a
g
o
 
R
o
d
r
i
g
u
e
z
'
,
 
'
V
a
l
v
e
r
d
e
'
,
 
'
E
l
 
S
e
i
b
o
'
,
 
'
H
a
t
o
 
M
a
y
o
r
'
,
 
'
L
a
 
V
e
g
a
'
,
 
'
M
o
n
s
e
n
o
r
 
N
o
u
e
l
'
,
 
'
M
o
n
t
e
 
P
l
a
t
a
'
,
 
'
S
a
n
 
C
r
i
s
t
o
b
a
l
'
)
,
 
'
D
Z
'
 
=
>
 
a
r
r
a
y
(
'
A
l
g
e
r
'
,
 
'
B
a
t
n
a
'
,
 
'
C
o
n
s
t
a
n
t
i
n
e
'
,
 
'
M
e
d
e
a
'
,
 
'
M
o
s
t
a
g
a
n
e
m
'
,
 
'
O
r
a
n
'
,
 
'
S
a
i
d
a
'
,
 
'
S
e
t
i
f
'
,
 
'
T
i
a
r
e
t
'
,
 
'
T
i
z
i
 
O
u
z
o
u
'
,
 
'
T
l
e
m
c
e
n
'
,
 
'
B
e
j
a
i
a
'
,
 
'
B
i
s
k
r
a
'
,
 
'
B
l
i
d
a
'
,
 
'
B
o
u
i
r
a
'
,
 
'
D
j
e
l
f
a
'
,
 
'
G
u
e
l
m
a
'
,
 
'
J
i
j
e
l
'
,
 
'
L
a
g
h
o
u
a
t
'
,
 
'
M
a
s
c
a
r
a
'
,
 
"
M
'
s
i
l
a
"
,
 
'
O
u
m
 
e
l
 
B
o
u
a
g
h
i
'
,
 
'
S
i
d
i
 
B
e
l
 
A
b
b
e
s
'
,
 
'
S
k
i
k
d
a
'
,
 
'
T
e
b
e
s
s
a
'
,
 
'
A
d
r
a
r
'
,
 
'
A
i
n
 
D
e
f
l
a
'
,
 
'
A
i
n
 
T
e
m
o
u
c
h
e
n
t
'
,
 
'
A
n
n
a
b
a
'
,
 
'
B
e
c
h
a
r
'
,
 
'
B
o
r
d
j
 
B
o
u
 
A
r
r
e
r
i
d
j
'
,
 
'
B
o
u
m
e
r
d
e
s
'
,
 
'
C
h
l
e
f
'
,
 
'
E
l
 
B
a
y
a
d
h
'
,
 
'
E
l
 
O
u
e
d
'
,
 
'
E
l
 
T
a
r
f
'
,
 
'
G
h
a
r
d
a
i
a
'
,
 
'
I
l
l
i
z
i
'
,
 
'
K
h
e
n
c
h
e
l
a
'
,
 
'
M
i
l
a
'
,
 
'
N
a
a
m
a
'
,
 
'
O
u
a
r
g
l
a
'
,
 
'
R
e
l
i
z
a
n
e
'
,
 
'
S
o
u
k
 
A
h
r
a
s
'
,
 
'
T
a
m
a
n
g
h
a
s
s
e
t
'
,
 
'
T
i
n
d
o
u
f
'
,
 
'
T
i
p
a
z
a
'
,
 
'
T
i
s
s
e
m
s
i
l
t
'
)
,
 
'
E
C
'
 
=
>
 
a
r
r
a
y
(
'
G
a
l
a
p
a
g
o
s
'
,
 
'
A
z
u
a
y
'
,
 
'
B
o
l
i
v
a
r
'
,
 
'
C
a
n
a
r
'
,
 
'
C
a
r
c
h
i
'
,
 
'
C
h
i
m
b
o
r
a
z
o
'
,
 
'
C
o
t
o
p
a
x
i
'
,
 
'
E
l
 
O
r
o
'
,
 
'
E
s
m
e
r
a
l
d
a
s
'
,
 
'
G
u
a
y
a
s
'
,
 
'
I
m
b
a
b
u
r
a
'
,
 
'
L
o
j
a
'
,
 
'
L
o
s
 
R
i
o
s
'
,
 
'
M
a
n
a
b
i
'
,
 
'
M
o
r
o
n
a
-
S
a
n
t
i
a
g
o
'
,
 
'
P
a
s
t
a
z
a
'
,
 
'
P
i
c
h
i
n
c
h
a
'
,
 
'
T
u
n
g
u
r
a
h
u
a
'
,
 
'
Z
a
m
o
r
a
-
C
h
i
n
c
h
i
p
e
'
,
 
'
S
u
c
u
m
b
i
o
s
'
,
 
'
N
a
p
o
'
,
 
'
O
r
e
l
l
a
n
a
'
)
,
 
'
E
E
'
 
=
>
 
a
r
r
a
y
(
'
H
a
r
j
u
m
a
a
'
,
 
'
H
i
i
u
m
a
a
'
,
 
'
I
d
a
-
V
i
r
u
m
a
a
'
,
 
'
J
a
r
v
a
m
a
a
'
,
 
'
J
o
g
e
v
a
m
a
a
'
,
 
'
K
o
h
t
l
a
-
J
a
r
v
e
'
,
 
'
L
a
a
n
e
m
a
a
'
,
 
'
L
a
a
n
e
-
V
i
r
u
m
a
a
'
,
 
'
N
a
r
v
a
'
,
 
'
P
a
r
n
u
'
,
 
'
P
a
r
n
u
m
a
a
'
,
 
'
P
o
l
v
a
m
a
a
'
,
 
'
R
a
p
l
a
m
a
a
'
,
 
'
S
a
a
r
e
m
a
a
'
,
 
'
S
i
l
l
a
m
a
e
'
,
 
'
T
a
l
l
i
n
n
'
,
 
'
T
a
r
t
u
'
,
 
'
T
a
r
t
u
m
a
a
'
,
 
'
V
a
l
g
a
m
a
a
'
,
 
'
V
i
l
j
a
n
d
i
m
a
a
'
,
 
'
V
o
r
u
m
a
a
'
)
,
 
'
E
G
'
 
=
>
 
a
r
r
a
y
(
'
A
d
 
D
a
q
a
h
l
i
y
a
h
'
,
 
'
A
l
 
B
a
h
r
 
a
l
 
A
h
m
a
r
'
,
 
'
A
l
 
B
u
h
a
y
r
a
h
'
,
 
'
A
l
 
F
a
y
y
u
m
'
,
 
'
A
l
 
G
h
a
r
b
i
y
a
h
'
,
 
'
A
l
 
I
s
k
a
n
d
a
r
i
y
a
h
'
,
 
"
A
l
 
I
s
m
a
'
i
l
i
y
a
h
"
,
 
'
A
l
 
J
i
z
a
h
'
,
 
'
A
l
 
M
i
n
u
f
i
y
a
h
'
,
 
'
A
l
 
M
i
n
y
a
'
,
 
'
A
l
 
Q
a
h
i
r
a
h
'
,
 
'
A
l
 
Q
a
l
y
u
b
i
y
a
h
'
,
 
'
A
l
 
W
a
d
i
 
a
l
 
J
a
d
i
d
'
,
 
'
A
s
h
 
S
h
a
r
q
i
y
a
h
'
,
 
'
A
s
 
S
u
w
a
y
s
'
,
 
'
A
s
w
a
n
'
,
 
'
A
s
y
u
t
'
,
 
'
B
a
n
i
 
S
u
w
a
y
f
'
,
 
"
B
u
r
 
S
a
'
i
d
"
,
 
'
D
u
m
y
a
t
'
,
 
'
K
a
f
r
 
a
s
h
 
S
h
a
y
k
h
'
,
 
'
M
a
t
r
u
h
'
,
 
'
Q
i
n
a
'
,
 
'
S
u
h
a
j
'
,
 
"
J
a
n
u
b
 
S
i
n
a
'
"
,
 
"
S
h
a
m
a
l
 
S
i
n
a
'
"
)
,
 
'
E
S
'
 
=
>
 
a
r
r
a
y
(
'
I
s
l
a
s
 
B
a
l
e
a
r
e
s
'
,
 
'
L
a
 
R
i
o
j
a
'
,
 
'
M
a
d
r
i
d
'
,
 
'
M
u
r
c
i
a
'
,
 
'
N
a
v
a
r
r
a
'
,
 
'
A
s
t
u
r
i
a
s
'
,
 
'
C
a
n
t
a
b
r
i
a
'
,
 
'
A
n
d
a
l
u
c
i
a
'
,
 
'
A
r
a
g
o
n
'
,
 
'
C
a
n
a
r
i
a
s
'
,
 
'
C
a
s
t
i
l
l
a
-
L
a
 
M
a
n
c
h
a
'
,
 
'
C
a
s
t
i
l
l
a
 
y
 
L
e
o
n
'
,
 
'
C
a
t
a
l
u
n
a
'
,
 
'
E
x
t
r
e
m
a
d
u
r
a
'
,
 
'
G
a
l
i
c
i
a
'
,
 
'
P
a
i
s
 
V
a
s
c
o
'
,
 
'
V
a
l
e
n
c
i
a
n
a
'
)
,
 
'
E
T
'
 
=
>
 
a
r
r
a
y
(
'
A
m
h
a
r
a
'
,
 
'
S
o
m
a
l
i
'
,
 
'
G
a
m
b
e
l
l
a
'
,
 
'
A
d
d
i
s
 
A
b
a
b
a
'
,
 
'
S
.
e
r
n
'
,
 
'
T
i
g
r
a
y
'
,
 
'
B
e
n
i
s
h
a
n
g
u
l
'
,
 
'
A
f
a
r
'
,
 
'
A
d
i
s
 
A
b
e
b
a
'
,
 
'
A
f
a
r
'
,
 
'
A
m
a
r
a
'
,
 
'
B
i
n
s
h
a
n
g
u
l
 
G
u
m
u
z
'
,
 
'
D
i
r
e
 
D
a
w
a
'
,
 
'
G
a
m
b
e
l
a
 
H
i
z
b
o
c
h
'
,
 
'
H
a
r
e
r
i
 
H
i
z
b
'
,
 
'
O
r
o
m
i
y
a
'
,
 
'
S
u
m
a
l
e
'
,
 
'
T
i
g
r
a
y
'
,
 
'
Y
e
D
e
b
u
b
 
B
i
h
e
r
o
c
h
 
B
i
h
e
r
e
s
e
b
o
c
h
 
n
a
 
H
i
z
b
o
c
h
'
)
,
 
'
F
I
'
 
=
>
 
a
r
r
a
y
(
'
Ã
ƒ
?
l
a
n
d
'
,
 
'
L
a
p
l
a
n
d
'
,
 
'
O
u
l
u
'
,
 
'
S
.
e
r
n
 
F
i
n
l
a
n
d
'
,
 
'
E
a
s
t
e
r
n
 
F
i
n
l
a
n
d
'
,
 
'
W
.
 
F
i
n
l
a
n
d
'
)
,
 
'
F
J
'
 
=
>
 
a
r
r
a
y
(
'
C
e
n
t
r
a
l
'
,
 
'
E
a
s
t
e
r
n
'
,
 
'
N
.
'
,
 
'
R
o
t
u
m
a
'
,
 
'
W
.
'
)
,
 
'
F
M
'
 
=
>
 
a
r
r
a
y
(
'
K
o
s
r
a
e
'
,
 
'
P
o
h
n
p
e
i
'
,
 
'
C
h
u
u
k
'
,
 
'
Y
a
p
'
)
,
 
'
F
R
'
 
=
>
 
a
r
r
a
y
(
'
A
q
u
i
t
a
i
n
e
'
,
 
'
A
u
v
e
r
g
n
e
'
,
 
'
B
a
s
s
e
-
N
o
r
m
a
n
d
i
e
'
,
 
'
B
o
u
r
g
o
g
n
e
'
,
 
'
B
r
e
t
a
g
n
e
'
,
 
'
C
e
n
t
r
e
'
,
 
'
C
h
a
m
p
a
g
n
e
-
A
r
d
e
n
n
e
'
,
 
'
C
o
r
s
e
'
,
 
'
F
r
a
n
c
h
e
-
C
o
m
t
e
'
,
 
'
H
a
u
t
e
-
N
o
r
m
a
n
d
i
e
'
,
 
'
I
l
e
-
d
e
-
F
r
a
n
c
e
'
,
 
'
L
a
n
g
u
e
d
o
c
-
R
o
u
s
s
i
l
l
o
n
'
,
 
'
L
i
m
o
u
s
i
n
'
,
 
'
L
o
r
r
a
i
n
e
'
,
 
'
M
i
d
i
-
P
y
r
e
n
e
e
s
'
,
 
'
N
o
r
d
-
P
a
s
-
d
e
-
C
a
l
a
i
s
'
,
 
'
P
a
y
s
 
d
e
 
l
a
 
L
o
i
r
e
'
,
 
'
P
i
c
a
r
d
i
e
'
,
 
'
P
o
i
t
o
u
-
C
h
a
r
e
n
t
e
s
'
,
 
"
P
r
o
v
e
n
c
e
-
A
l
p
e
s
-
C
o
t
e
 
d
'
A
z
u
r
"
,
 
'
R
h
o
n
e
-
A
l
p
e
s
'
,
 
'
A
l
s
a
c
e
'
)
,
 
'
G
A
'
 
=
>
 
a
r
r
a
y
(
'
E
s
t
u
a
i
r
e
'
,
 
'
H
a
u
t
-
O
g
o
o
u
e
'
,
 
'
M
o
y
e
n
-
O
g
o
o
u
e
'
,
 
'
N
g
o
u
n
i
e
'
,
 
'
N
y
a
n
g
a
'
,
 
'
O
g
o
o
u
e
-
I
v
i
n
d
o
'
,
 
'
O
g
o
o
u
e
-
L
o
l
o
'
,
 
'
O
g
o
o
u
e
-
M
a
r
i
t
i
m
e
'
,
 
'
W
o
l
e
u
-
N
t
e
m
'
)
,
 
'
G
B
'
 
=
>
 
a
r
r
a
y
(
'
A
v
o
n
'
,
 
'
B
e
r
k
s
h
i
r
e
'
,
 
'
C
l
e
v
e
l
a
n
d
'
,
 
'
C
o
r
n
w
a
l
l
'
,
 
'
C
u
m
b
r
i
a
'
,
 
'
G
r
e
a
t
e
r
 
L
o
n
d
o
n
'
,
 
'
G
r
e
a
t
e
r
 
M
a
n
c
h
e
s
t
e
r
'
,
 
'
H
e
r
e
f
o
r
d
 
a
n
d
 
W
o
r
c
e
s
t
e
r
'
,
 
'
H
u
m
b
e
r
s
i
d
e
'
,
 
'
M
e
r
s
e
y
s
i
d
e
'
,
 
'
S
.
 
Y
o
r
k
s
h
i
r
e
'
,
 
'
T
y
n
e
 
a
n
d
 
W
e
a
r
'
,
 
'
W
e
s
t
 
M
i
d
l
a
n
d
s
'
,
 
'
W
e
s
t
 
Y
o
r
k
s
h
i
r
e
'
,
 
'
C
e
n
t
r
a
l
'
,
 
'
G
r
a
m
p
i
a
n
'
,
 
'
L
o
t
h
i
a
n
'
,
 
'
S
t
r
a
t
h
c
l
y
d
e
'
,
 
'
T
a
y
s
i
d
e
'
,
 
'
C
l
w
y
d
'
,
 
'
D
y
f
e
d
'
,
 
'
G
w
e
n
t
'
,
 
'
M
i
d
 
G
l
a
m
o
r
g
a
n
'
,
 
'
S
.
 
G
l
a
m
o
r
g
a
n
'
,
 
'
W
e
s
t
 
G
l
a
m
o
r
g
a
n
'
,
 
'
B
a
r
k
i
n
g
 
a
n
d
 
D
a
g
e
n
h
a
m
'
,
 
'
B
a
r
n
e
t
'
,
 
'
B
a
r
n
s
l
e
y
'
,
 
'
B
a
t
h
 
a
n
d
 
N
o
r
t
h
 
E
a
s
t
 
S
o
m
e
r
s
e
t
'
,
 
'
B
e
d
f
o
r
d
s
h
i
r
e
'
,
 
'
B
e
x
l
e
y
'
,
 
'
B
i
r
m
i
n
g
h
a
m
'
,
 
'
B
l
a
c
k
b
u
r
n
 
w
i
t
h
 
D
a
r
w
e
n
'
,
 
'
B
l
a
c
k
p
o
o
l
'
,
 
'
B
o
l
t
o
n
'
,
 
'
B
o
u
r
n
e
m
o
u
t
h
'
,
 
'
B
r
a
c
k
n
e
l
l
 
F
o
r
e
s
t
'
,
 
'
B
r
a
d
f
o
r
d
'
,
 
'
B
r
e
n
t
'
,
 
'
B
r
i
g
h
t
o
n
 
a
n
d
 
H
o
v
e
'
,
 
'
B
r
i
s
t
o
l
,
 
C
i
t
y
 
o
f
'
,
 
'
B
r
o
m
l
e
y
'
,
 
'
B
u
c
k
i
n
g
h
a
m
s
h
i
r
e
'
,
 
'
B
u
r
y
'
,
 
'
C
a
l
d
e
r
d
a
l
e
'
,
 
'
C
a
m
b
r
i
d
g
e
s
h
i
r
e
'
,
 
'
C
a
m
d
e
n
'
,
 
'
C
h
e
s
h
i
r
e
'
,
 
'
C
o
v
e
n
t
r
y
'
,
 
'
C
r
o
y
d
o
n
'
,
 
'
D
a
r
l
i
n
g
t
o
n
'
,
 
'
D
e
r
b
y
'
,
 
'
D
e
r
b
y
s
h
i
r
e
'
,
 
'
D
e
v
o
n
'
,
 
'
D
o
n
c
a
s
t
e
r
'
,
 
'
D
o
r
s
e
t
'
,
 
'
D
u
d
l
e
y
'
,
 
'
D
u
r
h
a
m
'
,
 
'
E
a
l
i
n
g
'
,
 
'
E
a
s
t
 
R
i
d
i
n
g
 
o
f
 
Y
o
r
k
s
h
i
r
e
'
,
 
'
E
a
s
t
 
S
u
s
s
e
x
'
,
 
'
E
n
f
i
e
l
d
'
,
 
'
E
s
s
e
x
'
,
 
'
G
a
t
e
s
h
e
a
d
'
,
 
'
G
l
o
u
c
e
s
t
e
r
s
h
i
r
e
'
,
 
'
G
r
e
e
n
w
i
c
h
'
,
 
'
H
a
c
k
n
e
y
'
,
 
'
H
a
l
t
o
n
'
,
 
'
H
a
m
m
e
r
s
m
i
t
h
 
a
n
d
 
F
u
l
h
a
m
'
,
 
'
H
a
m
p
s
h
i
r
e
'
,
 
'
H
a
r
i
n
g
e
y
'
,
 
'
H
a
r
r
o
w
'
,
 
'
H
a
r
t
l
e
p
o
o
l
'
,
 
'
H
a
v
e
r
i
n
g
'
,
 
'
H
e
r
e
f
o
r
d
s
h
i
r
e
'
,
 
'
H
e
r
t
f
o
r
d
'
,
 
'
H
i
l
l
i
n
g
d
o
n
'
,
 
'
H
o
u
n
s
l
o
w
'
,
 
'
I
s
l
e
 
o
f
 
W
i
g
h
t
'
,
 
'
I
s
l
i
n
g
t
o
n
'
,
 
'
K
e
n
s
i
n
g
t
o
n
 
a
n
d
 
C
h
e
l
s
e
a
'
,
 
'
K
e
n
t
'
,
 
'
K
i
n
g
s
t
o
n
 
u
p
o
n
 
H
u
l
l
,
 
C
i
t
y
 
o
f
'
,
 
'
K
i
n
g
s
t
o
n
 
u
p
o
n
 
T
h
a
m
e
s
'
,
 
'
K
i
r
k
l
e
e
s
'
,
 
'
K
n
o
w
s
l
e
y
'
,
 
'
L
a
m
b
e
t
h
'
,
 
'
L
a
n
c
a
s
h
i
r
e
'
,
 
'
L
e
e
d
s
'
,
 
'
L
e
i
c
e
s
t
e
r
'
,
 
'
L
e
i
c
e
s
t
e
r
s
h
i
r
e
'
,
 
'
L
e
w
i
s
h
a
m
'
,
 
'
L
i
n
c
o
l
n
s
h
i
r
e
'
,
 
'
L
i
v
e
r
p
o
o
l
'
,
 
'
L
o
n
d
o
n
,
 
C
i
t
y
 
o
f
'
,
 
'
L
u
t
o
n
'
,
 
'
M
a
n
c
h
e
s
t
e
r
'
,
 
'
M
e
d
w
a
y
'
,
 
'
M
e
r
t
o
n
'
,
 
'
M
i
d
d
l
e
s
b
r
o
u
g
h
'
,
 
'
M
i
l
t
o
n
 
K
e
y
n
e
s
'
,
 
'
N
e
w
c
a
s
t
l
e
 
u
p
o
n
 
T
y
n
e
'
,
 
'
N
e
w
h
a
m
'
,
 
'
N
o
r
f
o
l
k
'
,
 
'
N
o
r
t
h
a
m
p
t
o
n
s
h
i
r
e
'
,
 
'
N
o
r
t
h
 
E
a
s
t
 
L
i
n
c
o
l
n
s
h
i
r
e
'
,
 
'
N
o
r
t
h
 
L
i
n
c
o
l
n
s
h
i
r
e
'
,
 
'
N
o
r
t
h
 
S
o
m
e
r
s
e
t
'
,
 
'
N
o
r
t
h
 
T
y
n
e
s
i
d
e
'
,
 
'
N
o
r
t
h
u
m
b
e
r
l
a
n
d
'
,
 
'
N
o
r
t
h
 
Y
o
r
k
s
h
i
r
e
'
,
 
'
N
o
t
t
i
n
g
h
a
m
'
,
 
'
N
o
t
t
i
n
g
h
a
m
s
h
i
r
e
'
,
 
'
O
l
d
h
a
m
'
,
 
'
O
x
f
o
r
d
s
h
i
r
e
'
,
 
'
P
e
t
e
r
b
o
r
o
u
g
h
'
,
 
'
P
l
y
m
o
u
t
h
'
,
 
'
P
o
o
l
e
'
,
 
'
P
o
r
t
s
m
o
u
t
h
'
,
 
'
R
e
a
d
i
n
g
'
,
 
'
R
e
d
b
r
i
d
g
e
'
,
 
'
R
e
d
c
a
r
 
a
n
d
 
C
l
e
v
e
l
a
n
d
'
,
 
'
R
i
c
h
m
o
n
d
 
u
p
o
n
 
T
h
a
m
e
s
'
,
 
'
R
o
c
h
d
a
l
e
'
,
 
'
R
o
t
h
e
r
h
a
m
'
,
 
'
R
u
t
l
a
n
d
'
,
 
'
S
a
l
f
o
r
d
'
,
 
'
S
h
r
o
p
s
h
i
r
e
'
,
 
'
S
a
n
d
w
e
l
l
'
,
 
'
S
e
f
t
o
n
'
,
 
'
S
h
e
f
f
i
e
l
d
'
,
 
'
S
l
o
u
g
h
'
,
 
'
S
o
l
i
h
u
l
l
'
,
 
'
S
o
m
e
r
s
e
t
'
,
 
'
S
.
a
m
p
t
o
n
'
,
 
'
S
.
e
n
d
-
o
n
-
S
e
a
'
,
 
'
S
.
 
G
l
o
u
c
e
s
t
e
r
s
h
i
r
e
'
,
 
'
S
.
 
T
y
n
e
s
i
d
e
'
,
 
'
S
.
w
a
r
k
'
,
 
'
S
t
a
f
f
o
r
d
s
h
i
r
e
'
,
 
'
S
t
.
 
H
e
l
e
n
s
'
,
 
'
S
t
o
c
k
p
o
r
t
'
,
 
'
S
t
o
c
k
t
o
n
-
o
n
-
T
e
e
s
'
,
 
'
S
t
o
k
e
-
o
n
-
T
r
e
n
t
'
,
 
'
S
u
f
f
o
l
k
'
,
 
'
S
u
n
d
e
r
l
a
n
d
'
,
 
'
S
u
r
r
e
y
'
,
 
'
S
u
t
t
o
n
'
,
 
'
S
w
i
n
d
o
n
'
,
 
'
T
a
m
e
s
i
d
e
'
,
 
'
T
e
l
f
o
r
d
 
a
n
d
 
W
r
e
k
i
n
'
,
 
'
T
h
u
r
r
o
c
k
'
,
 
'
T
o
r
b
a
y
'
,
 
'
T
o
w
e
r
 
H
a
m
l
e
t
s
'
,
 
'
T
r
a
f
f
o
r
d
'
,
 
'
W
a
k
e
f
i
e
l
d
'
,
 
'
W
a
l
s
a
l
l
'
,
 
'
W
a
l
t
h
a
m
 
F
o
r
e
s
t
'
,
 
'
W
a
n
d
s
w
o
r
t
h
'
,
 
'
W
a
r
r
i
n
g
t
o
n
'
,
 
'
W
a
r
w
i
c
k
s
h
i
r
e
'
,
 
'
W
e
s
t
 
B
e
r
k
s
h
i
r
e
'
,
 
'
W
e
s
t
m
i
n
s
t
e
r
'
,
 
'
W
e
s
t
 
S
u
s
s
e
x
'
,
 
'
W
i
g
a
n
'
,
 
'
W
i
l
t
s
h
i
r
e
'
,
 
'
W
i
n
d
s
o
r
 
a
n
d
 
M
a
i
d
e
n
h
e
a
d
'
,
 
'
W
i
r
r
a
l
'
,
 
'
W
o
k
i
n
g
h
a
m
'
,
 
'
W
o
l
v
e
r
h
a
m
p
t
o
n
'
,
 
'
W
o
r
c
e
s
t
e
r
s
h
i
r
e
'
,
 
'
Y
o
r
k
'
,
 
'
A
n
t
r
i
m
'
,
 
'
A
r
d
s
'
,
 
'
A
r
m
a
g
h
'
,
 
'
B
a
l
l
y
m
e
n
a
'
,
 
'
B
a
l
l
y
m
o
n
e
y
'
,
 
'
B
a
n
b
r
i
d
g
e
'
,
 
'
B
e
l
f
a
s
t
'
,
 
'
C
a
r
r
i
c
k
f
e
r
g
u
s
'
,
 
'
C
a
s
t
l
e
r
e
a
g
h
'
,
 
'
C
o
l
e
r
a
i
n
e
'
,
 
'
C
o
o
k
s
t
o
w
n
'
,
 
'
C
r
a
i
g
a
v
o
n
'
,
 
'
D
o
w
n
'
,
 
'
D
u
n
g
a
n
n
o
n
'
,
 
'
F
e
r
m
a
n
a
g
h
'
,
 
'
L
a
r
n
e
'
,
 
'
L
i
m
a
v
a
d
y
'
,
 
'
L
i
s
b
u
r
n
'
,
 
'
D
e
r
r
y
'
,
 
'
M
a
g
h
e
r
a
f
e
l
t
'
,
 
'
M
o
y
l
e
'
,
 
'
N
e
w
r
y
 
a
n
d
 
M
o
u
r
n
e
'
,
 
'
N
e
w
t
o
w
n
a
b
b
e
y
'
,
 
'
N
o
r
t
h
 
D
o
w
n
'
,
 
'
O
m
a
g
h
'
,
 
'
S
t
r
a
b
a
n
e
'
,
 
'
A
b
e
r
d
e
e
n
 
C
i
t
y
'
,
 
'
A
b
e
r
d
e
e
n
s
h
i
r
e
'
,
 
'
A
n
g
u
s
'
,
 
'
A
r
g
y
l
l
 
a
n
d
 
B
u
t
e
'
,
 
'
S
c
o
t
t
i
s
h
 
B
o
r
d
e
r
s
,
 
T
h
e
'
,
 
'
C
l
a
c
k
m
a
n
n
a
n
s
h
i
r
e
'
,
 
'
D
u
m
f
r
i
e
s
 
a
n
d
 
G
a
l
l
o
w
a
y
'
,
 
'
D
u
n
d
e
e
 
C
i
t
y
'
,
 
'
E
a
s
t
 
A
y
r
s
h
i
r
e
'
,
 
'
E
a
s
t
 
D
u
n
b
a
r
t
o
n
s
h
i
r
e
'
,
 
'
E
a
s
t
 
L
o
t
h
i
a
n
'
,
 
'
E
a
s
t
 
R
e
n
f
r
e
w
s
h
i
r
e
'
,
 
'
E
d
i
n
b
u
r
g
h
,
 
C
i
t
y
 
o
f
'
,
 
'
F
a
l
k
i
r
k
'
,
 
'
F
i
f
e
'
,
 
'
G
l
a
s
g
o
w
 
C
i
t
y
'
,
 
'
H
i
g
h
l
a
n
d
'
,
 
'
I
n
v
e
r
c
l
y
d
e
'
,
 
'
M
i
d
l
o
t
h
i
a
n
'
,
 
'
M
o
r
a
y
'
,
 
'
N
o
r
t
h
 
A
y
r
s
h
i
r
e
'
,
 
'
N
o
r
t
h
 
L
a
n
a
r
k
s
h
i
r
e
'
,
 
'
O
r
k
n
e
y
'
,
 
'
P
e
r
t
h
 
a
n
d
 
K
i
n
r
o
s
s
'
,
 
'
R
e
n
f
r
e
w
s
h
i
r
e
'
,
 
'
S
h
e
t
l
a
n
d
 
I
s
.
'
,
 
'
S
.
 
A
y
r
s
h
i
r
e
'
,
 
'
S
.
 
L
a
n
a
r
k
s
h
i
r
e
'
,
 
'
S
t
i
r
l
i
n
g
'
,
 
'
W
e
s
t
 
D
u
n
b
a
r
t
o
n
s
h
i
r
e
'
,
 
'
E
i
l
e
a
n
 
S
i
a
r
'
,
 
'
W
e
s
t
 
L
o
t
h
i
a
n
'
,
 
'
I
s
l
e
 
o
f
 
A
n
g
l
e
s
e
y
'
,
 
'
B
l
a
e
n
a
u
 
G
w
e
n
t
'
,
 
'
B
r
i
d
g
e
n
d
'
,
 
'
C
a
e
r
p
h
i
l
l
y
'
,
 
'
C
a
r
d
i
f
f
'
,
 
'
C
e
r
e
d
i
g
i
o
n
'
,
 
'
C
a
r
m
a
r
t
h
e
n
s
h
i
r
e
'
,
 
'
C
o
n
w
y
'
,
 
'
D
e
n
b
i
g
h
s
h
i
r
e
'
,
 
'
F
l
i
n
t
s
h
i
r
e
'
,
 
'
G
w
y
n
e
d
d
'
,
 
'
M
e
r
t
h
y
r
 
T
y
d
f
i
l
'
,
 
'
M
o
n
m
o
u
t
h
s
h
i
r
e
'
,
 
'
N
e
a
t
h
 
P
o
r
t
 
T
a
l
b
o
t
'
,
 
'
N
e
w
p
o
r
t
'
,
 
'
P
e
m
b
r
o
k
e
s
h
i
r
e
'
,
 
'
P
o
w
y
s
'
,
 
'
R
h
o
n
d
d
a
 
C
y
n
o
n
 
T
a
f
f
'
,
 
'
S
w
a
n
s
e
a
'
,
 
'
T
o
r
f
a
e
n
'
,
 
'
V
a
l
e
 
o
f
 
G
l
a
m
o
r
g
a
n
,
 
T
h
e
'
,
 
'
W
r
e
x
h
a
m
'
)
,
 
'
G
D
'
 
=
>
 
a
r
r
a
y
(
'
S
t
.
 
A
n
d
r
e
w
'
,
 
'
S
t
.
 
D
a
v
i
d
'
,
 
'
S
t
.
 
G
e
o
r
g
e
'
,
 
'
S
t
.
 
J
o
h
n
'
,
 
'
S
t
.
 
M
a
r
k
'
,
 
'
S
t
.
 
P
a
t
r
i
c
k
'
)
,
 
'
G
E
'
 
=
>
 
a
r
r
a
y
(
'
A
b
a
s
h
i
s
 
R
a
i
o
n
i
'
,
 
'
A
b
k
h
a
z
i
a
'
,
 
'
A
d
i
g
e
n
i
s
 
R
a
i
o
n
i
'
,
 
'
A
j
a
r
i
a
'
,
 
'
A
k
h
a
l
g
o
r
i
s
 
R
a
i
o
n
i
'
,
 
"
A
k
h
a
l
k
'
a
l
a
k
'
i
s
 
R
a
i
o
n
i
"
,
 
"
A
k
h
a
l
t
s
'
i
k
h
i
s
 
R
a
i
o
n
i
"
,
 
'
A
k
h
m
e
t
i
s
 
R
a
i
o
n
i
'
,
 
'
A
m
b
r
o
l
a
u
r
i
s
 
R
a
i
o
n
i
'
,
 
'
A
s
p
i
n
d
z
i
s
 
R
a
i
o
n
i
'
,
 
"
B
a
g
h
d
a
t
'
i
s
 
R
a
i
o
n
i
"
,
 
'
B
o
l
n
i
s
i
s
 
R
a
i
o
n
i
'
,
 
'
B
o
r
j
o
m
i
s
 
R
a
i
o
n
i
'
,
 
"
C
h
i
a
t
'
u
r
a
"
,
 
"
C
h
'
k
h
o
r
o
t
s
q
u
s
 
R
a
i
o
n
i
"
,
 
"
C
h
'
o
k
h
a
t
a
u
r
i
s
 
R
a
i
o
n
i
"
,
 
"
D
e
d
o
p
'
l
i
s
t
s
q
a
r
o
s
 
R
a
i
o
n
i
"
,
 
'
D
m
a
n
i
s
i
s
 
R
a
i
o
n
i
'
,
 
"
D
u
s
h
e
t
'
i
s
 
R
a
i
o
n
i
"
,
 
'
G
a
r
d
a
b
a
n
i
s
 
R
a
i
o
n
i
'
,
 
'
G
o
r
i
'
,
 
'
G
o
r
i
s
 
R
a
i
o
n
i
'
,
 
'
G
u
r
j
a
a
n
i
s
 
R
a
i
o
n
i
'
,
 
'
J
a
v
i
s
 
R
a
i
o
n
i
'
,
 
"
K
'
a
r
e
l
i
s
 
R
a
i
o
n
i
"
,
 
'
K
a
s
p
i
s
 
R
a
i
o
n
i
'
,
 
'
K
h
a
r
a
g
a
u
l
i
s
 
R
a
i
o
n
i
'
,
 
'
K
h
a
s
h
u
r
i
s
 
R
a
i
o
n
i
'
,
 
'
K
h
o
b
i
s
 
R
a
i
o
n
i
'
,
 
'
K
h
o
n
i
s
 
R
a
i
o
n
i
'
,
 
"
K
'
u
t
'
a
i
s
i
"
,
 
'
L
a
g
o
d
e
k
h
i
s
 
R
a
i
o
n
i
'
,
 
"
L
a
n
c
h
'
k
h
u
t
'
i
s
 
R
a
i
o
n
i
"
,
 
'
L
e
n
t
e
k
h
i
s
 
R
a
i
o
n
i
'
,
 
'
M
a
r
n
e
u
l
i
s
 
R
a
i
o
n
i
'
,
 
'
M
a
r
t
v
i
l
i
s
 
R
a
i
o
n
i
'
,
 
'
M
e
s
t
i
i
s
 
R
a
i
o
n
i
'
,
 
"
M
t
s
'
k
h
e
t
'
i
s
 
R
a
i
o
n
i
"
,
 
'
N
i
n
o
t
s
m
i
n
d
i
s
 
R
a
i
o
n
i
'
,
 
'
O
n
i
s
 
R
a
i
o
n
i
'
,
 
"
O
z
u
r
g
e
t
'
i
s
 
R
a
i
o
n
i
"
,
 
"
P
'
o
t
'
i
"
,
 
'
Q
a
z
b
e
g
i
s
 
R
a
i
o
n
i
'
,
 
'
Q
v
a
r
l
i
s
 
R
a
i
o
n
i
'
,
 
"
R
u
s
t
'
a
v
i
"
,
 
"
S
a
c
h
'
k
h
e
r
i
s
 
R
a
i
o
n
i
"
,
 
'
S
a
g
a
r
e
j
o
s
 
R
a
i
o
n
i
'
,
 
'
S
a
m
t
r
e
d
i
i
s
 
R
a
i
o
n
i
'
,
 
'
S
e
n
a
k
i
s
 
R
a
i
o
n
i
'
,
 
'
S
i
g
h
n
a
g
h
i
s
 
R
a
i
o
n
i
'
,
 
"
T
'
b
i
l
i
s
i
"
,
 
"
T
'
e
l
a
v
i
s
 
R
a
i
o
n
i
"
,
 
"
T
'
e
r
j
o
l
i
s
 
R
a
i
o
n
i
"
,
 
"
T
'
e
t
'
r
i
t
s
q
a
r
o
s
 
R
a
i
o
n
i
"
,
 
"
T
'
i
a
n
e
t
'
i
s
 
R
a
i
o
n
i
"
,
 
'
T
q
i
b
u
l
i
'
,
 
"
T
s
'
a
g
e
r
i
s
 
R
a
i
o
n
i
"
,
 
'
T
s
a
l
e
n
j
i
k
h
i
s
 
R
a
i
o
n
i
'
,
 
'
T
s
a
l
k
i
s
 
R
a
i
o
n
i
'
,
 
'
T
s
q
a
l
t
u
b
o
'
,
 
'
V
a
n
i
s
 
R
a
i
o
n
i
'
,
 
"
Z
e
s
t
a
p
'
o
n
i
s
 
R
a
i
o
n
i
"
,
 
'
Z
u
g
d
i
d
i
'
,
 
'
Z
u
g
d
i
d
i
s
 
R
a
i
o
n
i
'
)
,
 
'
G
H
'
 
=
>
 
a
r
r
a
y
(
'
G
r
e
a
t
e
r
 
A
c
c
r
a
'
,
 
'
A
s
h
a
n
t
i
'
,
 
'
B
r
o
n
g
-
A
h
a
f
o
'
,
 
'
C
e
n
t
r
a
l
'
,
 
'
E
a
s
t
e
r
n
'
,
 
'
N
.
'
,
 
'
V
o
l
t
a
'
,
 
'
W
.
'
,
 
'
U
p
p
e
r
 
E
a
s
t
'
,
 
'
U
p
p
e
r
 
W
e
s
t
'
)
,
 
'
G
L
'
 
=
>
 
a
r
r
a
y
(
'
N
o
r
d
g
r
o
n
l
a
n
d
'
,
 
'
O
s
t
g
r
o
n
l
a
n
d
'
,
 
'
V
e
s
t
g
r
o
n
l
a
n
d
'
)
,
 
'
G
M
'
 
=
>
 
a
r
r
a
y
(
'
B
a
n
j
u
l
'
,
 
'
L
o
w
e
r
 
R
i
v
e
r
'
,
 
'
M
a
c
C
a
r
t
h
y
 
I
s
.
'
,
 
'
U
p
p
e
r
 
R
i
v
e
r
'
,
 
'
W
.
'
,
 
'
N
o
r
t
h
 
B
a
n
k
'
)
,
 
'
G
N
'
 
=
>
 
a
r
r
a
y
(
'
B
e
y
l
a
'
,
 
'
B
o
f
f
a
'
,
 
'
B
o
k
e
'
,
 
'
C
o
n
a
k
r
y
'
,
 
'
D
a
b
o
l
a
'
,
 
'
D
a
l
a
b
a
'
,
 
'
D
i
n
g
u
i
r
a
y
e
'
,
 
'
F
a
r
a
n
a
h
'
,
 
'
F
o
r
e
c
a
r
i
a
h
'
,
 
'
F
r
i
a
'
,
 
'
G
a
o
u
a
l
'
,
 
'
G
u
e
c
k
e
d
o
u
'
,
 
'
K
e
r
o
u
a
n
e
'
,
 
'
K
i
n
d
i
a
'
,
 
'
K
i
s
s
i
d
o
u
g
o
u
'
,
 
'
K
o
u
n
d
a
r
a
'
,
 
'
K
o
u
r
o
u
s
s
a
'
,
 
'
M
a
c
e
n
t
a
'
,
 
'
M
a
l
i
'
,
 
'
M
a
m
o
u
'
,
 
'
P
i
t
a
'
,
 
'
T
e
l
i
m
e
l
e
'
,
 
'
T
o
u
g
u
e
'
,
 
'
Y
o
m
o
u
'
,
 
'
C
o
y
a
h
'
,
 
'
D
u
b
r
e
k
a
'
,
 
'
K
a
n
k
a
n
'
,
 
'
K
o
u
b
i
a
'
,
 
'
L
a
b
e
'
,
 
'
L
e
l
o
u
m
a
'
,
 
'
L
o
l
a
'
,
 
'
M
a
n
d
i
a
n
a
'
,
 
'
N
z
e
r
e
k
o
r
e
'
,
 
'
S
i
g
u
i
r
i
'
)
,
 
'
G
Q
'
 
=
>
 
a
r
r
a
y
(
'
A
n
n
o
b
o
n
'
,
 
'
B
i
o
k
o
 
N
o
r
t
e
'
,
 
'
B
i
o
k
o
 
S
u
r
'
,
 
'
C
e
n
t
r
o
 
S
u
r
'
,
 
'
K
i
e
-
N
t
e
m
'
,
 
'
L
i
t
o
r
a
l
'
,
 
'
W
e
l
e
-
N
z
a
s
'
)
,
 
'
G
R
'
 
=
>
 
a
r
r
a
y
(
'
E
v
r
o
s
'
,
 
'
R
o
d
o
s
'
,
 
'
R
h
o
d
e
s
'
,
 
'
T
i
l
o
s
'
,
 
'
K
o
s
'
,
 
'
K
a
l
y
m
n
o
s
'
,
 
'
K
a
r
p
a
t
h
o
s
'
,
 
'
L
e
r
o
s
'
,
 
'
P
a
t
m
o
s
'
,
 
'
L
i
p
s
i
'
,
 
'
N
i
s
s
i
r
o
s
'
,
 
'
K
a
s
t
e
l
o
r
i
z
o
'
,
 
'
S
y
m
i
'
,
 
'
H
a
l
k
i
'
,
 
'
A
m
o
r
g
o
s
'
,
 
'
S
a
n
t
o
r
i
n
i
'
,
 
'
P
a
r
o
s
'
,
 
'
S
i
r
o
s
'
,
 
'
M
i
k
o
n
o
s
'
,
 
'
T
i
n
o
s
'
,
 
'
A
n
d
r
o
s
'
,
 
'
N
a
x
o
s
'
,
 
'
H
i
o
s
'
,
 
'
L
e
s
v
o
s
'
,
 
'
I
k
a
r
i
a
'
,
 
'
S
a
m
o
s
'
,
 
'
K
a
l
i
n
o
s
'
,
 
'
N
i
s
s
i
l
o
s
'
,
 
'
K
a
r
p
o
t
h
o
s
'
,
 
'
K
a
s
s
o
s
'
,
 
'
E
o
s
o
s
'
,
 
'
A
s
t
i
p
a
l
e
a
'
,
 
'
K
e
a
'
,
 
'
K
i
t
h
n
o
s
'
,
 
'
S
e
r
i
s
o
s
'
,
 
'
M
i
l
o
s
'
,
 
'
C
r
e
t
a
'
,
 
'
C
r
e
t
e
'
,
 
'
K
i
t
h
i
r
a
'
,
 
'
S
a
l
a
m
i
n
a
'
,
 
'
E
g
i
n
a
'
,
 
'
S
p
e
t
s
a
s
'
,
 
'
I
d
r
a
'
,
 
'
P
o
r
o
s
'
,
 
'
S
k
i
r
o
s
'
,
 
'
S
k
o
p
o
l
o
s
'
,
 
'
S
k
i
a
t
h
o
s
'
,
 
'
K
a
l
o
n
i
s
s
o
s
'
,
 
'
L
i
m
n
o
s
'
,
 
'
S
a
m
o
t
h
r
a
k
i
'
,
 
'
T
h
a
s
o
s
'
,
 
'
K
e
f
a
l
o
n
i
a
'
,
 
'
I
t
h
a
k
i
'
,
 
'
L
e
f
k
a
e
a
'
,
 
'
C
o
r
f
u
'
,
 
'
P
a
x
i
'
,
 
'
S
i
f
n
o
s
'
,
 
'
R
o
d
h
o
p
i
'
,
 
'
X
a
n
t
h
i
'
,
 
'
D
r
a
m
a
'
,
 
'
S
e
r
r
a
i
'
,
 
'
K
i
l
k
i
s
'
,
 
'
P
e
l
l
a
'
,
 
'
F
l
o
r
i
n
a
'
,
 
'
K
a
s
t
o
r
i
a
'
,
 
'
G
r
e
v
e
n
a
'
,
 
'
K
o
z
a
n
i
'
,
 
'
I
m
a
t
h
i
a
'
,
 
'
T
h
e
s
s
a
l
o
n
i
k
i
'
,
 
'
K
a
v
a
l
a
'
,
 
'
K
h
a
l
k
i
d
h
i
k
i
'
,
 
'
P
i
e
r
i
a
'
,
 
'
I
o
a
n
n
i
n
a
'
,
 
'
T
h
e
s
p
r
o
t
i
a
'
,
 
'
P
r
e
v
e
z
a
'
,
 
'
A
r
t
a
'
,
 
'
L
a
r
i
s
a
'
,
 
'
T
r
i
k
a
l
a
'
,
 
'
K
a
r
d
h
i
t
s
a
'
,
 
'
M
a
g
n
i
s
i
a
'
,
 
'
K
e
r
k
i
r
a
'
,
 
'
L
e
v
k
a
s
'
,
 
'
K
e
f
a
l
l
i
n
i
a
'
,
 
'
Z
a
k
i
n
t
h
o
s
'
,
 
'
F
t
h
i
o
t
i
s
'
,
 
'
E
v
r
i
t
a
n
i
a
'
,
 
'
A
i
t
o
l
i
a
 
k
a
i
 
A
k
a
r
n
a
n
i
a
'
,
 
'
F
o
k
i
s
'
,
 
'
V
o
i
o
t
i
a
'
,
 
'
E
v
v
o
i
a
'
,
 
'
A
t
t
i
k
i
'
,
 
'
A
r
g
o
l
i
s
'
,
 
'
K
o
r
i
n
t
h
i
a
'
,
 
'
A
k
h
a
i
a
'
,
 
'
I
l
i
a
'
,
 
'
M
e
s
s
i
n
i
a
'
,
 
'
A
r
k
a
d
h
i
a
'
,
 
'
L
a
k
o
n
i
a
'
,
 
'
K
h
a
n
i
a
'
,
 
'
R
e
t
h
i
m
n
i
'
,
 
'
I
r
a
k
l
i
o
n
'
,
 
'
L
a
s
i
t
h
i
'
,
 
'
D
h
o
d
h
e
k
a
n
i
s
o
s
'
,
 
'
S
a
m
o
s
'
,
 
'
K
i
k
l
a
d
h
e
s
'
,
 
'
K
h
i
o
s
'
,
 
'
L
e
s
v
o
s
'
)
,
 
'
G
T
'
 
=
>
 
a
r
r
a
y
(
'
A
l
t
a
 
V
e
r
a
p
a
z
'
,
 
'
B
a
j
a
 
V
e
r
a
p
a
z
'
,
 
'
C
h
i
m
a
l
t
e
n
a
n
g
o
'
,
 
'
C
h
i
q
u
i
m
u
l
a
'
,
 
'
E
l
 
P
r
o
g
r
e
s
o
'
,
 
'
E
s
c
u
i
n
t
l
a
'
,
 
'
G
u
a
t
e
m
a
l
a
'
,
 
'
H
u
e
h
u
e
t
e
n
a
n
g
o
'
,
 
'
I
z
a
b
a
l
'
,
 
'
J
a
l
a
p
a
'
,
 
'
J
u
t
i
a
p
a
'
,
 
'
P
e
t
e
n
'
,
 
'
Q
u
e
t
z
a
l
t
e
n
a
n
g
o
'
,
 
'
Q
u
i
c
h
e
'
,
 
'
R
e
t
a
l
h
u
l
e
u
'
,
 
'
S
a
c
a
t
e
p
e
q
u
e
z
'
,
 
'
S
a
n
 
M
a
r
c
o
s
'
,
 
'
S
a
n
t
a
 
R
o
s
a
'
,
 
'
S
o
l
o
l
a
'
,
 
'
S
u
c
h
i
t
e
p
e
q
u
e
z
'
,
 
'
T
o
t
o
n
i
c
a
p
a
n
'
,
 
'
Z
a
c
a
p
a
'
)
,
 
'
G
W
'
 
=
>
 
a
r
r
a
y
(
'
B
a
f
a
t
a
'
,
 
'
Q
u
i
n
a
r
a
'
,
 
'
O
i
o
'
,
 
'
B
o
l
a
m
a
'
,
 
'
C
a
c
h
e
u
'
,
 
'
T
o
m
b
a
l
i
'
,
 
'
G
a
b
u
'
,
 
'
B
i
s
s
a
u
'
,
 
'
B
i
o
m
b
o
'
)
,
 
'
G
Y
'
 
=
>
 
a
r
r
a
y
(
'
B
a
r
i
m
a
-
W
a
i
n
i
'
,
 
'
C
u
y
u
n
i
-
M
a
z
a
r
u
n
i
'
,
 
'
D
e
m
e
r
a
r
a
-
M
a
h
a
i
c
a
'
,
 
'
E
a
s
t
 
B
e
r
b
i
c
e
-
C
o
r
e
n
t
y
n
e
'
,
 
'
E
s
s
e
q
u
i
b
o
 
I
s
.
-
W
e
s
t
 
D
e
m
e
r
a
r
a
'
,
 
'
M
a
h
a
i
c
a
-
B
e
r
b
i
c
e
'
,
 
'
P
o
m
e
r
o
o
n
-
S
u
p
e
n
a
a
m
'
,
 
'
P
o
t
a
r
o
-
S
i
p
a
r
u
n
i
'
,
 
'
U
p
p
e
r
 
D
e
m
e
r
a
r
a
-
B
e
r
b
i
c
e
'
,
 
'
U
p
p
e
r
 
T
a
k
u
t
u
-
U
p
p
e
r
 
E
s
s
e
q
u
i
b
o
'
)
,
 
'
H
N
'
 
=
>
 
a
r
r
a
y
(
'
A
t
l
a
n
t
i
d
a
'
,
 
'
C
h
o
l
u
t
e
c
a
'
,
 
'
C
o
l
o
n
'
,
 
'
C
o
m
a
y
a
g
u
a
'
,
 
'
C
o
p
a
n
'
,
 
'
C
o
r
t
e
s
'
,
 
'
E
l
 
P
a
r
a
i
s
o
'
,
 
'
F
r
a
n
c
i
s
c
o
 
M
o
r
a
z
a
n
'
,
 
'
G
r
a
c
i
a
s
 
a
 
D
i
o
s
'
,
 
'
I
n
t
i
b
u
c
a
'
,
 
'
I
s
l
a
s
 
d
e
 
l
a
 
B
a
h
i
a
'
,
 
'
L
a
 
P
a
z
'
,
 
'
L
e
m
p
i
r
a
'
,
 
'
O
c
o
t
e
p
e
q
u
e
'
,
 
'
O
l
a
n
c
h
o
'
,
 
'
S
a
n
t
a
 
B
a
r
b
a
r
a
'
,
 
'
V
a
l
l
e
'
,
 
'
Y
o
r
o
'
)
,
 
'
H
R
'
 
=
>
 
a
r
r
a
y
(
'
B
j
e
l
o
v
a
r
s
k
o
-
B
i
l
o
g
o
r
s
k
a
'
,
 
'
B
r
o
d
s
k
o
-
P
o
s
a
v
s
k
a
'
,
 
'
D
u
b
r
o
v
a
c
k
o
-
N
e
r
e
t
v
a
n
s
k
a
'
,
 
'
I
s
t
a
r
s
k
a
'
,
 
'
K
a
r
l
o
v
a
c
k
a
'
,
 
'
K
o
p
r
i
v
n
i
c
k
o
-
K
r
i
z
e
v
a
c
k
a
'
,
 
'
K
r
a
p
i
n
s
k
o
-
Z
a
g
o
r
s
k
a
'
,
 
'
L
i
c
k
o
-
S
e
n
j
s
k
a
'
,
 
'
M
e
d
i
m
u
r
s
k
a
'
,
 
'
O
s
j
e
c
k
o
-
B
a
r
a
n
j
s
k
a
'
,
 
'
P
o
z
e
s
k
o
-
S
l
a
v
o
n
s
k
a
'
,
 
'
P
r
i
m
o
r
s
k
o
-
G
o
r
a
n
s
k
a
'
,
 
'
S
i
b
e
n
s
k
o
-
K
n
i
n
s
k
a
'
,
 
'
S
i
s
a
c
k
o
-
M
o
s
l
a
v
a
c
k
a
'
,
 
'
S
p
l
i
t
s
k
o
-
D
a
l
m
a
t
i
n
s
k
a
'
,
 
'
V
a
r
a
z
d
i
n
s
k
a
'
,
 
'
V
i
r
o
v
i
t
i
c
k
o
-
P
o
d
r
a
v
s
k
a
'
,
 
'
V
u
k
o
v
a
r
s
k
o
-
S
r
i
j
e
m
s
k
a
'
,
 
'
Z
a
d
a
r
s
k
a
'
,
 
'
Z
a
g
r
e
b
a
c
k
a
'
,
 
'
G
r
a
d
 
Z
a
g
r
e
b
'
)
,
 
'
H
T
'
 
=
>
 
a
r
r
a
y
(
'
N
o
r
d
-
O
u
e
s
t
'
,
 
'
A
r
t
i
b
o
n
i
t
e
'
,
 
'
C
e
n
t
r
e
'
,
 
"
G
r
a
n
d
'
 
A
n
s
e
"
,
 
'
N
o
r
d
'
,
 
'
N
o
r
d
-
E
s
t
'
,
 
'
O
u
e
s
t
'
,
 
'
S
u
d
'
,
 
'
S
u
d
-
E
s
t
'
)
,
 
'
H
U
'
 
=
>
 
a
r
r
a
y
(
'
B
a
c
s
-
K
i
s
k
u
n
'
,
 
'
B
a
r
a
n
y
a
'
,
 
'
B
e
k
e
s
'
,
 
'
B
o
r
s
o
d
-
A
b
a
u
j
-
Z
e
m
p
l
e
n
'
,
 
'
B
u
d
a
p
e
s
t
'
,
 
'
C
s
o
n
g
r
a
d
'
,
 
'
D
e
b
r
e
c
e
n
'
,
 
'
F
e
j
e
r
'
,
 
'
G
y
o
r
-
M
o
s
o
n
-
S
o
p
r
o
n
'
,
 
'
H
a
j
d
u
-
B
i
h
a
r
'
,
 
'
H
e
v
e
s
'
,
 
'
K
o
m
a
r
o
m
-
E
s
z
t
e
r
g
o
m
'
,
 
'
M
i
s
k
o
l
c
'
,
 
'
N
o
g
r
a
d
'
,
 
'
P
e
c
s
'
,
 
'
P
e
s
t
'
,
 
'
S
o
m
o
g
y
'
,
 
'
S
z
a
b
o
l
c
s
-
S
z
a
t
m
a
r
-
B
e
r
e
g
'
,
 
'
S
z
e
g
e
d
'
,
 
'
J
a
s
z
-
N
a
g
y
k
u
n
-
S
z
o
l
n
o
k
'
,
 
'
T
o
l
n
a
'
,
 
'
V
a
s
'
,
 
'
V
e
s
z
p
r
e
m
'
,
 
'
Z
a
l
a
'
,
 
'
G
y
o
r
'
,
 
'
B
e
k
e
s
c
s
a
b
a
'
,
 
'
D
u
n
a
u
j
v
a
r
o
s
'
,
 
'
E
g
e
r
'
,
 
'
H
o
d
m
e
z
o
v
a
s
a
r
h
e
l
y
'
,
 
'
K
a
p
o
s
v
a
r
'
,
 
'
K
e
c
s
k
e
m
e
t
'
,
 
'
N
a
g
y
k
a
n
i
z
s
a
'
,
 
'
N
y
i
r
e
g
y
h
a
z
a
'
,
 
'
S
o
p
r
o
n
'
,
 
'
S
z
e
k
e
s
f
e
h
e
r
v
a
r
'
,
 
'
S
z
o
l
n
o
k
'
,
 
'
S
z
o
m
b
a
t
h
e
l
y
'
,
 
'
T
a
t
a
b
a
n
y
a
'
,
 
'
V
e
s
z
p
r
e
m
'
,
 
'
Z
a
l
a
e
g
e
r
s
z
e
g
'
)
,
 
'
I
D
'
 
=
>
 
a
r
r
a
y
(
'
A
c
e
h
'
,
 
'
B
a
l
i
'
,
 
'
B
e
n
g
k
u
l
u
'
,
 
'
J
a
k
a
r
t
a
 
R
a
y
a
'
,
 
'
J
a
m
b
i
'
,
 
'
J
a
w
a
 
T
e
n
g
a
h
'
,
 
'
J
a
w
a
 
T
i
m
u
r
'
,
 
'
P
a
p
u
a
'
,
 
'
Y
o
g
y
a
k
a
r
t
a
'
,
 
'
K
a
l
i
m
a
n
t
a
n
 
B
a
r
a
t
'
,
 
'
K
a
l
i
m
a
n
t
a
n
 
S
e
l
a
t
a
n
'
,
 
'
K
a
l
i
m
a
n
t
a
n
 
T
e
n
g
a
h
'
,
 
'
K
a
l
i
m
a
n
t
a
n
 
T
i
m
u
r
'
,
 
'
L
a
m
p
u
n
g
'
,
 
'
N
u
s
a
 
T
e
n
g
g
a
r
a
 
B
a
r
a
t
'
,
 
'
N
u
s
a
 
T
e
n
g
g
a
r
a
 
T
i
m
u
r
'
,
 
'
R
i
a
u
'
,
 
'
S
u
l
a
w
e
s
i
 
S
e
l
a
t
a
n
'
,
 
'
S
u
l
a
w
e
s
i
 
T
e
n
g
a
h
'
,
 
'
S
u
l
a
w
e
s
i
 
T
e
n
g
g
a
r
a
'
,
 
'
S
u
m
a
t
e
r
a
 
B
a
r
a
t
'
,
 
'
S
u
m
a
t
e
r
a
 
U
t
a
r
a
'
,
 
'
T
i
m
o
r
 
T
i
m
u
r
'
,
 
'
M
a
l
u
k
u
'
,
 
'
M
a
l
u
k
u
 
U
t
a
r
a
'
,
 
'
J
a
w
a
 
B
a
r
a
t
'
,
 
'
S
u
l
a
w
e
s
i
 
U
t
a
r
a
'
,
 
'
S
u
m
a
t
e
r
a
 
S
e
l
a
t
a
n
'
,
 
'
B
a
n
t
e
n
'
,
 
'
G
o
r
o
n
t
a
l
o
'
,
 
'
K
e
p
u
l
a
u
a
n
 
B
a
n
g
k
a
 
B
e
l
i
t
u
n
g
'
)
,
 
'
I
E
'
 
=
>
 
a
r
r
a
y
(
'
C
a
r
l
o
w
'
,
 
'
C
a
v
a
n
'
,
 
'
C
l
a
r
e
'
,
 
'
C
o
r
k
'
,
 
'
D
o
n
e
g
a
l
'
,
 
'
D
u
b
l
i
n
'
,
 
'
G
a
l
w
a
y
'
,
 
'
K
e
r
r
y
'
,
 
'
K
i
l
d
a
r
e
'
,
 
'
K
i
l
k
e
n
n
y
'
,
 
'
L
e
i
t
r
i
m
'
,
 
'
L
a
o
i
s
'
,
 
'
L
i
m
e
r
i
c
k
'
,
 
'
L
o
n
g
f
o
r
d
'
,
 
'
L
o
u
t
h
'
,
 
'
M
a
y
o
'
,
 
'
M
e
a
t
h
'
,
 
'
M
o
n
a
g
h
a
n
'
,
 
'
O
f
f
a
l
y
'
,
 
'
R
o
s
c
o
m
m
o
n
'
,
 
'
S
l
i
g
o
'
,
 
'
T
i
p
p
e
r
a
r
y
'
,
 
'
W
a
t
e
r
f
o
r
d
'
,
 
'
W
e
s
t
m
e
a
t
h
'
,
 
'
W
e
x
f
o
r
d
'
,
 
'
W
i
c
k
l
o
w
'
)
,
 
'
I
L
'
 
=
>
 
a
r
r
a
y
(
'
H
a
D
a
r
o
m
'
,
 
'
H
a
M
e
r
k
a
z
'
,
 
'
H
a
Z
a
f
o
n
'
,
 
'
H
e
f
a
'
,
 
'
T
e
l
 
A
v
i
v
'
,
 
'
Y
e
r
u
s
h
a
l
a
y
i
m
'
)
,
 
'
I
N
'
 
=
>
 
a
r
r
a
y
(
'
A
n
d
a
m
a
n
 
a
n
d
 
N
i
c
o
b
a
r
 
I
s
.
'
,
 
'
A
n
d
h
r
a
 
P
r
a
d
e
s
h
'
,
 
'
A
s
s
a
m
'
,
 
'
C
h
a
n
d
i
g
a
r
h
'
,
 
'
D
a
d
r
a
 
a
n
d
 
N
a
g
a
r
 
H
a
v
e
l
i
'
,
 
'
D
e
l
h
i
'
,
 
'
G
u
j
a
r
a
t
'
,
 
'
H
a
r
y
a
n
a
'
,
 
'
H
i
m
a
c
h
a
l
 
P
r
a
d
e
s
h
'
,
 
'
J
a
m
m
u
 
a
n
d
 
K
a
s
h
m
i
r
'
,
 
'
K
e
r
a
l
a
'
,
 
'
L
a
k
s
h
a
d
w
e
e
p
'
,
 
'
M
a
h
a
r
a
s
h
t
r
a
'
,
 
'
M
a
n
i
p
u
r
'
,
 
'
M
e
g
h
a
l
a
y
a
'
,
 
'
K
a
r
n
a
t
a
k
a
'
,
 
'
N
a
g
a
l
a
n
d
'
,
 
'
O
r
i
s
s
a
'
,
 
'
P
o
n
d
i
c
h
e
r
r
y
'
,
 
'
P
u
n
j
a
b
'
,
 
'
R
a
j
a
s
t
h
a
n
'
,
 
'
T
a
m
i
l
 
N
a
d
u
'
,
 
'
T
r
i
p
u
r
a
'
,
 
'
W
e
s
t
 
B
e
n
g
a
l
'
,
 
'
S
i
k
k
i
m
'
,
 
'
A
r
u
n
a
c
h
a
l
 
P
r
a
d
e
s
h
'
,
 
'
M
i
z
o
r
a
m
'
,
 
'
D
a
m
a
n
 
a
n
d
 
D
i
u
'
,
 
'
G
o
a
'
,
 
'
B
i
h
a
r
'
,
 
'
M
a
d
h
y
a
 
P
r
a
d
e
s
h
'
,
 
'
U
t
t
a
r
 
P
r
a
d
e
s
h
'
,
 
'
C
h
h
a
t
t
i
s
g
a
r
h
'
,
 
'
J
h
a
r
k
h
a
n
d
'
,
 
'
U
t
t
a
r
a
n
c
h
a
l
'
)
,
 
'
I
Q
'
 
=
>
 
a
r
r
a
y
(
'
A
l
 
A
n
b
a
r
'
,
 
'
A
l
 
B
a
s
r
a
h
'
,
 
'
A
l
 
M
u
t
h
a
n
n
a
'
,
 
'
A
l
 
Q
a
d
i
s
i
y
a
h
'
,
 
'
A
s
 
S
u
l
a
y
m
a
n
i
y
a
h
'
,
 
'
B
a
b
i
l
'
,
 
'
B
a
g
h
d
a
d
'
,
 
'
D
a
h
u
k
'
,
 
'
D
h
i
 
Q
a
r
'
,
 
'
D
i
y
a
l
a
'
,
 
'
A
r
b
i
l
'
,
 
"
K
a
r
b
a
l
a
'
"
,
 
"
A
t
 
T
a
'
m
i
m
"
,
 
'
M
a
y
s
a
n
'
,
 
'
N
i
n
a
w
a
'
,
 
'
W
a
s
i
t
'
,
 
'
A
n
 
N
a
j
a
f
'
,
 
'
S
a
l
a
h
 
a
d
 
D
i
n
'
)
,
 
'
I
R
'
 
=
>
 
a
r
r
a
y
(
'
A
z
a
r
b
a
y
j
a
n
-
e
 
B
a
k
h
t
a
r
i
'
,
 
'
A
z
a
r
b
a
y
j
a
n
-
e
 
K
h
a
v
a
r
i
'
,
 
'
C
h
a
h
a
r
 
M
a
h
a
l
l
 
v
a
 
B
a
k
h
t
i
a
r
i
'
,
 
'
S
i
s
t
a
n
 
v
a
 
B
a
l
u
c
h
e
s
t
a
n
'
,
 
'
K
o
h
k
i
l
u
y
e
h
 
v
a
 
B
u
y
e
r
 
A
h
m
a
d
i
'
,
 
'
F
a
r
s
'
,
 
'
G
i
l
a
n
'
,
 
'
H
a
m
a
d
a
n
'
,
 
'
I
l
a
m
'
,
 
'
H
o
r
m
o
z
g
a
n
'
,
 
'
B
a
k
h
t
a
r
a
n
'
,
 
'
K
h
u
z
e
s
t
a
n
'
,
 
'
K
o
r
d
e
s
t
a
n
'
,
 
'
B
u
s
h
e
h
r
'
,
 
'
L
o
r
e
s
t
a
n
'
,
 
'
S
e
m
n
a
n
'
,
 
'
T
e
h
r
a
n
'
,
 
'
E
s
f
a
h
a
n
'
,
 
'
K
e
r
m
a
n
'
,
 
'
K
h
o
r
a
s
a
n
'
,
 
'
Y
a
z
d
'
,
 
'
M
a
r
k
a
z
i
'
,
 
'
M
a
z
a
n
d
a
r
a
n
'
,
 
'
Z
a
n
j
a
n
'
,
 
'
G
o
l
e
s
t
a
n
'
,
 
'
Q
a
z
v
i
n
'
,
 
'
Q
o
m
'
)
,
 
'
I
S
'
 
=
>
 
a
r
r
a
y
(
'
A
k
r
a
n
e
s
'
,
 
'
A
k
u
r
e
y
r
i
'
,
 
'
A
r
n
e
s
s
y
s
l
a
'
,
 
'
A
u
s
t
u
r
-
B
a
r
d
a
s
t
r
a
n
d
a
r
s
y
s
l
a
'
,
 
'
A
u
s
t
u
r
-
H
u
n
a
v
a
t
n
s
s
y
s
l
a
'
,
 
'
A
u
s
t
u
r
-
S
k
a
f
t
a
f
e
l
l
s
s
y
s
l
a
'
,
 
'
B
o
r
g
a
r
f
j
a
r
d
a
r
s
y
s
l
a
'
,
 
'
D
a
l
a
s
y
s
l
a
'
,
 
'
E
y
j
a
f
j
a
r
d
a
r
s
y
s
l
a
'
,
 
'
G
u
l
l
b
r
i
n
g
u
s
y
s
l
a
'
,
 
'
H
a
f
n
a
r
f
j
o
r
d
u
r
'
,
 
'
H
u
s
a
v
i
k
'
,
 
'
I
s
a
f
j
o
r
d
u
r
'
,
 
'
K
e
f
l
a
v
i
k
'
,
 
'
K
j
o
s
a
r
s
y
s
l
a
'
,
 
'
K
o
p
a
v
o
g
u
r
'
,
 
'
M
y
r
a
s
y
s
l
a
'
,
 
'
N
e
s
k
a
u
p
s
t
a
d
u
r
'
,
 
'
N
o
r
d
u
r
-
I
s
a
f
j
a
r
d
a
r
s
y
s
l
a
'
,
 
'
N
o
r
d
u
r
-
M
u
l
a
s
y
s
l
a
'
,
 
'
N
o
r
d
u
r
-
T
i
n
g
e
y
j
a
r
s
y
s
l
a
'
,
 
'
O
l
a
f
s
f
j
o
r
d
u
r
'
,
 
'
R
a
n
g
a
r
v
a
l
l
a
s
y
s
l
a
'
,
 
'
R
e
y
k
j
a
v
i
k
'
,
 
'
S
a
u
d
a
r
k
r
o
k
u
r
'
,
 
'
S
e
y
d
i
s
f
j
o
r
d
u
r
'
,
 
'
S
i
g
l
u
f
j
o
r
d
u
r
'
,
 
'
S
k
a
g
a
f
j
a
r
d
a
r
s
y
s
l
a
'
,
 
'
S
n
a
f
e
l
l
s
n
e
s
-
 
o
g
 
H
n
a
p
p
a
d
a
l
s
s
y
s
l
a
'
,
 
'
S
t
r
a
n
d
a
s
y
s
l
a
'
,
 
'
S
u
d
u
r
-
M
u
l
a
s
y
s
l
a
'
,
 
'
S
u
d
u
r
-
T
i
n
g
e
y
j
a
r
s
y
s
l
a
'
,
 
'
V
e
s
t
m
a
n
n
a
e
y
j
a
r
'
,
 
'
V
e
s
t
u
r
-
B
a
r
d
a
s
t
r
a
n
d
a
r
s
y
s
l
a
'
,
 
'
V
e
s
t
u
r
-
H
u
n
a
v
a
t
n
s
s
y
s
l
a
'
,
 
'
V
e
s
t
u
r
-
I
s
a
f
j
a
r
d
a
r
s
y
s
l
a
'
,
 
'
V
e
s
t
u
r
-
S
k
a
f
t
a
f
e
l
l
s
s
y
s
l
a
'
)
,
 
'
I
T
'
 
=
>
 
a
r
r
a
y
(
'
A
b
r
u
z
z
o
'
,
 
'
B
a
s
i
l
i
c
a
t
a
'
,
 
'
C
a
l
a
b
r
i
a
'
,
 
'
C
a
m
p
a
n
i
a
'
,
 
'
E
m
i
l
i
a
-
R
o
m
a
g
n
a
'
,
 
'
F
r
i
u
l
i
-
V
e
n
e
z
i
a
 
G
i
u
l
i
a
'
,
 
'
L
a
z
i
o
'
,
 
'
L
i
g
u
r
i
a
'
,
 
'
L
o
m
b
a
r
d
i
a
'
,
 
'
M
a
r
c
h
e
'
,
 
'
M
o
l
i
s
e
'
,
 
'
P
i
e
m
o
n
t
e
'
,
 
'
P
u
g
l
i
a
'
,
 
'
S
a
r
d
e
g
n
a
'
,
 
'
S
i
c
i
l
i
a
'
,
 
'
T
o
s
c
a
n
a
'
,
 
'
T
r
e
n
t
i
n
o
-
A
l
t
o
 
A
d
i
g
e
'
,
 
'
U
m
b
r
i
a
'
,
 
"
V
a
l
l
e
 
d
'
A
o
s
t
a
"
,
 
'
V
e
n
e
t
o
'
)
,
 
'
J
M
'
 
=
>
 
a
r
r
a
y
(
'
C
l
a
r
e
n
d
o
n
'
,
 
'
H
a
n
o
v
e
r
'
,
 
'
M
a
n
c
h
e
s
t
e
r
'
,
 
'
P
o
r
t
l
a
n
d
'
,
 
'
S
t
.
 
A
n
d
r
e
w
'
,
 
'
S
t
.
 
A
n
n
'
,
 
'
S
t
.
 
C
a
t
h
e
r
i
n
e
'
,
 
'
S
t
.
 
E
l
i
z
a
b
e
t
h
'
,
 
'
S
t
.
 
J
a
m
e
s
'
,
 
'
S
t
.
 
M
a
r
y
'
,
 
'
S
t
.
 
T
h
o
m
a
s
'
,
 
'
T
r
e
l
a
w
n
y
'
,
 
'
W
e
s
t
m
o
r
e
l
a
n
d
'
,
 
'
K
i
n
g
s
t
o
n
'
)
,
 
'
J
O
'
 
=
>
 
a
r
r
a
y
(
"
A
l
 
B
a
l
q
a
'
"
,
 
'
M
a
'
,
 
'
A
l
 
K
a
r
a
k
'
,
 
'
A
l
 
M
a
f
r
a
q
'
,
 
'
A
t
 
T
a
f
i
l
a
h
'
,
 
'
A
z
 
Z
a
r
q
a
'
,
 
'
I
r
b
i
d
'
)
,
 
'
J
P
'
 
=
>
 
a
r
r
a
y
(
'
A
i
c
h
i
'
,
 
'
A
k
i
t
a
'
,
 
'
A
o
m
o
r
i
'
,
 
'
C
h
i
b
a
'
,
 
'
E
h
i
m
e
'
,
 
'
F
u
k
u
i
'
,
 
'
F
u
k
u
o
k
a
'
,
 
'
F
u
k
u
s
h
i
m
a
'
,
 
'
G
i
f
u
'
,
 
'
G
u
m
m
a
'
,
 
'
H
i
r
o
s
h
i
m
a
'
,
 
'
H
o
k
k
a
i
d
o
'
,
 
'
H
y
o
g
o
'
,
 
'
I
b
a
r
a
k
i
'
,
 
'
I
s
h
i
k
a
w
a
'
,
 
'
I
w
a
t
e
'
,
 
'
K
a
g
a
w
a
'
,
 
'
K
a
g
o
s
h
i
m
a
'
,
 
'
K
a
n
a
g
a
w
a
'
,
 
'
K
o
c
h
i
'
,
 
'
K
u
m
a
m
o
t
o
'
,
 
'
K
y
o
t
o
'
,
 
'
M
i
e
'
,
 
'
M
i
y
a
g
i
'
,
 
'
M
i
y
a
z
a
k
i
'
,
 
'
N
a
g
a
n
o
'
,
 
'
N
a
g
a
s
a
k
i
'
,
 
'
N
a
r
a
'
,
 
'
N
i
i
g
a
t
a
'
,
 
'
O
i
t
a
'
,
 
'
O
k
a
y
a
m
a
'
,
 
'
O
s
a
k
a
'
,
 
'
S
a
g
a
'
,
 
'
S
a
i
t
a
m
a
'
,
 
'
S
h
i
g
a
'
,
 
'
S
h
i
m
a
n
e
'
,
 
'
S
h
i
z
u
o
k
a
'
,
 
'
T
o
c
h
i
g
i
'
,
 
'
T
o
k
u
s
h
i
m
a
'
,
 
'
T
o
k
y
o
'
,
 
'
T
o
t
t
o
r
i
'
,
 
'
T
o
y
a
m
a
'
,
 
'
W
a
k
a
y
a
m
a
'
,
 
'
Y
a
m
a
g
a
t
a
'
,
 
'
Y
a
m
a
g
u
c
h
i
'
,
 
'
Y
a
m
a
n
a
s
h
i
'
,
 
'
O
k
i
n
a
w
a
'
)
,
 
'
K
E
'
 
=
>
 
a
r
r
a
y
(
'
C
e
n
t
r
a
l
'
,
 
'
C
o
a
s
t
'
,
 
'
E
a
s
t
e
r
n
'
,
 
'
N
a
i
r
o
b
i
 
A
r
e
a
'
,
 
'
N
o
r
t
h
-
E
a
s
t
e
r
n
'
,
 
'
N
y
a
n
z
a
'
,
 
'
R
i
f
t
 
V
a
l
l
e
y
'
,
 
'
W
.
'
)
,
 
'
K
G
'
 
=
>
 
a
r
r
a
y
(
'
B
a
t
k
e
n
'
)
,
 
'
K
H
'
 
=
>
 
a
r
r
a
y
(
'
K
a
m
p
o
n
g
 
C
h
a
m
'
,
 
'
K
a
m
p
o
n
g
 
C
h
h
n
a
n
g
'
,
 
'
K
a
m
p
o
n
g
 
S
p
o
e
'
,
 
'
K
a
m
p
o
n
g
 
T
h
u
m
'
,
 
'
K
a
m
p
o
t
'
,
 
'
K
a
n
d
a
l
'
,
 
'
K
a
o
h
 
K
o
n
g
'
,
 
'
K
r
a
c
h
e
h
'
,
 
'
M
o
n
d
o
l
 
K
i
r
i
'
,
 
'
P
h
n
u
m
 
P
e
n
h
'
,
 
'
P
o
u
t
h
i
s
a
t
'
,
 
'
P
r
e
a
h
 
V
i
h
e
a
r
'
,
 
'
P
r
e
y
 
V
e
n
g
'
,
 
'
R
o
t
a
n
o
k
i
r
i
'
,
 
'
S
i
e
m
r
e
a
b
-
O
t
d
a
r
 
M
e
a
n
c
h
e
y
'
,
 
'
S
t
o
e
n
g
 
T
r
e
n
g
'
,
 
'
S
v
a
y
 
R
i
e
n
g
'
,
 
'
T
a
k
e
v
'
,
 
'
B
a
t
d
a
m
b
a
n
g
'
,
 
'
P
a
i
l
i
n
'
)
,
 
'
K
I
'
 
=
>
 
a
r
r
a
y
(
'
G
i
l
b
e
r
t
 
I
s
.
'
,
 
'
L
i
n
e
 
I
s
.
'
,
 
'
P
h
o
e
n
i
x
 
I
s
.
'
)
,
 
'
K
M
'
 
=
>
 
a
r
r
a
y
(
'
A
n
j
o
u
a
n
'
,
 
'
G
r
a
n
d
e
 
C
o
m
o
r
e
'
,
 
'
M
o
h
e
l
i
'
)
,
 
'
K
N
'
 
=
>
 
a
r
r
a
y
(
'
C
h
r
i
s
t
 
C
h
u
r
c
h
 
N
i
c
h
o
l
a
 
T
o
w
n
'
,
 
'
S
t
.
 
A
n
n
e
 
S
a
n
d
y
 
P
o
i
n
t
'
,
 
'
S
t
.
 
G
e
o
r
g
e
 
B
a
s
s
e
t
e
r
r
e
'
,
 
'
S
t
.
 
G
e
o
r
g
e
 
G
i
n
g
e
r
l
a
n
d
'
,
 
'
S
t
.
 
J
a
m
e
s
 
W
i
n
d
w
a
r
d
'
,
 
'
S
t
.
 
J
o
h
n
 
C
a
p
i
s
t
e
r
r
e
'
,
 
'
S
t
.
 
J
o
h
n
 
F
i
g
t
r
e
e
'
,
 
'
S
t
.
 
M
a
r
y
 
C
a
y
o
n
'
,
 
'
S
t
.
 
P
a
u
l
 
C
a
p
i
s
t
e
r
r
e
'
,
 
'
S
t
.
 
P
a
u
l
 
C
h
a
r
l
e
s
t
o
w
n
'
,
 
'
S
t
.
 
P
e
t
e
r
 
B
a
s
s
e
t
e
r
r
e
'
,
 
'
S
t
.
 
T
h
o
m
a
s
 
L
o
w
l
a
n
d
'
,
 
'
S
t
.
 
T
h
o
m
a
s
 
M
i
d
d
l
e
 
I
s
.
'
,
 
'
T
r
i
n
i
t
y
 
P
a
l
m
e
t
t
o
 
P
o
i
n
t
'
)
,
 
'
K
P
'
 
=
>
 
a
r
r
a
y
(
'
C
h
a
g
a
n
g
-
d
o
'
,
 
'
H
a
m
g
y
o
n
g
-
n
a
m
d
o
'
,
 
'
H
w
a
n
g
h
a
e
-
n
a
m
d
o
'
,
 
'
H
w
a
n
g
h
a
e
-
b
u
k
t
o
'
,
 
'
K
a
e
s
o
n
g
-
s
i
'
,
 
'
K
a
n
g
w
o
n
-
d
o
'
,
 
"
P
'
y
o
n
g
a
n
-
b
u
k
t
o
"
,
 
"
P
'
y
o
n
g
y
a
n
g
-
s
i
"
,
 
'
Y
a
n
g
g
a
n
g
-
d
o
'
,
 
"
N
a
m
p
'
o
-
s
i
"
,
 
"
P
'
y
o
n
g
a
n
-
n
a
m
d
o
"
,
 
'
H
a
m
g
y
o
n
g
-
b
u
k
t
o
'
,
 
'
N
a
j
i
n
 
S
o
n
b
o
n
g
-
s
i
'
)
,
 
'
K
R
'
 
=
>
 
a
r
r
a
y
(
'
C
h
e
j
u
-
d
o
'
,
 
'
C
h
o
l
l
a
-
b
u
k
t
o
'
,
 
"
C
h
'
u
n
g
c
h
'
o
n
g
-
b
u
k
t
o
"
,
 
'
K
a
n
g
w
o
n
-
d
o
'
,
 
'
P
u
s
a
n
-
j
i
k
h
a
l
s
i
'
,
 
"
S
o
u
l
-
t
'
u
k
p
y
o
l
s
i
"
,
 
"
I
n
c
h
'
o
n
-
j
i
k
h
a
l
s
i
"
,
 
'
K
y
o
n
g
g
i
-
d
o
'
,
 
'
K
y
o
n
g
s
a
n
g
-
b
u
k
t
o
'
,
 
'
T
a
e
g
u
-
j
i
k
h
a
l
s
i
'
,
 
'
C
h
o
l
l
a
-
n
a
m
d
o
'
,
 
"
C
h
'
u
n
g
c
h
'
o
n
g
-
n
a
m
d
o
"
,
 
'
K
w
a
n
g
j
u
-
j
i
k
h
a
l
s
i
'
,
 
'
T
a
e
j
o
n
-
j
i
k
h
a
l
s
i
'
,
 
'
K
y
o
n
g
s
a
n
g
-
n
a
m
d
o
'
,
 
'
U
l
s
a
n
-
g
w
a
n
g
y
o
k
s
i
'
)
,
 
'
K
W
'
 
=
>
 
a
r
r
a
y
(
'
A
l
 
A
h
m
a
d
i
'
,
 
'
A
l
 
K
u
w
a
y
t
'
,
 
'
H
a
w
a
l
l
i
'
)
,
 
'
K
Y
'
 
=
>
 
a
r
r
a
y
(
'
C
r
e
e
k
'
,
 
'
E
a
s
t
e
r
n
'
,
 
'
M
i
d
l
a
n
d
'
,
 
'
S
.
 
T
o
w
n
'
,
 
'
S
p
o
t
 
B
a
y
'
,
 
'
S
t
a
k
e
 
B
a
y
'
,
 
'
W
e
s
t
 
E
n
d
'
,
 
'
W
.
'
)
,
 
'
K
Z
'
 
=
>
 
a
r
r
a
y
(
'
A
l
m
a
t
y
'
,
 
'
A
l
m
a
t
y
 
C
i
t
y
'
,
 
'
A
q
m
o
l
a
'
,
 
'
A
q
t
Ã
ƒ
Â
¶
b
e
'
,
 
'
A
s
t
a
n
a
'
,
 
'
A
t
y
r
a
u
'
,
 
'
W
e
s
t
 
K
a
z
a
k
h
s
t
a
n
'
,
 
'
B
a
y
q
o
n
y
r
'
,
 
'
M
a
n
g
g
h
y
s
t
a
u
'
,
 
'
S
.
 
K
a
z
a
k
h
s
t
a
n
'
,
 
'
P
a
v
l
o
d
a
r
'
,
 
'
Q
a
r
a
g
h
a
n
d
y
'
,
 
'
Q
o
s
t
a
n
a
y
'
,
 
'
Q
y
z
y
l
o
r
d
a
'
,
 
'
E
a
s
t
 
K
a
z
a
k
h
s
t
a
n
'
,
 
'
N
o
r
t
h
 
K
a
z
a
k
h
s
t
a
n
'
,
 
'
Z
h
a
m
b
y
l
'
)
,
 
'
L
A
'
 
=
>
 
a
r
r
a
y
(
'
A
t
t
a
p
u
'
,
 
'
C
h
a
m
p
a
s
a
k
'
,
 
'
H
o
u
a
p
h
a
n
'
,
 
'
K
h
a
m
m
o
u
a
n
'
,
 
'
L
o
u
a
n
g
 
N
a
m
t
h
a
'
,
 
'
L
o
u
a
n
g
p
h
r
a
b
a
n
g
'
,
 
'
O
u
d
o
m
x
a
i
'
,
 
'
P
h
o
n
g
s
a
l
i
'
,
 
'
S
a
r
a
v
a
n
'
,
 
'
S
a
v
a
n
n
a
k
h
e
t
'
,
 
'
V
i
e
n
t
i
a
n
e
'
,
 
'
X
a
i
g
n
a
b
o
u
r
i
'
,
 
'
X
i
a
n
g
k
h
o
a
n
g
'
)
,
 
'
L
B
'
 
=
>
 
a
r
r
a
y
(
'
B
e
q
a
a
'
,
 
'
L
i
b
a
n
-
N
o
r
d
'
,
 
'
B
e
y
r
o
u
t
h
'
,
 
'
M
o
n
t
-
L
i
b
a
n
'
,
 
'
L
i
b
a
n
-
S
u
d
'
,
 
'
N
a
b
a
t
i
y
e
'
)
,
 
'
L
C
'
 
=
>
 
a
r
r
a
y
(
'
A
n
s
e
-
l
a
-
R
a
y
e
'
,
 
'
D
a
u
p
h
i
n
'
,
 
'
C
a
s
t
r
i
e
s
'
,
 
'
C
h
o
i
s
e
u
l
'
,
 
'
D
e
n
n
e
r
y
'
,
 
'
G
r
o
s
-
I
s
l
e
t
'
,
 
'
L
a
b
o
r
i
e
'
,
 
'
M
i
c
o
u
d
'
,
 
'
S
o
u
f
r
i
e
r
e
'
,
 
'
V
i
e
u
x
-
F
o
r
t
'
,
 
'
P
r
a
s
l
i
n
'
)
,
 
'
L
I
'
 
=
>
 
a
r
r
a
y
(
'
B
a
l
z
e
r
s
'
,
 
'
E
s
c
h
e
n
'
,
 
'
G
a
m
p
r
i
n
'
,
 
'
M
a
u
r
e
n
'
,
 
'
P
l
a
n
k
e
n
'
,
 
'
R
u
g
g
e
l
l
'
,
 
'
S
c
h
a
a
n
'
,
 
'
S
c
h
e
l
l
e
n
b
e
r
g
'
,
 
'
T
r
i
e
s
e
n
'
,
 
'
T
r
i
e
s
e
n
b
e
r
g
'
,
 
'
V
a
d
u
z
'
)
,
 
'
L
K
'
 
=
>
 
a
r
r
a
y
(
'
A
m
p
a
r
a
i
'
,
 
'
A
n
u
r
a
d
h
a
p
u
r
a
'
,
 
'
B
a
d
u
l
l
a
'
,
 
'
B
a
t
t
i
c
a
l
o
a
'
,
 
'
G
a
l
l
e
'
,
 
'
H
a
m
b
a
n
t
o
t
a
'
,
 
'
K
a
l
u
t
a
r
a
'
,
 
'
K
a
n
d
y
'
,
 
'
K
e
g
a
l
l
a
'
,
 
'
K
u
r
u
n
e
g
a
l
a
'
,
 
'
M
a
t
a
l
e
'
,
 
'
M
a
t
a
r
a
'
,
 
'
M
o
n
e
r
a
g
a
l
a
'
,
 
'
N
u
w
a
r
a
 
E
l
i
y
a
'
,
 
'
P
o
l
o
n
n
a
r
u
w
a
'
,
 
'
P
u
t
t
a
l
a
m
'
,
 
'
R
a
t
n
a
p
u
r
a
'
,
 
'
T
r
i
n
c
o
m
a
l
e
e
'
,
 
'
C
o
l
o
m
b
o
'
,
 
'
G
a
m
p
a
h
a
'
,
 
'
J
a
f
f
n
a
'
,
 
'
M
a
n
n
a
r
'
,
 
'
M
u
l
l
a
i
t
t
i
v
u
'
,
 
'
V
a
v
u
n
i
y
a
'
)
,
 
'
L
R
'
 
=
>
 
a
r
r
a
y
(
'
B
o
n
g
'
,
 
'
G
r
a
n
d
 
J
i
d
e
'
,
 
'
G
r
a
n
d
 
B
a
s
s
a
'
,
 
'
G
r
a
n
d
 
C
a
p
e
 
M
o
u
n
t
'
,
 
'
L
o
f
a
'
,
 
'
M
a
r
y
l
a
n
d
'
,
 
'
M
o
n
r
o
v
i
a
'
,
 
'
M
o
n
t
s
e
r
r
a
d
o
'
,
 
'
N
i
m
b
a
'
,
 
'
S
i
n
o
'
)
,
 
'
L
S
'
 
=
>
 
a
r
r
a
y
(
'
B
e
r
e
a
'
,
 
'
B
u
t
h
a
-
B
u
t
h
e
'
,
 
'
L
e
r
i
b
e
'
,
 
'
M
a
f
e
t
e
n
g
'
,
 
'
M
a
s
e
r
u
'
,
 
'
M
o
h
a
l
e
s
 
H
o
e
k
'
,
 
'
M
o
k
h
o
t
l
o
n
g
'
,
 
'
Q
a
c
h
a
s
 
N
e
k
'
,
 
'
Q
u
t
h
i
n
g
'
,
 
'
T
h
a
b
a
-
T
s
e
k
a
'
)
,
 
'
L
T
'
 
=
>
 
a
r
r
a
y
(
'
A
l
y
t
a
u
s
 
A
p
s
k
r
i
t
i
s
'
,
 
'
K
a
u
n
o
 
A
p
s
k
r
i
t
i
s
'
,
 
'
K
l
a
i
p
e
d
o
s
 
A
p
s
k
r
i
t
i
s
'
,
 
'
M
a
r
i
j
a
m
p
o
l
e
s
 
A
p
s
k
r
i
t
i
s
'
,
 
'
P
a
n
e
v
e
z
i
o
 
A
p
s
k
r
i
t
i
s
'
,
 
'
S
i
a
u
l
i
u
 
A
p
s
k
r
i
t
i
s
'
,
 
'
T
a
u
r
a
g
e
s
 
A
p
s
k
r
i
t
i
s
'
,
 
'
T
e
l
s
i
u
 
A
p
s
k
r
i
t
i
s
'
,
 
'
U
t
e
n
o
s
 
A
p
s
k
r
i
t
i
s
'
,
 
'
V
i
l
n
i
a
u
s
 
A
p
s
k
r
i
t
i
s
'
)
,
 
'
L
U
'
 
=
>
 
a
r
r
a
y
(
'
D
i
e
k
i
r
c
h
'
,
 
'
G
r
e
v
e
n
m
a
c
h
e
r
'
,
 
'
L
u
x
e
m
b
o
u
r
g
'
)
,
 
'
L
V
'
 
=
>
 
a
r
r
a
y
(
'
A
g
l
o
n
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
A
i
z
k
r
a
u
k
l
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
A
i
z
p
u
t
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
A
k
n
i
s
t
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
A
l
o
j
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
A
l
s
u
n
g
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
A
l
u
k
s
n
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
A
m
a
t
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
A
p
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
A
u
c
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
A
d
a
z
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
B
a
b
i
t
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
B
a
l
d
o
n
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
B
a
l
t
i
n
a
v
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
B
a
l
v
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
B
a
u
s
k
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
B
e
v
e
r
i
n
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
B
r
o
c
e
n
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
B
u
r
t
n
i
e
k
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
C
a
r
n
i
k
a
v
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
C
e
s
i
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
C
e
s
v
a
i
n
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
C
i
b
l
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
D
a
g
d
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
D
a
u
g
a
v
p
i
l
s
 
c
i
t
y
'
,
 
'
D
a
u
g
a
v
p
i
l
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
D
o
b
e
l
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
D
u
n
d
a
g
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
D
u
r
b
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
E
n
g
u
r
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
E
r
g
l
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
G
a
r
k
a
l
n
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
G
r
o
b
i
n
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
G
u
l
b
e
n
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
I
e
c
a
v
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
I
k
s
k
i
l
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
I
n
c
u
k
a
l
n
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
I
l
u
k
s
t
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
J
a
u
n
j
e
l
g
a
v
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
J
a
u
n
p
i
e
b
a
l
g
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
J
a
u
n
p
i
l
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
J
e
k
a
b
p
i
l
s
 
c
i
t
y
'
,
 
'
J
e
k
a
b
p
i
l
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
J
e
l
g
a
v
a
 
c
i
t
y
'
,
 
'
J
e
l
g
a
v
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
J
u
r
m
a
l
a
 
c
i
t
y
'
,
 
'
K
a
n
d
a
v
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
K
a
r
s
a
v
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
K
o
k
n
e
s
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
K
r
a
s
l
a
v
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
K
r
i
m
u
l
d
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
K
r
u
s
t
p
i
l
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
K
u
l
d
i
g
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
K
e
g
u
m
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
K
e
k
a
v
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
L
i
e
l
v
a
r
d
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
L
i
e
p
a
j
a
 
c
i
t
y
'
,
 
'
L
i
g
a
t
n
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
L
i
m
b
a
z
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
L
i
v
a
n
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
L
u
b
a
n
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
L
u
d
z
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
M
a
d
o
n
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
M
a
l
p
i
l
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
M
a
r
u
p
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
M
a
z
s
a
l
a
c
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
N
a
u
k
s
e
n
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
N
e
r
e
t
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
N
i
c
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
O
g
r
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
O
l
a
i
n
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
O
z
o
l
n
i
e
k
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
P
a
r
g
a
u
j
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
P
a
v
i
l
o
s
t
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
P
l
a
v
i
n
a
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
P
r
e
i
l
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
P
r
i
e
k
u
l
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
P
r
i
e
k
u
l
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
R
a
u
n
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
R
e
z
e
k
n
e
 
c
i
t
y
'
,
 
'
R
e
z
e
k
n
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
R
i
e
b
i
n
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
R
i
g
a
 
c
i
t
y
'
,
 
'
R
o
j
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
R
o
p
a
z
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
R
u
c
a
v
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
R
u
g
a
j
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
R
u
n
d
a
l
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
R
u
j
i
e
n
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
S
a
l
a
c
g
r
i
v
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
S
a
l
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
S
a
l
a
s
p
i
l
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
S
a
l
d
u
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
S
a
u
l
k
r
a
s
t
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
S
e
j
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
S
i
g
u
l
d
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
S
k
r
i
v
e
r
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
S
k
r
u
n
d
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
S
m
i
l
t
e
n
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
S
t
o
p
i
n
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
S
t
r
e
n
c
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
T
a
l
s
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
T
e
r
v
e
t
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
T
u
k
u
m
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
V
a
i
n
o
d
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
V
a
l
k
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
V
a
l
m
i
e
r
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
V
a
r
a
k
l
a
n
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
V
a
r
k
a
v
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
V
e
c
p
i
e
b
a
l
g
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
V
e
c
u
m
n
i
e
k
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
V
e
n
t
s
p
i
l
s
 
c
i
t
y
'
,
 
'
V
e
n
t
s
p
i
l
s
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
V
i
e
s
i
t
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
V
i
l
a
k
a
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
V
i
l
a
n
i
 
M
u
n
i
c
i
p
a
l
i
t
y
'
,
 
'
Z
i
l
u
p
e
 
M
u
n
i
c
i
p
a
l
i
t
y
'
)
,
 
'
L
Y
'
 
=
>
 
a
r
r
a
y
(
'
A
l
'
,
 
'
A
l
 
J
u
f
r
a
h
'
,
 
'
A
l
 
K
u
f
r
a
h
'
,
 
"
A
s
h
 
S
h
a
t
i
'
"
,
 
'
M
u
r
z
u
q
'
,
 
'
S
a
b
h
a
'
,
 
'
T
a
r
h
u
n
a
h
'
,
 
'
T
u
b
r
u
q
'
,
 
'
Z
l
i
t
a
n
'
,
 
'
A
j
d
a
b
i
y
a
'
,
 
'
A
l
 
F
a
t
i
h
'
,
 
'
A
l
 
J
a
b
a
l
 
a
l
 
A
k
h
d
a
r
'
,
 
'
A
l
 
K
h
u
m
s
'
,
 
'
A
n
 
N
u
q
a
t
 
a
l
 
K
h
a
m
s
'
,
 
'
A
w
b
a
r
i
'
,
 
'
A
z
 
Z
a
w
i
y
a
h
'
,
 
'
B
a
n
g
h
a
z
i
'
,
 
'
D
a
r
n
a
h
'
,
 
'
G
h
a
d
a
m
i
s
'
,
 
'
G
h
a
r
y
a
n
'
,
 
'
M
i
s
r
a
t
a
h
'
,
 
'
S
a
w
f
a
j
j
i
n
'
,
 
'
S
u
r
t
'
,
 
'
T
a
r
a
b
u
l
u
s
'
,
 
'
Y
a
f
r
a
n
'
)
,
 
'
M
A
'
 
=
>
 
a
r
r
a
y
(
'
A
g
a
d
i
r
'
,
 
'
A
l
 
H
o
c
e
i
m
a
'
,
 
'
A
z
i
l
a
l
'
,
 
'
B
e
n
 
S
l
i
m
a
n
e
'
,
 
'
B
e
n
i
 
M
e
l
l
a
l
'
,
 
'
B
o
u
l
e
m
a
n
e
'
,
 
'
C
a
s
a
b
l
a
n
c
a
'
,
 
'
C
h
a
o
u
e
n
'
,
 
'
E
l
 
J
a
d
i
d
a
'
,
 
'
E
l
 
K
e
l
a
a
 
d
e
s
 
S
r
a
r
h
n
a
'
,
 
'
E
r
 
R
a
c
h
i
d
i
a
'
,
 
'
E
s
s
a
o
u
i
r
a
'
,
 
'
F
e
s
'
,
 
'
F
i
g
u
i
g
'
,
 
'
K
e
n
i
t
r
a
'
,
 
'
K
h
e
m
i
s
s
e
t
'
,
 
'
K
h
e
n
i
f
r
a
'
,
 
'
K
h
o
u
r
i
b
g
a
'
,
 
'
M
a
r
r
a
k
e
c
h
'
,
 
'
M
e
k
n
e
s
'
,
 
'
N
a
d
o
r
'
,
 
'
O
u
a
r
z
a
z
a
t
e
'
,
 
'
O
u
j
d
a
'
,
 
'
R
a
b
a
t
-
S
a
l
e
'
,
 
'
S
a
f
i
'
,
 
'
S
e
t
t
a
t
'
,
 
'
T
a
n
g
e
r
'
,
 
'
T
a
t
a
'
,
 
'
T
a
z
a
'
,
 
'
T
i
z
n
i
t
'
,
 
'
G
u
e
l
m
i
m
'
,
 
'
I
f
r
a
n
e
'
,
 
'
L
a
a
y
o
u
n
e
'
,
 
'
T
a
n
-
T
a
n
'
,
 
'
T
a
o
u
n
a
t
e
'
,
 
'
S
i
d
i
 
K
a
c
e
m
'
,
 
'
T
a
r
o
u
d
a
n
n
t
'
,
 
'
T
e
t
o
u
a
n
'
,
 
'
L
a
r
a
c
h
e
'
)
,
 
'
M
C
'
 
=
>
 
a
r
r
a
y
(
'
L
a
 
C
o
n
d
a
m
i
n
e
'
,
 
'
M
o
n
a
c
o
'
,
 
'
M
o
n
t
e
-
C
a
r
l
o
'
)
,
 
'
M
D
'
 
=
>
 
a
r
r
a
y
(
'
B
a
l
t
i
'
,
 
'
C
a
h
u
l
'
,
 
'
C
h
i
s
i
n
a
u
'
,
 
'
S
t
i
n
g
a
 
N
i
s
t
r
u
l
u
i
'
,
 
'
E
d
i
n
e
t
'
,
 
'
G
a
g
a
u
z
i
a
'
,
 
'
L
a
p
u
s
n
a
'
,
 
'
O
r
h
e
i
'
,
 
'
S
o
r
o
c
a
'
,
 
'
T
i
g
h
i
n
a
'
,
 
'
U
n
g
h
e
n
i
'
)
,
 
'
M
G
'
 
=
>
 
a
r
r
a
y
(
'
A
n
t
s
i
r
a
n
a
n
a
'
,
 
'
F
i
a
n
a
r
a
n
t
s
o
a
'
,
 
'
M
a
h
a
j
a
n
g
a
'
,
 
'
T
o
a
m
a
s
i
n
a
'
,
 
'
A
n
t
a
n
a
n
a
r
i
v
o
'
,
 
'
T
o
l
i
a
r
a
'
)
,
 
'
M
K
'
 
=
>
 
a
r
r
a
y
(
'
A
r
a
c
i
n
o
v
o
'
,
 
'
B
a
c
'
,
 
'
B
e
l
c
i
s
t
a
'
,
 
'
B
e
r
o
v
o
'
,
 
'
B
i
s
t
r
i
c
a
'
,
 
'
B
i
t
o
l
a
'
,
 
'
B
l
a
t
e
c
'
,
 
'
B
o
g
d
a
n
c
i
'
,
 
'
B
o
g
o
m
i
l
a
'
,
 
'
B
o
g
o
v
i
n
j
e
'
,
 
'
B
o
s
i
l
o
v
o
'
,
 
'
B
r
v
e
n
i
c
a
'
,
 
'
C
a
i
r
'
,
 
'
C
a
p
a
r
i
'
,
 
'
C
a
s
k
a
'
,
 
'
C
e
g
r
a
n
e
'
,
 
'
C
e
n
t
a
r
'
,
 
'
C
e
n
t
a
r
 
Z
u
p
a
'
,
 
'
C
e
s
i
n
o
v
o
'
,
 
'
C
u
c
e
r
-
S
a
n
d
e
v
o
'
,
 
'
D
e
b
a
r
'
,
 
'
D
e
l
c
e
v
o
'
,
 
'
D
e
l
o
g
o
z
d
i
'
,
 
'
D
e
m
i
r
 
H
i
s
a
r
'
,
 
'
D
e
m
i
r
 
K
a
p
i
j
a
'
,
 
'
D
o
b
r
u
s
e
v
o
'
,
 
'
D
o
l
n
a
 
B
a
n
j
i
c
a
'
,
 
'
D
o
l
n
e
n
i
'
,
 
'
D
o
r
c
e
 
P
e
t
r
o
v
'
,
 
'
D
r
u
g
o
v
o
'
,
 
'
D
z
e
p
c
i
s
t
e
'
,
 
'
G
a
z
i
 
B
a
b
a
'
,
 
'
G
e
v
g
e
l
i
j
a
'
,
 
'
G
o
s
t
i
v
a
r
'
,
 
'
G
r
a
d
s
k
o
'
,
 
'
I
l
i
n
d
e
n
'
,
 
'
I
z
v
o
r
'
,
 
'
J
e
g
u
n
o
v
c
e
'
,
 
'
K
a
m
e
n
j
a
n
e
'
,
 
'
K
a
r
b
i
n
c
i
'
,
 
'
K
a
r
p
o
s
'
,
 
'
K
a
v
a
d
a
r
c
i
'
,
 
'
K
i
c
e
v
o
'
,
 
'
K
i
s
e
l
a
 
V
o
d
a
'
,
 
'
K
l
e
c
e
v
c
e
'
,
 
'
K
o
c
a
n
i
'
,
 
'
K
o
n
c
e
'
,
 
'
K
o
n
d
o
v
o
'
,
 
'
K
o
n
o
p
i
s
t
e
'
,
 
'
K
o
s
e
l
'
,
 
'
K
r
a
t
o
v
o
'
,
 
'
K
r
i
v
a
 
P
a
l
a
n
k
a
'
,
 
'
K
r
i
v
o
g
a
s
t
a
n
i
'
,
 
'
K
r
u
s
e
v
o
'
,
 
'
K
u
k
l
i
s
'
,
 
'
K
u
k
u
r
e
c
a
n
i
'
,
 
'
K
u
m
a
n
o
v
o
'
,
 
'
L
a
b
u
n
i
s
t
a
'
,
 
'
L
i
p
k
o
v
o
'
,
 
'
L
o
z
o
v
o
'
,
 
'
L
u
k
o
v
o
'
,
 
'
M
a
k
e
d
o
n
s
k
a
 
K
a
m
e
n
i
c
a
'
,
 
'
M
a
k
e
d
o
n
s
k
i
 
B
r
o
d
'
,
 
'
M
a
v
r
o
v
i
 
A
n
o
v
i
'
,
 
'
M
e
s
e
i
s
t
a
'
,
 
'
M
i
r
a
v
c
i
'
,
 
'
M
o
g
i
l
a
'
,
 
'
M
u
r
t
i
n
o
'
,
 
'
N
e
g
o
t
i
n
o
'
,
 
'
N
e
g
o
t
i
n
o
-
P
o
l
o
s
k
o
'
,
 
'
N
o
v
a
c
i
'
,
 
'
N
o
v
o
 
S
e
l
o
'
,
 
'
O
b
l
e
s
e
v
o
'
,
 
'
O
h
r
i
d
'
,
 
'
O
r
a
s
a
c
'
,
 
'
O
r
i
z
a
r
i
'
,
 
'
O
s
l
o
m
e
j
'
,
 
'
P
e
h
c
e
v
o
'
,
 
'
P
e
t
r
o
v
e
c
'
,
 
'
P
l
a
s
n
i
c
a
'
,
 
'
P
o
d
a
r
e
s
'
,
 
'
P
r
i
l
e
p
'
,
 
'
P
r
o
b
i
s
t
i
p
'
,
 
'
R
a
d
o
v
i
s
'
,
 
'
R
a
n
k
o
v
c
e
'
,
 
'
R
e
s
e
n
'
,
 
'
R
o
s
o
m
a
n
'
,
 
'
R
o
s
t
u
s
a
'
,
 
'
S
a
m
o
k
o
v
'
,
 
'
S
a
r
a
j
'
,
 
'
S
i
p
k
o
v
i
c
a
'
,
 
'
S
o
p
i
s
t
e
'
,
 
'
S
o
p
o
t
n
i
c
a
'
,
 
'
S
r
b
i
n
o
v
o
'
,
 
'
S
t
a
r
a
v
i
n
a
'
,
 
'
S
t
a
r
 
D
o
j
r
a
n
'
,
 
'
S
t
a
r
o
 
N
a
g
o
r
i
c
a
n
e
'
,
 
'
S
t
i
p
'
,
 
'
S
t
r
u
g
a
'
,
 
'
S
t
r
u
m
i
c
a
'
,
 
'
S
t
u
d
e
n
i
c
a
n
i
'
,
 
'
S
u
t
o
 
O
r
i
z
a
r
i
'
,
 
'
S
v
e
t
i
 
N
i
k
o
l
e
'
,
 
'
T
e
a
r
c
e
'
,
 
'
T
e
t
o
v
o
'
,
 
'
T
o
p
o
l
c
a
n
i
'
,
 
'
V
a
l
a
n
d
o
v
o
'
,
 
'
V
a
s
i
l
e
v
o
'
,
 
'
V
e
l
e
s
'
,
 
'
V
e
l
e
s
t
a
'
,
 
'
V
e
v
c
a
n
i
'
,
 
'
V
i
n
i
c
a
'
,
 
'
V
i
t
o
l
i
s
t
e
'
,
 
'
V
r
a
n
e
s
t
i
c
a
'
,
 
'
V
r
a
p
c
i
s
t
e
'
,
 
'
V
r
a
t
n
i
c
a
'
,
 
'
V
r
u
t
o
k
'
,
 
'
Z
a
j
a
s
'
,
 
'
Z
e
l
e
n
i
k
o
v
o
'
,
 
'
Z
e
l
i
n
o
'
,
 
'
Z
i
t
o
s
e
'
,
 
'
Z
l
e
t
o
v
o
'
,
 
'
Z
r
n
o
v
c
i
'
)
,
 
'
M
L
'
 
=
>
 
a
r
r
a
y
(
'
B
a
m
a
k
o
'
,
 
'
G
a
o
'
,
 
'
K
a
y
e
s
'
,
 
'
M
o
p
t
i
'
,
 
'
S
e
g
o
u
'
,
 
'
S
i
k
a
s
s
o
'
,
 
'
K
o
u
l
i
k
o
r
o
'
,
 
'
T
o
m
b
o
u
c
t
o
u
'
)
,
 
'
M
M
'
 
=
>
 
a
r
r
a
y
(
'
R
a
k
h
i
n
e
 
S
t
a
t
e
'
,
 
'
C
h
i
n
 
S
t
a
t
e
'
,
 
'
I
r
r
a
w
a
d
d
y
'
,
 
'
K
a
c
h
i
n
 
S
t
a
t
e
'
,
 
'
K
a
r
a
n
 
S
t
a
t
e
'
,
 
'
K
a
y
a
h
 
S
t
a
t
e
'
,
 
'
M
a
g
w
e
'
,
 
'
M
a
n
d
a
l
a
y
'
,
 
'
P
e
g
u
'
,
 
'
S
a
g
a
i
n
g
'
,
 
'
S
h
a
n
 
S
t
a
t
e
'
,
 
'
T
e
n
a
s
s
e
r
i
m
'
,
 
'
M
o
n
 
S
t
a
t
e
'
,
 
'
R
a
n
g
o
o
n
'
)
,
 
'
M
N
'
 
=
>
 
a
r
r
a
y
(
'
A
n
d
r
i
j
e
v
i
c
a
'
,
 
'
B
a
r
'
,
 
'
B
e
r
a
n
e
'
,
 
'
B
i
j
e
l
o
 
P
o
l
j
e
'
,
 
'
B
u
d
v
a
'
,
 
'
C
e
t
i
n
j
e
'
,
 
'
D
a
n
i
l
o
v
g
r
a
d
'
,
 
'
H
e
r
c
e
g
 
N
o
v
i
'
,
 
'
K
o
l
a
Å
¡
i
n
'
,
 
'
K
o
t
o
r
'
,
 
'
M
o
j
k
o
v
a
c
'
,
 
'
N
i
k
Å
¡
i
Ä
‡
'
,
 
'
P
l
a
v
'
,
 
'
P
l
u
Å
¾
i
n
e
'
,
 
'
P
l
j
e
v
l
j
a
'
,
 
'
P
o
d
g
o
r
i
c
a
'
,
 
'
G
o
l
u
b
o
v
c
i
'
,
 
'
T
u
z
i
'
,
 
'
R
o
Å
¾
a
j
e
'
,
 
'
Å
 
a
v
n
i
k
'
,
 
'
T
i
v
a
t
'
,
 
'
U
l
c
i
n
j
'
,
 
'
Å
½
a
b
l
j
a
k
'
)
,
 
'
M
O
'
 
=
>
 
a
r
r
a
y
(
'
I
l
h
a
s
'
,
 
'
M
a
c
a
u
'
)
,
 
'
M
R
'
 
=
>
 
a
r
r
a
y
(
'
H
o
d
h
 
E
c
h
 
C
h
a
r
g
u
i
'
,
 
'
H
o
d
h
 
E
l
 
G
h
a
r
b
i
'
,
 
'
A
s
s
a
b
a
'
,
 
'
G
o
r
g
o
l
'
,
 
'
B
r
a
k
n
a
'
,
 
'
T
r
a
r
z
a
'
,
 
'
A
d
r
a
r
'
,
 
'
D
a
k
h
l
e
t
 
N
o
u
a
d
h
i
b
o
u
'
,
 
'
T
a
g
a
n
t
'
,
 
'
G
u
i
d
i
m
a
k
a
'
,
 
'
T
i
r
i
s
 
Z
e
m
m
o
u
r
'
,
 
'
I
n
c
h
i
r
i
'
)
,
 
'
M
S
'
 
=
>
 
a
r
r
a
y
(
'
S
t
.
 
A
n
t
h
o
n
y
'
,
 
'
S
t
.
 
G
e
o
r
g
e
s
'
,
 
'
S
t
.
 
P
e
t
e
r
'
)
,
 
'
M
U
'
 
=
>
 
a
r
r
a
y
(
'
B
l
a
c
k
 
R
i
v
e
r
'
,
 
'
F
l
a
c
q
'
,
 
'
G
r
a
n
d
 
P
o
r
t
'
,
 
'
M
o
k
a
'
,
 
'
P
a
m
p
l
e
m
o
u
s
s
e
s
'
,
 
'
P
l
a
i
n
e
s
 
W
i
l
h
e
m
s
'
,
 
'
P
o
r
t
 
L
o
u
i
s
'
,
 
'
R
i
v
i
e
r
e
 
d
u
 
R
e
m
p
a
r
t
'
,
 
'
S
a
v
a
n
n
e
'
,
 
'
A
g
a
l
e
g
a
 
I
s
.
'
,
 
'
C
a
r
g
a
d
o
s
 
C
a
r
a
j
o
s
'
,
 
'
R
o
d
r
i
g
u
e
s
'
)
,
 
'
M
V
'
 
=
>
 
a
r
r
a
y
(
'
S
e
e
n
u
'
,
 
'
A
l
i
f
f
'
,
 
'
L
a
v
i
y
a
n
i
'
,
 
'
W
a
a
v
u
'
,
 
'
L
a
a
m
u
'
,
 
'
H
a
a
 
A
l
i
f
f
'
,
 
'
T
h
a
a
'
,
 
'
M
e
e
m
u
'
,
 
'
R
a
a
'
,
 
'
F
a
a
f
u
'
,
 
'
D
a
a
l
u
'
,
 
'
B
a
a
'
,
 
'
H
a
a
 
D
a
a
l
u
'
,
 
'
S
h
a
v
i
y
a
n
i
'
,
 
'
N
o
o
n
u
'
,
 
'
K
a
a
f
u
'
,
 
'
G
a
a
f
u
 
A
l
i
f
f
'
,
 
'
G
a
a
f
u
 
D
a
a
l
u
'
,
 
'
N
a
v
i
y
a
n
i
'
)
,
 
'
M
W
'
 
=
>
 
a
r
r
a
y
(
'
C
h
i
k
w
a
w
a
'
,
 
'
C
h
i
r
a
d
z
u
l
u
'
,
 
'
C
h
i
t
i
p
a
'
,
 
'
T
h
y
o
l
o
'
,
 
'
D
e
d
z
a
'
,
 
'
D
o
w
a
'
,
 
'
K
a
r
o
n
g
a
'
,
 
'
K
a
s
u
n
g
u
'
,
 
'
M
a
c
h
i
n
g
a
'
,
 
'
L
i
l
o
n
g
w
e
'
,
 
'
M
a
n
g
o
c
h
i
'
,
 
'
M
c
h
i
n
j
i
'
,
 
'
M
u
l
a
n
j
e
'
,
 
'
M
z
i
m
b
a
'
,
 
'
N
t
c
h
e
u
'
,
 
'
N
k
h
a
t
a
 
B
a
y
'
,
 
'
N
k
h
o
t
a
k
o
t
a
'
,
 
'
N
s
a
n
j
e
'
,
 
'
N
t
c
h
i
s
i
'
,
 
'
R
u
m
p
h
i
'
,
 
'
S
a
l
i
m
a
'
,
 
'
Z
o
m
b
a
'
,
 
'
B
l
a
n
t
y
r
e
'
,
 
'
M
w
a
n
z
a
'
)
,
 
'
M
X
'
 
=
>
 
a
r
r
a
y
(
'
A
g
u
a
s
c
a
l
i
e
n
t
e
s
'
,
 
'
B
a
j
a
 
C
a
l
i
f
o
r
n
i
a
'
,
 
'
B
a
j
a
 
C
a
l
i
f
o
r
n
i
a
 
S
u
r
'
,
 
'
C
a
m
p
e
c
h
e
'
,
 
'
C
h
i
a
p
a
s
'
,
 
'
C
h
i
h
u
a
h
u
a
'
,
 
'
C
o
a
h
u
i
l
a
 
d
e
 
Z
a
r
a
g
o
z
a
'
,
 
'
C
o
l
i
m
a
'
,
 
'
D
i
s
t
r
i
t
o
 
F
e
d
e
r
a
l
'
,
 
'
D
u
r
a
n
g
o
'
,
 
'
G
u
a
n
a
j
u
a
t
o
'
,
 
'
G
u
e
r
r
e
r
o
'
,
 
'
H
i
d
a
l
g
o
'
,
 
'
J
a
l
i
s
c
o
'
,
 
'
M
e
x
i
c
o
'
,
 
'
M
i
c
h
o
a
c
a
n
 
d
e
 
O
c
a
m
p
o
'
,
 
'
M
o
r
e
l
o
s
'
,
 
'
N
a
y
a
r
i
t
'
,
 
'
N
u
e
v
o
 
L
e
o
n
'
,
 
'
O
a
x
a
c
a
'
,
 
'
P
u
e
b
l
a
'
,
 
'
Q
u
e
r
e
t
a
r
o
 
d
e
 
A
r
t
e
a
g
a
'
,
 
'
Q
u
i
n
t
a
n
a
 
R
o
o
'
,
 
'
S
a
n
 
L
u
i
s
 
P
o
t
o
s
i
'
,
 
'
S
i
n
a
l
o
a
'
,
 
'
S
o
n
o
r
a
'
,
 
'
T
a
b
a
s
c
o
'
,
 
'
T
a
m
a
u
l
i
p
a
s
'
,
 
'
T
l
a
x
c
a
l
a
'
,
 
'
V
e
r
a
c
r
u
z
-
L
l
a
v
e
'
,
 
'
Y
u
c
a
t
a
n
'
,
 
'
Z
a
c
a
t
e
c
a
s
'
)
,
 
'
M
Y
'
 
=
>
 
a
r
r
a
y
(
'
J
o
h
o
r
'
,
 
'
K
e
d
a
h
'
,
 
'
K
e
l
a
n
t
a
n
'
,
 
'
M
e
l
a
k
a
'
,
 
'
N
e
g
e
r
i
 
S
e
m
b
i
l
a
n
'
,
 
'
P
a
h
a
n
g
'
,
 
'
P
e
r
a
k
'
,
 
'
P
e
r
l
i
s
'
,
 
'
P
u
l
a
u
 
P
i
n
a
n
g
'
,
 
'
S
a
r
a
w
a
k
'
,
 
'
S
e
l
a
n
g
o
r
'
,
 
'
T
e
r
e
n
g
g
a
n
u
'
,
 
'
W
i
l
a
y
a
h
 
P
e
r
s
e
k
u
t
u
a
n
'
,
 
'
L
a
b
u
a
n
'
,
 
'
S
a
b
a
h
'
)
,
 
'
M
Z
'
 
=
>
 
a
r
r
a
y
(
'
C
a
b
o
 
D
e
l
g
a
d
o
'
,
 
'
G
a
z
a
'
,
 
'
I
n
h
a
m
b
a
n
e
'
,
 
'
M
a
p
u
t
o
'
,
 
'
S
o
f
a
l
a
'
,
 
'
N
a
m
p
u
l
a
'
,
 
'
N
i
a
s
s
a
'
,
 
'
T
e
t
e
'
,
 
'
Z
a
m
b
e
z
i
a
'
,
 
'
M
a
n
i
c
a
'
)
,
 
'
N
A
'
 
=
>
 
a
r
r
a
y
(
'
B
e
t
h
a
n
i
e
n
'
,
 
'
C
a
p
r
i
v
i
 
O
o
s
'
,
 
'
B
o
e
s
m
a
n
l
a
n
d
'
,
 
'
G
o
b
a
b
i
s
'
,
 
'
G
r
o
o
t
f
o
n
t
e
i
n
'
,
 
'
K
a
o
k
o
l
a
n
d
'
,
 
'
K
a
r
i
b
i
b
'
,
 
'
K
e
e
t
m
a
n
s
h
o
o
p
'
,
 
'
L
u
d
e
r
i
t
z
'
,
 
'
M
a
l
t
a
h
o
h
e
'
,
 
'
O
k
a
h
a
n
d
j
a
'
,
 
'
O
m
a
r
u
r
u
'
,
 
'
O
t
j
i
w
a
r
o
n
g
o
'
,
 
'
O
u
t
j
o
'
,
 
'
O
w
a
m
b
o
'
,
 
'
R
e
h
o
b
o
t
h
'
,
 
'
S
w
a
k
o
p
m
u
n
d
'
,
 
'
T
s
u
m
e
b
'
,
 
'
K
a
r
a
s
b
u
r
g
'
,
 
'
W
i
n
d
h
o
e
k
'
,
 
'
D
a
m
a
r
a
l
a
n
d
'
,
 
'
H
e
r
e
r
o
l
a
n
d
 
O
o
s
'
,
 
'
H
e
r
e
r
o
l
a
n
d
 
W
e
s
'
,
 
'
K
a
v
a
n
g
o
'
,
 
'
M
a
r
i
e
n
t
a
l
'
,
 
'
N
a
m
a
l
a
n
d
'
)
,
 
'
N
E
'
 
=
>
 
a
r
r
a
y
(
'
A
g
a
d
e
z
'
,
 
'
D
i
f
f
a
'
,
 
'
D
o
s
s
o
'
,
 
'
M
a
r
a
d
i
'
,
 
'
N
i
a
m
e
y
'
,
 
'
T
a
h
o
u
a
'
,
 
'
Z
i
n
d
e
r
'
)
,
 
'
N
G
'
 
=
>
 
a
r
r
a
y
(
'
L
a
g
o
s
'
,
 
'
A
b
u
j
a
 
C
a
p
i
t
a
l
 
T
e
r
r
i
t
o
r
y
'
,
 
'
O
g
u
n
'
,
 
'
A
k
w
a
 
I
b
o
m
'
,
 
'
C
r
o
s
s
 
R
i
v
e
r
'
,
 
'
K
a
d
u
n
a
'
,
 
'
K
a
t
s
i
n
a
'
,
 
'
A
n
a
m
b
r
a
'
,
 
'
B
e
n
u
e
'
,
 
'
B
o
r
n
o
'
,
 
'
I
m
o
'
,
 
'
K
a
n
o
'
,
 
'
K
w
a
r
a
'
,
 
'
N
i
g
e
r
'
,
 
'
O
y
o
'
,
 
'
A
d
a
m
a
w
a
'
,
 
'
D
e
l
t
a
'
,
 
'
E
d
o
'
,
 
'
J
i
g
a
w
a
'
,
 
'
K
e
b
b
i
'
,
 
'
K
o
g
i
'
,
 
'
O
s
u
n
'
,
 
'
T
a
r
a
b
a
'
,
 
'
Y
o
b
e
'
,
 
'
A
b
i
a
'
,
 
'
B
a
u
c
h
i
'
,
 
'
E
n
u
g
u
'
,
 
'
O
n
d
o
'
,
 
'
P
l
a
t
e
a
u
'
,
 
'
R
i
v
e
r
s
'
,
 
'
S
o
k
o
t
o
'
,
 
'
B
a
y
e
l
s
a
'
,
 
'
E
b
o
n
y
i
'
,
 
'
E
k
i
t
i
'
,
 
'
G
o
m
b
e
'
,
 
'
N
a
s
s
a
r
a
w
a
'
,
 
'
Z
a
m
f
a
r
a
'
)
,
 
'
N
I
'
 
=
>
 
a
r
r
a
y
(
'
B
o
a
c
o
'
,
 
'
C
a
r
a
z
o
'
,
 
'
C
h
i
n
a
n
d
e
g
a
'
,
 
'
C
h
o
n
t
a
l
e
s
'
,
 
'
E
s
t
e
l
i
'
,
 
'
G
r
a
n
a
d
a
'
,
 
'
J
i
n
o
t
e
g
a
'
,
 
'
L
e
o
n
'
,
 
'
M
a
d
r
i
z
'
,
 
'
M
a
n
a
g
u
a
'
,
 
'
M
a
s
a
y
a
'
,
 
'
M
a
t
a
g
a
l
p
a
'
,
 
'
N
u
e
v
a
 
S
e
g
o
v
i
a
'
,
 
'
R
i
o
 
S
a
n
 
J
u
a
n
'
,
 
'
R
i
v
a
s
'
,
 
'
Z
e
l
a
y
a
'
)
,
 
'
N
L
'
 
=
>
 
a
r
r
a
y
(
'
D
r
e
n
t
h
e
'
,
 
'
F
r
i
e
s
l
a
n
d
'
,
 
'
G
e
l
d
e
r
l
a
n
d
'
,
 
'
G
r
o
n
i
n
g
e
n
'
,
 
'
L
i
m
b
u
r
g
'
,
 
'
N
o
o
r
d
-
B
r
a
b
a
n
t
'
,
 
'
N
o
o
r
d
-
H
o
l
l
a
n
d
'
,
 
'
O
v
e
r
i
j
s
s
e
l
'
,
 
'
U
t
r
e
c
h
t
'
,
 
'
Z
e
e
l
a
n
d
'
,
 
'
Z
u
i
d
-
H
o
l
l
a
n
d
'
,
 
'
D
r
o
n
t
e
n
'
,
 
'
Z
u
i
d
e
l
i
j
k
e
 
I
J
s
s
e
l
m
e
e
r
p
o
l
d
e
r
s
'
,
 
'
L
e
l
y
s
t
a
d
'
,
 
'
O
v
e
r
i
j
s
s
e
l
'
,
 
'
F
l
e
v
o
l
a
n
d
'
)
,
 
'
N
O
'
 
=
>
 
a
r
r
a
y
(
'
A
k
e
r
s
h
u
s
'
,
 
'
A
u
s
t
-
A
g
d
e
r
'
,
 
'
B
u
s
k
e
r
u
d
'
,
 
'
F
i
n
n
m
a
r
k
'
,
 
'
H
e
d
m
a
r
k
'
,
 
'
H
o
r
d
a
l
a
n
d
'
,
 
'
M
o
r
e
 
o
g
 
R
o
m
s
d
a
l
'
,
 
'
N
o
r
d
l
a
n
d
'
,
 
'
N
o
r
d
-
T
r
o
n
d
e
l
a
g
'
,
 
'
O
p
p
l
a
n
d
'
,
 
'
O
s
l
o
'
,
 
'
O
s
t
f
o
l
d
'
,
 
'
R
o
g
a
l
a
n
d
'
,
 
'
S
o
g
n
 
o
g
 
F
j
o
r
d
a
n
e
'
,
 
'
S
o
r
-
T
r
o
n
d
e
l
a
g
'
,
 
'
T
e
l
e
m
a
r
k
'
,
 
'
T
r
o
m
s
'
,
 
'
V
e
s
t
-
A
g
d
e
r
'
,
 
'
V
e
s
t
f
o
l
d
'
)
,
 
'
N
P
'
 
=
>
 
a
r
r
a
y
(
'
B
a
g
m
a
t
i
'
,
 
'
B
h
e
r
i
'
,
 
'
D
h
a
w
a
l
a
g
i
r
i
'
,
 
'
G
a
n
d
a
k
i
'
,
 
'
J
a
n
a
k
p
u
r
'
,
 
'
K
a
r
n
a
l
i
'
,
 
'
K
o
s
i
'
,
 
'
L
u
m
b
i
n
i
'
,
 
'
M
a
h
a
k
a
l
i
'
,
 
'
M
e
c
h
i
'
,
 
'
N
a
r
a
y
a
n
i
'
,
 
'
R
a
p
t
i
'
,
 
'
S
a
g
a
r
m
a
t
h
a
'
,
 
'
S
e
t
i
'
)
,
 
'
N
R
'
 
=
>
 
a
r
r
a
y
(
'
A
i
w
o
'
,
 
'
A
n
a
b
a
r
'
,
 
'
A
n
e
t
a
n
'
,
 
'
A
n
i
b
a
r
e
'
,
 
'
B
a
i
t
i
'
,
 
'
B
o
e
'
,
 
'
B
u
a
d
a
'
,
 
'
D
e
n
i
g
o
m
o
d
u
'
,
 
'
E
w
a
'
,
 
'
I
j
u
w
'
,
 
'
M
e
n
e
n
g
'
,
 
'
N
i
b
o
k
'
,
 
'
U
a
b
o
e
'
,
 
'
Y
a
r
e
n
'
)
,
 
'
N
Z
'
 
=
>
 
a
r
r
a
y
(
'
N
o
r
t
h
l
a
n
d
'
,
 
'
A
u
c
k
l
a
n
d
'
,
 
'
W
a
i
k
a
t
o
'
,
 
'
B
a
y
 
o
f
 
P
l
e
n
t
y
'
,
 
'
E
a
s
t
 
C
a
p
e
'
,
 
"
H
a
w
k
e
'
s
 
B
a
y
"
,
 
'
T
a
r
a
n
a
k
i
'
,
 
'
M
a
n
a
w
a
t
u
-
W
a
n
g
a
n
u
i
'
,
 
'
W
e
l
l
i
n
g
t
o
n
'
,
 
'
T
a
s
m
a
n
'
,
 
'
N
e
l
s
o
n
'
,
 
'
M
a
r
l
b
o
r
o
u
g
h
'
,
 
'
W
e
s
t
 
C
o
a
s
t
'
,
 
'
C
a
n
t
e
r
b
u
r
y
'
,
 
'
O
t
a
g
o
'
,
 
'
S
o
u
t
h
l
a
n
d
'
)
,
 
'
O
M
'
 
=
>
 
a
r
r
a
y
(
'
A
d
 
D
a
k
h
i
l
i
y
a
h
'
,
 
'
A
l
 
B
a
t
i
n
a
h
'
,
 
'
A
l
 
W
u
s
t
a
'
,
 
'
A
s
h
 
S
h
a
r
q
i
y
a
h
'
,
 
'
A
z
 
Z
a
h
i
r
a
h
'
,
 
'
M
a
s
q
a
t
'
,
 
'
M
u
s
a
n
d
a
m
'
,
 
'
Z
u
f
a
r
'
)
,
 
'
P
A
'
 
=
>
 
a
r
r
a
y
(
'
B
o
c
a
s
 
d
e
l
 
T
o
r
o
'
,
 
'
C
h
i
r
i
q
u
i
'
,
 
'
C
o
c
l
e
'
,
 
'
C
o
l
o
n
'
,
 
'
D
a
r
i
e
n
'
,
 
'
H
e
r
r
e
r
a
'
,
 
'
L
o
s
 
S
a
n
t
o
s
'
,
 
'
P
a
n
a
m
a
'
,
 
'
S
a
n
 
B
l
a
s
'
,
 
'
V
e
r
a
g
u
a
s
'
)
,
 
'
P
E
'
 
=
>
 
a
r
r
a
y
(
'
A
m
a
z
o
n
a
s
'
,
 
'
A
n
c
a
s
h
'
,
 
'
A
p
u
r
i
m
a
c
'
,
 
'
A
r
e
q
u
i
p
a
'
,
 
'
A
y
a
c
u
c
h
o
'
,
 
'
C
a
j
a
m
a
r
c
a
'
,
 
'
C
a
l
l
a
o
'
,
 
'
C
u
s
c
o
'
,
 
'
H
u
a
n
c
a
v
e
l
i
c
a
'
,
 
'
H
u
a
n
u
c
o
'
,
 
'
I
c
a
'
,
 
'
J
u
n
i
n
'
,
 
'
L
a
 
L
i
b
e
r
t
a
d
'
,
 
'
L
a
m
b
a
y
e
q
u
e
'
,
 
'
L
i
m
a
'
,
 
'
L
o
r
e
t
o
'
,
 
'
M
a
d
r
e
 
d
e
 
D
i
o
s
'
,
 
'
M
o
q
u
e
g
u
a
'
,
 
'
P
a
s
c
o
'
,
 
'
P
i
u
r
a
'
,
 
'
P
u
n
o
'
,
 
'
S
a
n
 
M
a
r
t
i
n
'
,
 
'
T
a
c
n
a
'
,
 
'
T
u
m
b
e
s
'
,
 
'
U
c
a
y
a
l
i
'
)
,
 
'
P
G
'
 
=
>
 
a
r
r
a
y
(
'
C
e
n
t
r
a
l
'
,
 
'
G
u
l
f
'
,
 
'
M
i
l
n
e
 
B
a
y
'
,
 
'
N
.
'
,
 
'
S
.
e
r
n
 
H
i
g
h
l
a
n
d
s
'
,
 
'
W
.
'
,
 
'
N
o
r
t
h
 
S
o
l
o
m
o
n
s
'
,
 
'
C
h
i
m
b
u
'
,
 
'
E
a
s
t
e
r
n
 
H
i
g
h
l
a
n
d
s
'
,
 
'
E
a
s
t
 
N
e
w
 
B
r
i
t
a
i
n
'
,
 
'
E
a
s
t
 
S
e
p
i
k
'
,
 
'
M
a
d
a
n
g
'
,
 
'
M
a
n
u
s
'
,
 
'
M
o
r
o
b
e
'
,
 
'
N
e
w
 
I
r
e
l
a
n
d
'
,
 
'
W
.
 
H
i
g
h
l
a
n
d
s
'
,
 
'
W
e
s
t
 
N
e
w
 
B
r
i
t
a
i
n
'
,
 
'
S
a
n
d
a
u
n
'
,
 
'
E
n
g
a
'
,
 
'
N
a
t
i
o
n
a
l
 
C
a
p
i
t
a
l
'
)
,
 
'
P
H
'
 
=
>
 
a
r
r
a
y
(
'
A
b
r
a
'
,
 
'
A
g
u
s
a
n
 
d
e
l
 
N
o
r
t
e
'
,
 
'
A
g
u
s
a
n
 
d
e
l
 
S
u
r
'
,
 
'
A
k
l
a
n
'
,
 
'
A
l
b
a
y
'
,
 
'
A
n
t
i
q
u
e
'
,
 
'
B
a
t
a
a
n
'
,
 
'
B
a
t
a
n
e
s
'
,
 
'
B
a
t
a
n
g
a
s
'
,
 
'
B
e
n
g
u
e
t
'
,
 
'
B
o
h
o
l
'
,
 
'
B
u
k
i
d
n
o
n
'
,
 
'
B
u
l
a
c
a
n
'
,
 
'
C
a
g
a
y
a
n
'
,
 
'
C
a
m
a
r
i
n
e
s
 
N
o
r
t
e
'
,
 
'
C
a
m
a
r
i
n
e
s
 
S
u
r
'
,
 
'
C
a
m
i
g
u
i
n
'
,
 
'
C
a
p
i
z
'
,
 
'
C
a
t
a
n
d
u
a
n
e
s
'
,
 
'
C
a
v
i
t
e
'
,
 
'
C
e
b
u
'
,
 
'
B
a
s
i
l
a
n
'
,
 
'
E
a
s
t
e
r
n
 
S
a
m
a
r
'
,
 
'
D
a
v
a
o
'
,
 
'
D
a
v
a
o
 
d
e
l
 
S
u
r
'
,
 
'
D
a
v
a
o
 
O
r
i
e
n
t
a
l
'
,
 
'
I
f
u
g
a
o
'
,
 
'
I
l
o
c
o
s
 
N
o
r
t
e
'
,
 
'
I
l
o
c
o
s
 
S
u
r
'
,
 
'
I
l
o
i
l
o
'
,
 
'
I
s
a
b
e
l
a
'
,
 
'
K
a
l
i
n
g
a
-
A
p
a
y
a
o
'
,
 
'
L
a
g
u
n
a
'
,
 
'
L
a
n
a
o
 
d
e
l
 
N
o
r
t
e
'
,
 
'
L
a
n
a
o
 
d
e
l
 
S
u
r
'
,
 
'
L
a
 
U
n
i
o
n
'
,
 
'
L
e
y
t
e
'
,
 
'
M
a
r
i
n
d
u
q
u
e
'
,
 
'
M
a
s
b
a
t
e
'
,
 
'
M
i
n
d
o
r
o
 
O
c
c
i
d
e
n
t
a
l
'
,
 
'
M
i
n
d
o
r
o
 
O
r
i
e
n
t
a
l
'
,
 
'
M
i
s
a
m
i
s
 
O
c
c
i
d
e
n
t
a
l
'
,
 
'
M
i
s
a
m
i
s
 
O
r
i
e
n
t
a
l
'
,
 
'
M
o
u
n
t
a
i
n
'
,
 
'
N
e
g
r
o
s
 
O
r
i
e
n
t
a
l
'
,
 
'
N
u
e
v
a
 
E
c
i
j
a
'
,
 
'
N
u
e
v
a
 
V
i
z
c
a
y
a
'
,
 
'
P
a
l
a
w
a
n
'
,
 
'
P
a
m
p
a
n
g
a
'
,
 
'
P
a
n
g
a
s
i
n
a
n
'
,
 
'
R
i
z
a
l
'
,
 
'
R
o
m
b
l
o
n
'
,
 
'
S
a
m
a
r
'
,
 
'
M
a
g
u
i
n
d
a
n
a
o
'
,
 
'
N
o
r
t
h
 
C
o
t
a
b
a
t
o
'
,
 
'
S
o
r
s
o
g
o
n
'
,
 
'
S
.
e
r
n
 
L
e
y
t
e
'
,
 
'
S
u
l
u
'
,
 
'
S
u
r
i
g
a
o
 
d
e
l
 
N
o
r
t
e
'
,
 
'
S
u
r
i
g
a
o
 
d
e
l
 
S
u
r
'
,
 
'
T
a
r
l
a
c
'
,
 
'
Z
a
m
b
a
l
e
s
'
,
 
'
Z
a
m
b
o
a
n
g
a
 
d
e
l
 
N
o
r
t
e
'
,
 
'
Z
a
m
b
o
a
n
g
a
 
d
e
l
 
S
u
r
'
,
 
'
N
.
 
S
a
m
a
r
'
,
 
'
Q
u
i
r
i
n
o
'
,
 
'
S
i
q
u
i
j
o
r
'
,
 
'
S
.
 
C
o
t
a
b
a
t
o
'
,
 
'
S
u
l
t
a
n
 
K
u
d
a
r
a
t
'
,
 
'
T
a
w
i
t
a
w
i
'
,
 
'
A
n
g
e
l
e
s
'
,
 
'
B
a
c
o
l
o
d
'
,
 
'
B
a
g
o
'
,
 
'
B
a
g
u
i
o
'
,
 
'
B
a
i
s
'
,
 
'
B
a
s
i
l
a
n
 
C
i
t
y
'
,
 
'
B
a
t
a
n
g
a
s
 
C
i
t
y
'
,
 
'
B
u
t
u
a
n
'
,
 
'
C
a
b
a
n
a
t
u
a
n
'
,
 
'
C
a
d
i
z
'
,
 
'
C
a
g
a
y
a
n
 
d
e
 
O
r
o
'
,
 
'
C
a
l
b
a
y
o
g
'
,
 
'
C
a
l
o
o
c
a
n
'
,
 
'
C
a
n
l
a
o
n
'
,
 
'
C
a
v
i
t
e
 
C
i
t
y
'
,
 
'
C
e
b
u
 
C
i
t
y
'
,
 
'
C
o
t
a
b
a
t
o
'
,
 
'
D
a
g
u
p
a
n
'
,
 
'
D
a
n
a
o
'
,
 
'
D
a
p
i
t
a
n
'
,
 
'
D
a
v
a
o
 
C
i
t
y
'
,
 
'
D
i
p
o
l
o
g
'
,
 
'
D
u
m
a
g
u
e
t
e
'
,
 
'
G
e
n
e
r
a
l
 
S
a
n
t
o
s
'
,
 
'
G
i
n
g
o
o
g
'
,
 
'
I
l
i
g
a
n
'
,
 
'
I
l
o
i
l
o
 
C
i
t
y
'
,
 
'
I
r
i
g
a
'
,
 
'
L
a
 
C
a
r
l
o
t
a
'
,
 
'
L
a
o
a
g
'
,
 
'
L
a
p
u
-
L
a
p
u
'
,
 
'
L
e
g
a
s
p
i
'
,
 
'
L
i
p
a
'
,
 
'
L
u
c
e
n
a
'
,
 
'
M
a
n
d
a
u
e
'
,
 
'
M
a
n
i
l
a
'
,
 
'
M
a
r
a
w
i
'
,
 
'
N
a
g
a
'
,
 
'
O
l
o
n
g
a
p
o
'
,
 
'
O
r
m
o
c
'
,
 
'
O
r
o
q
u
i
e
t
a
'
,
 
'
O
z
a
m
i
s
'
,
 
'
P
a
g
a
d
i
a
n
'
,
 
'
P
a
l
a
y
a
n
'
,
 
'
P
a
s
a
y
'
,
 
'
P
u
e
r
t
o
 
P
r
i
n
c
e
s
a
'
,
 
'
Q
u
e
z
o
n
 
C
i
t
y
'
,
 
'
R
o
x
a
s
'
,
 
'
S
a
n
 
C
a
r
l
o
s
'
,
 
'
S
a
n
 
J
o
s
e
'
,
 
'
S
a
n
 
P
a
b
l
o
'
,
 
'
S
i
l
a
y
'
,
 
'
S
u
r
i
g
a
o
'
,
 
'
T
a
c
l
o
b
a
n
'
,
 
'
T
a
g
a
y
t
a
y
'
,
 
'
T
a
g
b
i
l
a
r
a
n
'
,
 
'
T
a
n
g
u
b
'
,
 
'
T
o
l
e
d
o
'
,
 
'
T
r
e
c
e
 
M
a
r
t
i
r
e
s
'
,
 
'
Z
a
m
b
o
a
n
g
a
'
,
 
'
A
u
r
o
r
a
'
,
 
'
Q
u
e
z
o
n
'
,
 
'
N
e
g
r
o
s
 
O
c
c
i
d
e
n
t
a
l
'
)
,
 
'
P
K
'
 
=
>
 
a
r
r
a
y
(
'
F
e
d
e
r
a
l
l
y
 
A
d
m
i
n
i
s
t
e
r
e
d
 
T
r
i
b
a
l
 
A
r
e
a
s
'
,
 
'
B
a
l
o
c
h
i
s
t
a
n
'
,
 
'
N
o
r
t
h
-
W
e
s
t
 
F
r
o
n
t
i
e
r
'
,
 
'
P
u
n
j
a
b
'
,
 
'
S
i
n
d
h
'
,
 
'
A
z
a
d
 
K
a
s
h
m
i
r
'
,
 
'
N
.
 
A
r
e
a
s
'
,
 
'
I
s
l
a
m
a
b
a
d
'
)
,
 
'
P
L
'
 
=
>
 
a
r
r
a
y
(
'
D
o
l
n
o
Å
›
l
Ä
…
s
k
i
e
'
,
 
'
K
u
j
a
w
s
k
o
-
p
o
m
o
r
s
k
i
e
'
,
 
'
L
u
b
e
l
s
k
i
e
'
,
 
'
L
u
b
u
s
k
i
e
'
,
 
'
Å

Ã
³
d
z
k
i
e
'
,
 
'
M
a
Å
‚
o
p
o
l
s
k
i
e
'
,
 
'
M
a
z
o
w
i
e
c
k
i
e
'
,
 
'
O
p
o
l
s
k
i
e
'
,
 
'
P
o
d
k
a
r
p
a
c
k
i
e
'
,
 
'
P
o
d
l
a
s
k
i
e
'
,
 
'
P
o
m
o
r
s
k
i
e
'
,
 
'
Å
š
l
Ä
…
s
k
i
e
'
,
 
'
Å
š
w
i
Ä
™
t
o
k
r
z
y
s
k
i
e
'
,
 
'
W
a
r
m
i
Å
„
s
k
o
-
m
a
z
u
r
s
k
i
e
'
,
 
'
W
i
e
l
k
o
p
o
l
s
k
i
e
'
,
 
'
Z
a
c
h
o
d
n
i
o
p
o
m
o
r
s
k
i
e
'
)
,
 
'
P
T
'
 
=
>
 
a
r
r
a
y
(
'
A
l
g
a
r
v
e
'
,
 
'
A
l
t
o
 
A
l
e
n
t
e
j
o
'
,
 
'
B
a
i
x
o
 
A
l
e
n
t
e
j
o
'
,
 
'
B
e
i
r
a
 
A
l
t
a
'
,
 
'
B
e
i
r
a
 
B
a
i
x
a
'
,
 
'
B
e
i
r
a
 
L
i
t
o
r
a
l
'
,
 
'
D
o
u
r
o
 
L
i
t
o
r
a
l
'
,
 
'
E
s
t
r
e
m
a
d
u
r
a
'
,
 
'
M
i
n
h
o
'
,
 
'
R
i
b
a
t
e
j
o
'
,
 
'
T
r
Ã
¡
s
-
o
s
-
M
o
n
t
e
s
 
e
 
A
l
t
o
 
D
o
u
r
o
'
)
,
 
'
P
Y
'
 
=
>
 
a
r
r
a
y
(
'
A
l
t
o
 
P
a
r
a
n
a
'
,
 
'
A
m
a
m
b
a
y
'
,
 
'
B
o
q
u
e
r
o
n
'
,
 
'
C
a
a
g
u
a
z
u
'
,
 
'
C
a
a
z
a
p
a
'
,
 
'
C
e
n
t
r
a
l
'
,
 
'
C
o
n
c
e
p
c
i
o
n
'
,
 
'
C
o
r
d
i
l
l
e
r
a
'
,
 
'
G
u
a
i
r
a
'
,
 
'
I
t
a
p
u
a
'
,
 
'
M
i
s
i
o
n
e
s
'
,
 
'
N
e
e
m
b
u
c
u
'
,
 
'
P
a
r
a
g
u
a
r
i
'
,
 
'
P
r
e
s
i
d
e
n
t
e
 
H
a
y
e
s
'
,
 
'
S
a
n
 
P
e
d
r
o
'
,
 
'
A
l
t
o
 
P
a
r
a
g
u
a
y
'
,
 
'
C
a
n
i
n
d
e
y
u
'
,
 
'
C
h
a
c
o
'
,
 
'
N
u
e
v
a
 
A
s
u
n
c
i
o
n
'
)
,
 
'
Q
A
'
 
=
>
 
a
r
r
a
y
(
'
A
d
 
D
a
w
h
a
h
'
,
 
'
A
l
 
G
h
u
w
a
r
i
y
a
h
'
,
 
'
A
l
 
J
u
m
a
l
i
y
a
h
'
,
 
'
A
l
 
K
h
a
w
r
'
,
 
'
A
l
 
W
a
k
r
a
h
'
,
 
'
A
r
 
R
a
y
y
a
n
'
,
 
'
J
a
r
i
y
a
n
 
a
l
 
B
a
t
n
a
h
'
,
 
'
M
a
d
i
n
a
t
 
a
c
h
 
S
h
a
m
a
l
'
,
 
'
U
m
m
 
S
a
l
a
l
'
)
,
 
'
R
O
'
 
=
>
 
a
r
r
a
y
(
'
A
l
b
a
'
,
 
'
A
r
a
d
'
,
 
'
A
r
g
e
s
'
,
 
'
B
a
c
a
u
'
,
 
'
B
i
h
o
r
'
,
 
'
B
i
s
t
r
i
t
a
-
N
a
s
a
u
d
'
,
 
'
B
o
t
o
s
a
n
i
'
,
 
'
B
r
a
i
l
a
'
,
 
'
B
r
a
s
o
v
'
,
 
'
B
u
c
u
r
e
s
t
i
'
,
 
'
B
u
z
a
u
'
,
 
'
C
a
r
a
s
-
S
e
v
e
r
i
n
'
,
 
'
C
l
u
j
'
,
 
'
C
o
n
s
t
a
n
t
a
'
,
 
'
C
o
v
a
s
n
a
'
,
 
'
D
a
m
b
o
v
i
t
a
'
,
 
'
D
o
l
j
'
,
 
'
G
a
l
a
t
i
'
,
 
'
G
o
r
j
'
,
 
'
H
a
r
g
h
i
t
a
'
,
 
'
H
u
n
e
d
o
a
r
a
'
,
 
'
I
a
l
o
m
i
t
a
'
,
 
'
I
a
s
i
'
,
 
'
M
a
r
a
m
u
r
e
s
'
,
 
'
M
e
h
e
d
i
n
t
i
'
,
 
'
M
u
r
e
s
'
,
 
'
N
e
a
m
t
'
,
 
'
O
l
t
'
,
 
'
P
r
a
h
o
v
a
'
,
 
'
S
a
l
a
j
'
,
 
'
S
a
t
u
 
M
a
r
e
'
,
 
'
S
i
b
i
u
'
,
 
'
S
u
c
e
a
v
a
'
,
 
'
T
e
l
e
o
r
m
a
n
'
,
 
'
T
i
m
i
s
'
,
 
'
T
u
l
c
e
a
'
,
 
'
V
a
s
l
u
i
'
,
 
'
V
a
l
c
e
a
'
,
 
'
V
r
a
n
c
e
a
'
,
 
'
C
a
l
a
r
a
s
i
'
,
 
'
G
i
u
r
g
i
u
'
)
,
 
'
R
U
'
 
=
>
 
a
r
r
a
y
(
'
A
d
y
g
e
y
'
,
 
'
A
g
a
 
B
u
r
y
a
t
'
,
 
'
G
o
r
n
o
-
A
l
t
a
y
'
,
 
'
A
l
t
a
y
'
,
 
'
A
m
u
r
'
,
 
"
A
r
k
h
a
n
g
e
l
'
s
k
"
,
 
"
A
s
t
r
a
k
h
a
n
'
"
,
 
'
B
a
s
h
k
o
r
t
o
s
t
a
n
'
,
 
'
B
e
l
g
o
r
o
d
'
,
 
'
B
r
y
a
n
s
k
'
,
 
'
B
u
r
y
a
t
'
,
 
'
C
h
e
c
h
n
y
a
'
,
 
'
C
h
e
l
y
a
b
i
n
s
k
'
,
 
'
C
h
i
t
a
'
,
 
'
C
h
u
k
o
t
'
,
 
'
C
h
u
v
a
s
h
'
,
 
'
D
a
g
e
s
t
a
n
'
,
 
'
E
v
e
n
k
'
,
 
'
I
n
g
u
s
h
'
,
 
'
I
r
k
u
t
s
k
'
,
 
'
I
v
a
n
o
v
o
'
,
 
'
K
a
b
a
r
d
i
n
-
B
a
l
k
a
r
'
,
 
'
K
a
l
i
n
i
n
g
r
a
d
'
,
 
'
K
a
l
m
y
k
'
,
 
'
K
a
l
u
g
a
'
,
 
'
K
a
m
c
h
a
t
k
a
'
,
 
'
K
a
r
a
c
h
a
y
-
C
h
e
r
k
e
s
s
'
,
 
'
K
a
r
e
l
i
a
'
,
 
'
K
e
m
e
r
o
v
o
'
,
 
'
K
h
a
b
a
r
o
v
s
k
'
,
 
'
K
h
a
k
a
s
s
'
,
 
'
K
h
a
n
t
y
-
M
a
n
s
i
y
'
,
 
'
K
i
r
o
v
'
,
 
'
K
o
m
i
'
,
 
'
K
o
m
i
-
P
e
r
m
y
a
k
'
,
 
'
K
o
r
y
a
k
'
,
 
'
K
o
s
t
r
o
m
a
'
,
 
'
K
r
a
s
n
o
d
a
r
'
,
 
'
K
r
a
s
n
o
y
a
r
s
k
'
,
 
'
K
u
r
g
a
n
'
,
 
'
K
u
r
s
k
'
,
 
'
L
e
n
i
n
g
r
a
d
'
,
 
'
L
i
p
e
t
s
k
'
,
 
'
M
a
g
a
d
a
n
'
,
 
'
M
a
r
i
y
-
E
l
'
,
 
'
M
o
r
d
o
v
i
a
'
,
 
'
M
o
s
k
v
a
'
,
 
'
M
o
s
c
o
w
 
C
i
t
y
'
,
 
'
M
u
r
m
a
n
s
k
'
,
 
'
N
e
n
e
t
s
'
,
 
'
N
i
z
h
e
g
o
r
o
d
'
,
 
'
N
o
v
g
o
r
o
d
'
,
 
'
N
o
v
o
s
i
b
i
r
s
k
'
,
 
'
O
m
s
k
'
,
 
'
O
r
e
n
b
u
r
g
'
,
 
'
O
r
e
l
'
,
 
'
P
e
n
z
a
'
,
 
"
P
e
r
m
'
"
,
 
"
P
r
i
m
o
r
'
y
e
"
,
 
'
P
s
k
o
v
'
,
 
'
R
o
s
t
o
v
'
,
 
"
R
y
a
z
a
n
'
"
,
 
'
S
a
k
h
a
'
,
 
'
S
a
k
h
a
l
i
n
'
,
 
'
S
a
m
a
r
a
'
,
 
'
S
t
.
 
P
e
t
e
r
s
b
u
r
g
 
C
i
t
y
'
,
 
'
S
a
r
a
t
o
v
'
,
 
'
N
o
r
t
h
 
O
s
s
e
t
i
a
'
,
 
'
S
m
o
l
e
n
s
k
'
,
 
"
S
t
a
v
r
o
p
o
l
'
"
,
 
'
S
v
e
r
d
l
o
v
s
k
'
,
 
'
T
a
m
b
o
v
'
,
 
'
T
a
t
a
r
s
t
a
n
'
,
 
'
T
a
y
m
y
r
'
,
 
'
T
o
m
s
k
'
,
 
'
T
u
l
a
'
,
 
"
T
v
e
r
'
"
,
 
"
T
y
u
m
e
n
'
"
,
 
'
T
u
v
a
'
,
 
'
U
d
m
u
r
t
'
,
 
"
U
l
'
y
a
n
o
v
s
k
"
,
 
'
U
s
t
-
O
r
d
a
 
B
u
r
y
a
t
'
,
 
'
V
l
a
d
i
m
i
r
'
,
 
'
V
o
l
g
o
g
r
a
d
'
,
 
'
V
o
l
o
g
d
a
'
,
 
'
V
o
r
o
n
e
z
h
'
,
 
'
Y
a
m
a
l
-
N
e
n
e
t
s
'
,
 
"
Y
a
r
o
s
l
a
v
l
'
"
,
 
'
Y
e
v
r
e
y
'
)
,
 
'
R
W
'
 
=
>
 
a
r
r
a
y
(
'
B
u
t
a
r
e
'
,
 
'
B
y
u
m
b
a
'
,
 
'
C
y
a
n
g
u
g
u
'
,
 
'
G
i
k
o
n
g
o
r
o
'
,
 
'
G
i
s
e
n
y
i
'
,
 
'
G
i
t
a
r
a
m
a
'
,
 
'
K
i
b
u
n
g
o
'
,
 
'
K
i
b
u
y
e
'
,
 
'
K
i
g
a
l
i
'
,
 
'
R
u
h
e
n
g
e
r
i
'
)
,
 
'
S
A
'
 
=
>
 
a
r
r
a
y
(
'
A
l
 
B
a
h
a
h
'
,
 
'
A
l
 
J
a
w
f
'
,
 
'
A
l
 
M
a
d
i
n
a
h
'
,
 
'
A
s
h
 
S
h
a
r
q
i
y
a
h
'
,
 
'
A
l
 
Q
a
s
i
m
'
,
 
'
A
l
 
Q
u
r
a
y
y
a
t
'
,
 
'
A
r
 
R
i
y
a
d
'
,
 
"
H
a
'
i
l
"
,
 
'
M
a
k
k
a
h
'
,
 
'
A
l
 
H
u
d
u
d
 
a
s
h
 
S
h
a
m
a
l
i
y
a
h
'
,
 
'
N
a
j
r
a
n
'
,
 
'
J
i
z
a
n
'
,
 
'
T
a
b
u
k
'
)
,
 
'
S
B
'
 
=
>
 
a
r
r
a
y
(
'
M
a
l
a
i
t
a
'
,
 
'
W
.
'
,
 
'
C
e
n
t
r
a
l
'
,
 
'
G
u
a
d
a
l
c
a
n
a
l
'
,
 
'
I
s
a
b
e
l
'
,
 
'
M
a
k
i
r
a
'
,
 
'
T
e
m
o
t
u
'
)
,
 
'
S
C
'
 
=
>
 
a
r
r
a
y
(
'
A
n
s
e
 
a
u
x
 
P
i
n
s
'
,
 
'
A
n
s
e
 
B
o
i
l
e
a
u
'
,
 
'
A
n
s
e
 
E
t
o
i
l
e
'
,
 
'
A
n
s
e
 
L
o
u
i
s
'
,
 
'
A
n
s
e
 
R
o
y
a
l
e
'
,
 
'
B
a
i
e
 
L
a
z
a
r
e
'
,
 
'
B
a
i
e
 
S
t
.
e
 
A
n
n
e
'
,
 
'
B
e
a
u
 
V
a
l
l
o
n
'
,
 
'
B
e
l
 
A
i
r
'
,
 
'
B
e
l
 
O
m
b
r
e
'
,
 
'
C
a
s
c
a
d
e
'
,
 
'
G
l
a
c
i
s
'
,
 
"
G
r
a
n
d
'
 
A
n
s
e
"
,
 
"
G
r
a
n
d
'
 
A
n
s
e
"
,
 
'
L
a
 
D
i
g
u
e
'
,
 
'
L
a
 
R
i
v
i
e
r
e
 
A
n
g
l
a
i
s
e
'
,
 
'
M
o
n
t
 
B
u
x
t
o
n
'
,
 
'
M
o
n
t
 
F
l
e
u
r
i
'
,
 
'
P
l
a
i
s
a
n
c
e
'
,
 
'
P
o
i
n
t
e
 
L
a
 
R
u
e
'
,
 
'
P
o
r
t
 
G
l
a
u
d
'
,
 
'
S
t
.
 
L
o
u
i
s
'
,
 
'
T
a
k
a
m
a
k
a
'
)
,
 
'
S
D
'
 
=
>
 
a
r
r
a
y
(
'
A
l
 
W
u
s
t
a
'
,
 
"
A
l
 
I
s
t
i
w
a
'
i
y
a
h
"
,
 
'
A
l
 
K
h
a
r
t
u
m
'
,
 
'
A
s
h
 
S
h
a
m
a
l
i
y
a
h
'
,
 
'
A
s
h
 
S
h
a
r
q
i
y
a
h
'
,
 
'
B
a
h
r
 
a
l
 
G
h
a
z
a
l
'
,
 
'
D
a
r
f
u
r
'
,
 
'
K
u
r
d
u
f
a
n
'
)
,
 
'
S
E
'
 
=
>
 
a
r
r
a
y
(
'
A
l
v
s
b
o
r
g
s
 
L
a
n
'
,
 
'
B
l
e
k
i
n
g
e
 
L
a
n
'
,
 
'
G
a
v
l
e
b
o
r
g
s
 
L
a
n
'
,
 
'
G
o
t
e
b
o
r
g
s
 
o
c
h
 
B
o
h
u
s
 
L
a
n
'
,
 
'
G
o
t
l
a
n
d
s
 
L
a
n
'
,
 
'
H
a
l
l
a
n
d
s
 
L
a
n
'
,
 
'
J
a
m
t
l
a
n
d
s
 
L
a
n
'
,
 
'
J
o
n
k
o
p
i
n
g
s
 
L
a
n
'
,
 
'
K
a
l
m
a
r
 
L
a
n
'
,
 
'
K
o
p
p
a
r
b
e
r
g
s
 
L
a
n
'
,
 
'
K
r
i
s
t
i
a
n
s
t
a
d
s
 
L
a
n
'
,
 
'
K
r
o
n
o
b
e
r
g
s
 
L
a
n
'
,
 
'
M
a
l
m
o
h
u
s
 
L
a
n
'
,
 
'
N
o
r
r
b
o
t
t
e
n
s
 
L
a
n
'
,
 
'
O
r
e
b
r
o
 
L
a
n
'
,
 
'
O
s
t
e
r
g
o
t
l
a
n
d
s
 
L
a
n
'
,
 
'
S
k
a
r
a
b
o
r
g
s
 
L
a
n
'
,
 
'
S
o
d
e
r
m
a
n
l
a
n
d
s
 
L
a
n
'
,
 
'
U
p
p
s
a
l
a
 
L
a
n
'
,
 
'
V
a
r
m
l
a
n
d
s
 
L
a
n
'
,
 
'
V
a
s
t
e
r
b
o
t
t
e
n
s
 
L
a
n
'
,
 
'
V
a
s
t
e
r
n
o
r
r
l
a
n
d
s
 
L
a
n
'
,
 
'
V
a
s
t
m
a
n
l
a
n
d
s
 
L
a
n
'
,
 
'
S
t
o
c
k
h
o
l
m
s
 
L
a
n
'
,
 
'
S
k
a
n
e
 
L
a
n
'
,
 
'
V
a
s
t
r
a
 
G
o
t
a
l
a
n
d
'
)
,
 
'
S
H
'
 
=
>
 
a
r
r
a
y
(
'
A
s
c
e
n
s
i
o
n
'
,
 
'
S
t
.
 
H
e
l
e
n
a
'
,
 
'
T
r
i
s
t
a
n
 
d
a
 
C
u
n
h
a
'
)
,
 
'
S
I
'
 
=
>
 
a
r
r
a
y
(
'
M
u
r
a
'
,
'
D
r
a
v
a
'
,
'
C
a
r
i
n
t
h
i
a
'
,
'
S
a
v
i
n
j
a
'
,
'
C
e
n
t
r
a
l
 
S
a
v
a
'
,
'
L
o
w
e
r
 
S
a
v
a
'
,
'
S
o
u
t
h
e
a
s
t
 
S
l
o
v
e
n
i
a
'
,
'
L
i
t
t
o
r
a
l
â
€
“
I
n
n
e
r
 
C
a
r
n
i
o
l
a
'
,
'
C
e
n
t
r
a
l
 
S
l
o
v
e
n
i
a
'
,
'
U
p
p
e
r
 
C
a
r
n
i
o
l
a
'
,
'
G
o
r
i
z
i
a
'
,
'
C
o
a
s
t
a
l
â
€
“
K
a
r
s
t
'
)
,
 
'
S
K
'
 
=
>
 
a
r
r
a
y
(
'
B
a
n
s
k
a
 
B
y
s
t
r
i
c
a
'
,
 
'
B
r
a
t
i
s
l
a
v
a
'
,
 
'
K
o
s
i
c
e
'
,
 
'
N
i
t
r
a
'
,
 
'
P
r
e
s
o
v
'
,
 
'
T
r
e
n
c
i
n
'
,
 
'
T
r
n
a
v
a
'
,
 
'
Z
i
l
i
n
a
'
)
,
 
'
S
L
'
 
=
>
 
a
r
r
a
y
(
'
E
a
s
t
e
r
n
'
,
 
'
N
.
'
,
 
'
S
.
e
r
n
'
,
 
'
W
.
 
A
r
e
a
'
)
,
 
'
S
M
'
 
=
>
 
a
r
r
a
y
(
'
A
c
q
u
a
v
i
v
a
'
,
 
'
C
h
i
e
s
a
n
u
o
v
a
'
,
 
'
D
o
m
a
g
n
a
n
o
'
,
 
'
F
a
e
t
a
n
o
'
,
 
'
F
i
o
r
e
n
t
i
n
o
'
,
 
'
B
o
r
g
o
 
M
a
g
g
i
o
r
e
'
,
 
'
S
a
n
 
M
a
r
i
n
o
'
,
 
'
M
o
n
t
e
 
G
i
a
r
d
i
n
o
'
,
 
'
S
e
r
r
a
v
a
l
l
e
'
)
,
 
'
S
N
'
 
=
>
 
a
r
r
a
y
(
'
D
a
k
a
r
'
,
 
'
D
i
o
u
r
b
e
l
'
,
 
'
S
t
.
-
L
o
u
i
s
'
,
 
'
T
a
m
b
a
c
o
u
n
d
a
'
,
 
'
T
h
i
e
s
'
,
 
'
L
o
u
g
a
'
,
 
'
F
a
t
i
c
k
'
,
 
'
K
a
o
l
a
c
k
'
,
 
'
K
o
l
d
a
'
,
 
'
Z
i
g
u
i
n
c
h
o
r
'
)
,
 
'
S
O
'
 
=
>
 
a
r
r
a
y
(
'
B
a
k
o
o
l
'
,
 
'
B
a
n
a
a
d
i
r
'
,
 
'
B
a
r
i
'
,
 
'
B
a
y
'
,
 
'
G
a
l
g
u
d
u
u
d
'
,
 
'
G
e
d
o
'
,
 
'
H
i
i
r
a
a
n
'
,
 
'
J
u
b
b
a
d
a
 
D
h
e
x
e
'
,
 
'
J
u
b
b
a
d
a
 
H
o
o
s
e
'
,
 
'
M
u
d
u
g
'
,
 
'
N
u
g
a
a
l
'
,
 
'
S
a
n
a
a
g
'
,
 
'
S
h
a
b
e
e
l
l
a
h
a
 
D
h
e
x
e
'
,
 
'
S
h
a
b
e
e
l
l
a
h
a
 
H
o
o
s
e
'
,
 
'
T
o
g
d
h
e
e
r
'
,
 
'
W
o
q
o
o
y
i
 
G
a
l
b
e
e
d
'
)
,
 
'
S
R
'
 
=
>
 
a
r
r
a
y
(
'
B
r
o
k
o
p
o
n
d
o
'
,
 
'
C
o
m
m
e
w
i
j
n
e
'
,
 
'
C
o
r
o
n
i
e
'
,
 
'
M
a
r
o
w
i
j
n
e
'
,
 
'
N
i
c
k
e
r
i
e
'
,
 
'
P
a
r
a
'
,
 
'
P
a
r
a
m
a
r
i
b
o
'
,
 
'
S
a
r
a
m
a
c
c
a
'
,
 
'
S
i
p
a
l
i
w
i
n
i
'
,
 
'
W
a
n
i
c
a
'
)
,
 
'
S
T
'
 
=
>
 
a
r
r
a
y
(
'
P
r
i
n
c
i
p
e
'
,
 
'
S
a
o
 
T
o
m
e
'
)
,
 
'
S
V
'
 
=
>
 
a
r
r
a
y
(
'
A
h
u
a
c
h
a
p
a
n
'
,
 
'
C
a
b
a
n
a
s
'
,
 
'
C
h
a
l
a
t
e
n
a
n
g
o
'
,
 
'
C
u
s
c
a
t
l
a
n
'
,
 
'
L
a
 
L
i
b
e
r
t
a
d
'
,
 
'
L
a
 
P
a
z
'
,
 
'
L
a
 
U
n
i
o
n
'
,
 
'
M
o
r
a
z
a
n
'
,
 
'
S
a
n
 
M
i
g
u
e
l
'
,
 
'
S
a
n
 
S
a
l
v
a
d
o
r
'
,
 
'
S
a
n
t
a
 
A
n
a
'
,
 
'
S
a
n
 
V
i
c
e
n
t
e
'
,
 
'
S
o
n
s
o
n
a
t
e
'
,
 
'
U
s
u
l
u
t
a
n
'
)
,
 
'
S
Y
'
 
=
>
 
a
r
r
a
y
(
'
A
l
 
H
a
s
a
k
a
h
'
,
 
'
A
l
 
L
a
d
h
i
q
i
y
a
h
'
,
 
'
A
l
 
Q
u
n
a
y
t
i
r
a
h
'
,
 
'
A
r
 
R
a
q
q
a
h
'
,
 
"
A
s
 
S
u
w
a
y
d
a
'
"
,
 
'
D
a
r
'
,
 
'
D
a
y
r
 
a
z
 
Z
a
w
r
'
,
 
'
R
i
f
 
D
i
m
a
s
h
q
'
,
 
'
H
a
l
a
b
'
,
 
'
H
a
m
a
h
'
,
 
'
H
i
m
s
'
,
 
'
I
d
l
i
b
'
,
 
'
D
i
m
a
s
h
q
'
,
 
'
T
a
r
t
u
s
'
)
,
 
'
S
Z
'
 
=
>
 
a
r
r
a
y
(
'
H
h
o
h
h
o
'
,
 
'
L
u
b
o
m
b
o
'
,
 
'
M
a
n
z
i
n
i
'
,
 
'
S
h
i
s
e
l
w
e
n
i
'
,
 
'
P
r
a
s
l
i
n
'
)
,
 
'
T
D
'
 
=
>
 
a
r
r
a
y
(
'
B
a
t
h
a
'
,
 
'
B
i
l
t
i
n
e
'
,
 
'
B
o
r
k
o
u
-
E
n
n
e
d
i
-
T
i
b
e
s
t
i
'
,
 
'
C
h
a
r
i
-
B
a
g
u
i
r
m
i
'
,
 
'
G
u
e
r
a
'
,
 
'
K
a
n
e
m
'
,
 
'
L
a
c
'
,
 
'
L
o
g
o
n
e
 
O
c
c
i
d
e
n
t
a
l
'
,
 
'
L
o
g
o
n
e
 
O
r
i
e
n
t
a
l
'
,
 
'
M
a
y
o
-
K
e
b
b
i
'
,
 
'
M
o
y
e
n
-
C
h
a
r
i
'
,
 
'
O
u
a
d
d
a
i
'
,
 
'
S
a
l
a
m
a
t
'
,
 
'
T
a
n
d
j
i
l
e
'
)
,
 
'
T
G
'
 
=
>
 
a
r
r
a
y
(
'
A
m
l
a
m
e
'
,
 
'
A
n
e
h
o
'
,
 
'
A
t
a
k
p
a
m
e
'
,
 
'
B
a
f
i
l
o
'
,
 
'
B
a
s
s
a
r
'
,
 
'
D
a
p
a
o
n
g
'
,
 
'
K
a
n
t
e
'
,
 
'
K
l
o
u
t
o
'
,
 
'
L
a
m
a
-
K
a
r
a
'
,
 
'
L
o
m
e
'
,
 
'
M
a
n
g
o
'
,
 
'
N
i
a
m
t
o
u
g
o
u
'
,
 
'
N
o
t
s
e
'
,
 
'
K
p
a
g
o
u
d
a
'
,
 
'
B
a
d
o
u
'
,
 
'
S
o
t
o
u
b
o
u
a
'
,
 
'
T
a
b
l
i
g
b
o
'
,
 
'
T
s
e
v
i
e
'
,
 
'
T
c
h
a
m
b
a
'
,
 
'
T
c
h
a
o
u
d
j
o
'
,
 
'
V
o
g
a
n
'
)
,
 
'
T
H
'
 
=
>
 
a
r
r
a
y
(
'
M
a
e
 
H
o
n
g
 
S
o
n
'
,
 
'
C
h
i
a
n
g
 
M
a
i
'
,
 
'
C
h
i
a
n
g
 
R
a
i
'
,
 
'
N
a
n
'
,
 
'
L
a
m
p
h
u
n
'
,
 
'
L
a
m
p
a
n
g
'
,
 
'
P
h
r
a
e
'
,
 
'
T
a
k
'
,
 
'
S
u
k
h
o
t
h
a
i
'
,
 
'
U
t
t
a
r
a
d
i
t
'
,
 
'
K
a
m
p
h
a
e
n
g
 
P
h
e
t
'
,
 
'
P
h
i
t
s
a
n
u
l
o
k
'
,
 
'
P
h
i
c
h
i
t
'
,
 
'
P
h
e
t
c
h
a
b
u
n
'
,
 
'
U
t
h
a
i
 
T
h
a
n
i
'
,
 
'
N
a
k
h
o
n
 
S
a
w
a
n
'
,
 
'
N
o
n
g
 
K
h
a
i
'
,
 
'
L
o
e
i
'
,
 
'
U
d
o
n
 
T
h
a
n
i
'
,
 
'
S
a
k
o
n
 
N
a
k
h
o
n
'
,
 
'
N
a
k
h
o
n
 
P
h
a
n
o
m
'
,
 
'
K
h
o
n
 
K
a
e
n
'
,
 
'
K
a
l
a
s
i
n
'
,
 
'
M
a
h
a
 
S
a
r
a
k
h
a
m
'
,
 
'
R
o
i
 
E
t
'
,
 
'
C
h
a
i
y
a
p
h
u
m
'
,
 
'
N
a
k
h
o
n
 
R
a
t
c
h
a
s
i
m
a
'
,
 
'
B
u
r
i
r
a
m
'
,
 
'
S
u
r
i
n
'
,
 
'
S
i
s
a
k
e
t
'
,
 
'
N
a
r
a
t
h
i
w
a
t
'
,
 
'
C
h
a
i
 
N
a
t
'
,
 
'
S
i
n
g
 
B
u
r
i
'
,
 
'
L
o
p
 
B
u
r
i
'
,
 
'
A
n
g
 
T
h
o
n
g
'
,
 
'
P
h
r
a
 
N
a
k
h
o
n
 
S
i
 
A
y
u
t
t
h
a
y
a
'
,
 
'
S
a
r
a
b
u
r
i
'
,
 
'
N
o
n
t
h
a
b
u
r
i
'
,
 
'
P
a
t
h
u
m
 
T
h
a
n
i
'
,
 
'
K
r
u
n
g
 
T
h
e
p
'
,
 
'
P
h
a
y
a
o
'
,
 
'
S
a
m
u
t
 
P
r
a
k
a
n
'
,
 
'
N
a
k
h
o
n
 
N
a
y
o
k
'
,
 
'
C
h
a
c
h
o
e
n
g
s
a
o
'
,
 
'
P
r
a
c
h
i
n
 
B
u
r
i
'
,
 
'
C
h
o
n
 
B
u
r
i
'
,
 
'
R
a
y
o
n
g
'
,
 
'
C
h
a
n
t
h
a
b
u
r
i
'
,
 
'
T
r
a
t
'
,
 
'
K
a
n
c
h
a
n
a
b
u
r
i
'
,
 
'
S
u
p
h
a
n
 
B
u
r
i
'
,
 
'
R
a
t
c
h
a
b
u
r
i
'
,
 
'
N
a
k
h
o
n
 
P
a
t
h
o
m
'
,
 
'
S
a
m
u
t
 
S
o
n
g
k
h
r
a
m
'
,
 
'
S
a
m
u
t
 
S
a
k
h
o
n
'
,
 
'
P
h
e
t
c
h
a
b
u
r
i
'
,
 
'
P
r
a
c
h
u
a
p
 
K
h
i
r
i
 
K
h
a
n
'
,
 
'
C
h
u
m
p
h
o
n
'
,
 
'
R
a
n
o
n
g
'
,
 
'
S
u
r
a
t
 
T
h
a
n
i
'
,
 
'
P
h
a
n
g
n
g
a
'
,
 
'
P
h
u
k
e
t
'
,
 
'
K
r
a
b
i
'
,
 
'
N
a
k
h
o
n
 
S
i
 
T
h
a
m
m
a
r
a
t
'
,
 
'
T
r
a
n
g
'
,
 
'
P
h
a
t
t
h
a
l
u
n
g
'
,
 
'
S
a
t
u
n
'
,
 
'
S
o
n
g
k
h
l
a
'
,
 
'
P
a
t
t
a
n
i
'
,
 
'
Y
a
l
a
'
,
 
'
U
b
o
n
 
R
a
t
c
h
a
t
h
a
n
i
'
,
 
'
Y
a
s
o
t
h
o
n
'
)
,
 
'
T
M
'
 
=
>
 
a
r
r
a
y
(
'
A
h
a
l
'
,
 
'
B
a
l
k
a
n
'
,
 
'
D
a
s
h
o
g
u
z
'
,
 
'
L
e
b
a
p
'
,
 
'
M
a
r
y
'
)
,
 
'
T
N
'
 
=
>
 
a
r
r
a
y
(
'
E
l
 
K
e
f
'
,
 
'
M
a
h
d
i
a
'
,
 
'
M
o
u
n
a
s
t
i
r
'
,
 
'
K
a
s
s
e
r
i
n
e
'
,
 
'
K
a
i
r
o
u
a
n
'
,
 
'
A
r
i
a
n
a
'
,
 
'
B
e
j
a
'
,
 
'
B
i
z
e
r
t
e
'
,
 
'
J
e
n
d
o
u
b
a
'
,
 
'
M
e
d
n
i
n
e
'
,
 
'
N
a
b
e
u
l
'
,
 
'
G
a
b
e
s
'
,
 
'
G
a
f
s
a
'
,
 
'
G
u
e
b
e
l
l
i
'
,
 
'
S
f
a
x
'
,
 
'
S
i
d
i
 
B
o
u
z
i
d
'
,
 
'
S
i
l
i
a
n
a
'
,
 
'
S
o
u
s
s
e
'
,
 
'
T
a
t
a
o
u
i
n
'
,
 
'
T
o
z
e
u
r
'
,
 
'
Z
a
g
h
o
u
e
n
'
)
,
 
'
T
O
'
 
=
>
 
a
r
r
a
y
(
'
H
a
'
,
 
'
T
o
n
g
a
t
a
p
u
'
,
 
'
V
a
v
a
'
)
,
 
'
T
R
'
 
=
>
 
a
r
r
a
y
(
'
A
d
i
y
a
m
a
n
'
,
 
'
A
f
y
o
n
'
,
 
'
A
g
r
i
'
,
 
'
A
m
a
s
y
a
'
,
 
'
A
n
t
a
l
y
a
'
,
 
'
A
r
t
v
i
n
'
,
 
'
A
y
d
i
n
'
,
 
'
B
a
l
i
k
e
s
i
r
'
,
 
'
B
i
l
e
c
i
k
'
,
 
'
B
i
n
g
o
l
'
,
 
'
B
i
t
l
i
s
'
,
 
'
B
o
l
u
'
,
 
'
B
u
r
d
u
r
'
,
 
'
B
u
r
s
a
'
,
 
'
C
a
n
a
k
k
a
l
e
'
,
 
'
C
o
r
u
m
'
,
 
'
D
e
n
i
z
l
i
'
,
 
'
D
i
y
a
r
b
a
k
i
r
'
,
 
'
E
d
i
r
n
e
'
,
 
'
E
l
a
z
i
g
'
,
 
'
E
r
z
i
n
c
a
n
'
,
 
'
E
r
z
u
r
u
m
'
,
 
'
E
s
k
i
s
e
h
i
r
'
,
 
'
G
i
r
e
s
u
n
'
,
 
'
H
a
t
a
y
'
,
 
'
I
c
e
l
'
,
 
'
I
s
p
a
r
t
a
'
,
 
'
I
s
t
a
n
b
u
l
'
,
 
'
I
z
m
i
r
'
,
 
'
K
a
s
t
a
m
o
n
u
'
,
 
'
K
a
y
s
e
r
i
'
,
 
'
K
i
r
k
l
a
r
e
l
i
'
,
 
'
K
i
r
s
e
h
i
r
'
,
 
'
K
o
c
a
e
l
i
'
,
 
'
K
u
t
a
h
y
a
'
,
 
'
M
a
l
a
t
y
a
'
,
 
'
M
a
n
i
s
a
'
,
 
'
K
a
h
r
a
m
a
n
m
a
r
a
s
'
,
 
'
M
u
g
l
a
'
,
 
'
M
u
s
'
,
 
'
N
e
v
s
e
h
i
r
'
,
 
'
O
r
d
u
'
,
 
'
R
i
z
e
'
,
 
'
S
a
k
a
r
y
a
'
,
 
'
S
a
m
s
u
n
'
,
 
'
S
i
n
o
p
'
,
 
'
S
i
v
a
s
'
,
 
'
T
e
k
i
r
d
a
g
'
,
 
'
T
o
k
a
t
'
,
 
'
T
r
a
b
z
o
n
'
,
 
'
T
u
n
c
e
l
i
'
,
 
'
S
a
n
l
i
u
r
f
a
'
,
 
'
U
s
a
k
'
,
 
'
V
a
n
'
,
 
'
Y
o
z
g
a
t
'
,
 
'
A
n
k
a
r
a
'
,
 
'
G
u
m
u
s
h
a
n
e
'
,
 
'
H
a
k
k
a
r
i
'
,
 
'
K
o
n
y
a
'
,
 
'
M
a
r
d
i
n
'
,
 
'
N
i
g
d
e
'
,
 
'
S
i
i
r
t
'
,
 
'
A
k
s
a
r
a
y
'
,
 
'
B
a
t
m
a
n
'
,
 
'
B
a
y
b
u
r
t
'
,
 
'
K
a
r
a
m
a
n
'
,
 
'
K
i
r
i
k
k
a
l
e
'
,
 
'
S
i
r
n
a
k
'
,
 
'
A
d
a
n
a
'
,
 
'
C
a
n
k
i
r
i
'
,
 
'
G
a
z
i
a
n
t
e
p
'
,
 
'
K
a
r
s
'
,
 
'
Z
o
n
g
u
l
d
a
k
'
,
 
'
A
r
d
a
h
a
n
'
,
 
'
B
a
r
t
i
n
'
,
 
'
I
g
d
i
r
'
,
 
'
K
a
r
a
b
u
k
'
,
 
'
K
i
l
i
s
'
,
 
'
O
s
m
a
n
i
y
e
'
,
 
'
Y
a
l
o
v
a
'
)
,
 
'
T
T
'
 
=
>
 
a
r
r
a
y
(
'
A
r
i
m
a
'
,
 
'
C
a
r
o
n
i
'
,
 
'
M
a
y
a
r
o
'
,
 
'
N
a
r
i
v
a
'
,
 
'
P
o
r
t
-
o
f
-
S
p
a
i
n
'
,
 
'
S
t
.
 
A
n
d
r
e
w
'
,
 
'
S
t
.
 
D
a
v
i
d
'
,
 
'
S
t
.
 
G
e
o
r
g
e
'
,
 
'
S
t
.
 
P
a
t
r
i
c
k
'
,
 
'
S
a
n
 
F
e
r
n
a
n
d
o
'
,
 
'
T
o
b
a
g
o
'
,
 
'
V
i
c
t
o
r
i
a
'
)
,
 
'
T
W
'
 
=
>
 
a
r
r
a
y
(
'
F
u
-
c
h
i
e
n
'
,
 
'
K
a
o
-
h
s
i
u
n
g
'
,
 
"
T
'
a
i
-
p
e
i
"
,
 
"
T
'
a
i
-
w
a
n
"
)
,
 
'
T
Z
'
 
=
>
 
a
r
r
a
y
(
'
A
r
u
s
h
a
'
,
 
'
P
w
a
n
i
'
,
 
'
D
o
d
o
m
a
'
,
 
'
I
r
i
n
g
a
'
,
 
'
K
i
g
o
m
a
'
,
 
'
K
i
l
i
m
a
n
j
a
r
o
'
,
 
'
L
i
n
d
i
'
,
 
'
M
a
r
a
'
,
 
'
M
b
e
y
a
'
,
 
'
M
o
r
o
g
o
r
o
'
,
 
'
M
t
w
a
r
a
'
,
 
'
M
w
a
n
z
a
'
,
 
'
P
e
m
b
a
 
N
o
r
t
h
'
,
 
'
R
u
v
u
m
a
'
,
 
'
S
h
i
n
y
a
n
g
a
'
,
 
'
S
i
n
g
i
d
a
'
,
 
'
T
a
b
o
r
a
'
,
 
'
T
a
n
g
a
'
,
 
'
K
a
g
e
r
a
'
,
 
'
P
e
m
b
a
 
S
.
'
,
 
'
Z
a
n
z
i
b
a
r
 
C
e
n
t
r
a
l
'
,
 
'
Z
a
n
z
i
b
a
r
 
N
o
r
t
h
'
,
 
'
D
a
r
 
e
s
 
S
a
l
a
a
m
'
,
 
'
R
u
k
w
a
'
,
 
'
Z
a
n
z
i
b
a
r
 
U
r
b
a
n
'
)
,
 
'
U
A
'
 
=
>
 
a
r
r
a
y
(
"
C
h
e
r
k
a
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
C
h
e
r
n
i
h
i
v
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
C
h
e
r
n
i
v
e
t
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
D
n
i
p
r
o
p
e
t
r
o
v
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
D
o
n
e
t
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
I
v
a
n
o
-
F
r
a
n
k
i
v
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
K
h
a
r
k
i
v
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
K
h
e
r
s
o
n
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
K
h
m
e
l
'
n
y
t
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
K
i
r
o
v
o
h
r
a
d
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
'
K
r
y
m
'
,
 
'
K
y
y
i
v
'
,
 
"
K
y
y
i
v
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
L
u
h
a
n
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
L
'
v
i
v
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
M
y
k
o
l
a
y
i
v
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
O
d
e
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
P
o
l
t
a
v
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
R
i
v
n
e
n
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
S
e
v
a
s
t
o
p
o
l
'
"
,
 
"
S
u
m
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
T
e
r
n
o
p
i
l
'
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
V
i
n
n
y
t
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
V
o
l
y
n
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
Z
a
k
a
r
p
a
t
s
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
Z
a
p
o
r
i
z
'
k
a
 
O
b
l
a
s
t
'
"
,
 
"
Z
h
y
t
o
m
y
r
s
'
k
a
 
O
b
l
a
s
t
'
"
)
,
 
'
U
G
'
 
=
>
 
a
r
r
a
y
(
'
B
u
s
o
g
a
'
,
 
'
K
a
r
a
m
o
j
a
'
,
 
'
S
.
 
B
u
g
a
n
d
a
'
,
 
'
C
e
n
t
r
a
l
'
,
 
'
E
a
s
t
e
r
n
'
,
 
'
N
i
l
e
'
,
 
'
N
o
r
t
h
 
B
u
g
a
n
d
a
'
,
 
'
N
.
'
,
 
'
S
.
e
r
n
'
,
 
'
W
.
'
,
 
'
A
d
j
u
m
a
n
i
'
,
 
'
B
u
g
i
r
i
'
,
 
'
B
u
s
i
a
'
,
 
'
K
a
t
a
k
w
i
'
,
 
'
N
a
k
a
s
o
n
g
o
l
a
'
,
 
'
S
e
m
b
a
b
u
l
e
'
)
,
 
'
U
S
'
 
=
>
 
a
r
r
a
y
(
'
A
l
a
b
a
m
a
'
,
 
'
A
l
a
s
k
a
'
,
 
'
A
r
i
z
o
n
a
'
,
 
'
A
r
k
a
n
s
a
s
'
,
 
'
C
a
l
i
f
o
r
n
i
a
'
,
 
'
C
o
l
o
r
a
d
o
'
,
 
'
C
o
n
n
e
c
t
i
c
u
t
'
,
 
'
D
e
l
a
w
a
r
e
'
,
 
'
D
i
s
t
r
i
c
t
 
o
f
 
C
o
l
u
m
b
i
a
'
,
 
'
F
l
o
r
i
d
a
'
,
 
'
G
e
o
r
g
i
a
'
,
 
'
H
a
w
a
i
i
'
,
 
'
I
d
a
h
o
'
,
 
'
I
l
l
i
n
o
i
s
'
,
 
'
I
n
d
i
a
n
a
'
,
 
'
I
o
w
a
'
,
 
'
K
a
n
s
a
s
'
,
 
'
K
e
n
t
u
c
k
y
'
,
 
'
L
o
u
i
s
i
a
n
a
'
,
 
'
M
a
i
n
e
'
,
 
'
M
a
r
y
l
a
n
d
'
,
 
'
M
a
s
s
a
c
h
u
s
e
t
t
s
'
,
 
'
M
i
c
h
i
g
a
n
'
,
 
'
M
i
n
n
e
s
o
t
a
'
,
 
'
M
i
s
s
i
s
s
i
p
p
i
'
,
 
'
M
i
s
s
o
u
r
i
'
,
 
'
M
o
n
t
a
n
a
'
,
 
'
N
e
b
r
a
s
k
a
'
,
 
'
N
e
v
a
d
a
'
,
 
'
N
e
w
 
H
a
m
p
s
h
i
r
e
'
,
 
'
N
e
w
 
J
e
r
s
e
y
'
,
 
'
N
e
w
 
M
e
x
i
c
o
'
,
 
'
N
e
w
 
Y
o
r
k
'
,
 
'
N
o
r
t
h
 
C
a
r
o
l
i
n
a
'
,
 
'
N
o
r
t
h
 
D
a
k
o
t
a
'
,
 
'
O
h
i
o
'
,
 
'
O
k
l
a
h
o
m
a
'
,
 
'
O
r
e
g
o
n
'
,
 
'
P
e
n
n
y
s
l
v
a
n
i
a
'
,
 
'
R
h
o
d
e
 
I
s
.
'
,
 
'
S
.
 
C
a
r
o
l
i
n
a
'
,
 
'
S
.
 
D
a
k
o
t
a
'
,
 
'
T
e
n
n
e
s
s
e
e
'
,
 
'
T
e
x
a
s
'
,
 
'
U
t
a
h
'
,
 
'
V
e
r
m
o
n
t
'
,
 
'
V
i
r
g
i
n
i
a
'
,
 
'
W
a
s
h
i
n
g
t
o
n
'
,
 
'
W
e
s
t
 
V
i
r
g
i
n
i
a
'
,
 
'
W
i
s
c
o
n
s
i
n
'
,
 
'
W
y
o
m
i
n
g
'
)
,
 
'
U
Y
'
 
=
>
 
a
r
r
a
y
(
'
A
r
t
i
g
a
s
'
,
 
'
C
a
n
e
l
o
n
e
s
'
,
 
'
C
e
r
r
o
 
L
a
r
g
o
'
,
 
'
C
o
l
o
n
i
a
'
,
 
'
D
u
r
a
z
n
o
'
,
 
'
F
l
o
r
e
s
'
,
 
'
F
l
o
r
i
d
a
'
,
 
'
L
a
v
a
l
l
e
j
a
'
,
 
'
M
a
l
d
o
n
a
d
o
'
,
 
'
M
o
n
t
e
v
i
d
e
o
'
,
 
'
P
a
y
s
a
n
d
u
'
,
 
'
R
i
o
 
N
e
g
r
o
'
,
 
'
R
i
v
e
r
a
'
,
 
'
R
o
c
h
a
'
,
 
'
S
a
l
t
o
'
,
 
'
S
a
n
 
J
o
s
e
'
,
 
'
S
o
r
i
a
n
o
'
,
 
'
T
a
c
u
a
r
e
m
b
o
'
,
 
'
T
r
e
i
n
t
a
 
y
 
T
r
e
s
'
)
,
 
'
U
Z
'
 
=
>
 
a
r
r
a
y
(
'
A
n
d
i
j
o
n
'
,
 
'
B
u
k
h
o
r
o
'
,
 
'
F
a
r
g
h
o
n
a
'
,
 
'
J
i
z
z
a
k
h
'
,
 
'
K
h
o
r
a
z
m
'
,
 
'
N
a
m
a
n
g
a
n
'
,
 
'
N
a
w
o
i
y
'
,
 
'
Q
a
s
h
q
a
d
a
r
y
o
'
,
 
'
Q
o
r
a
q
a
l
p
o
g
h
i
s
t
o
n
'
,
 
'
S
a
m
a
r
q
a
n
d
'
,
 
'
S
i
r
d
a
r
y
o
'
,
 
'
S
u
r
k
h
o
n
d
a
r
y
o
'
,
 
'
T
o
s
h
k
e
n
t
'
,
 
'
T
o
s
h
k
e
n
t
'
)
,
 
'
V
C
'
 
=
>
 
a
r
r
a
y
(
'
C
h
a
r
l
o
t
t
e
'
,
 
'
S
t
.
 
A
n
d
r
e
w
'
,
 
'
S
t
.
 
D
a
v
i
d
'
,
 
'
S
t
.
 
G
e
o
r
g
e
'
,
 
'
S
t
.
 
P
a
t
r
i
c
k
'
,
 
'
G
r
e
n
a
d
i
n
e
s
'
)
,
 
'
V
E
'
 
=
>
 
a
r
r
a
y
(
'
A
m
a
z
o
n
a
s
'
,
 
'
A
n
z
o
a
t
e
g
u
i
'
,
 
'
A
p
u
r
e
'
,
 
'
A
r
a
g
u
a
'
,
 
'
B
a
r
i
n
a
s
'
,
 
'
B
o
l
i
v
a
r
'
,
 
'
C
a
r
a
b
o
b
o
'
,
 
'
C
o
j
e
d
e
s
'
,
 
'
D
e
l
t
a
 
A
m
a
c
u
r
o
'
,
 
'
F
a
l
c
o
n
'
,
 
'
G
u
a
r
i
c
o
'
,
 
'
L
a
r
a
'
,
 
'
M
e
r
i
d
a
'
,
 
'
M
i
r
a
n
d
a
'
,
 
'
M
o
n
a
g
a
s
'
,
 
'
N
u
e
v
a
 
E
s
p
a
r
t
a
'
,
 
'
P
o
r
t
u
g
u
e
s
a
'
,
 
'
S
u
c
r
e
'
,
 
'
T
a
c
h
i
r
a
'
,
 
'
T
r
u
j
i
l
l
o
'
,
 
'
Y
a
r
a
c
u
y
'
,
 
'
Z
u
l
i
a
'
,
 
'
T
e
r
r
i
t
o
r
i
o
 
I
n
s
u
l
a
r
 
F
r
a
n
c
i
s
c
o
 
d
e
 
M
i
r
a
n
d
a
'
,
 
'
D
i
s
t
r
i
t
o
 
F
e
d
e
r
a
l
'
,
 
'
V
a
r
g
a
s
'
)
,
 
'
V
N
'
 
=
>
 
a
r
r
a
y
(
'
B
a
c
 
T
h
a
i
'
,
 
'
B
e
n
 
T
r
e
'
,
 
'
C
a
o
 
B
a
n
g
'
,
 
'
H
a
 
B
a
c
'
,
 
'
H
a
i
 
H
u
n
g
'
,
 
'
H
a
i
 
P
h
o
n
g
'
,
 
'
L
a
i
 
C
h
a
u
'
,
 
'
L
a
m
 
D
o
n
g
'
,
 
'
L
o
n
g
 
A
n
'
,
 
'
Q
u
a
n
g
 
N
a
m
-
D
a
 
N
a
n
g
'
,
 
'
Q
u
a
n
g
 
N
i
n
h
'
,
 
'
S
o
n
 
L
a
'
,
 
'
T
a
y
 
N
i
n
h
'
,
 
'
T
h
a
n
h
 
H
o
a
'
,
 
'
T
h
a
i
 
B
i
n
h
'
,
 
'
T
i
e
n
 
G
i
a
n
g
'
,
 
'
L
a
n
g
 
S
o
n
'
,
 
'
A
n
 
G
i
a
n
g
'
,
 
'
D
a
c
 
L
a
c
'
,
 
'
D
o
n
g
 
N
a
i
'
,
 
'
D
o
n
g
 
T
h
a
p
'
,
 
'
K
i
e
n
 
G
i
a
n
g
'
,
 
'
M
i
n
h
 
H
a
i
'
,
 
'
S
o
n
g
 
B
e
'
,
 
'
V
i
n
h
 
P
h
u
'
,
 
'
H
a
 
N
o
i
'
,
 
'
H
o
 
C
h
i
 
M
i
n
h
'
,
 
'
B
a
 
R
i
a
-
V
u
n
g
 
T
a
u
'
,
 
'
B
i
n
h
 
D
i
n
h
'
,
 
'
B
i
n
h
 
T
h
u
a
n
'
,
 
'
C
a
n
 
T
h
o
'
,
 
'
G
i
a
 
L
a
i
'
,
 
'
H
a
 
G
i
a
n
g
'
,
 
'
H
a
 
T
a
y
'
,
 
'
H
a
 
T
i
n
h
'
,
 
'
H
o
a
 
B
i
n
h
'
,
 
'
K
h
a
n
h
 
H
o
a
'
,
 
'
K
o
n
 
T
u
m
'
,
 
'
L
a
o
 
C
a
i
'
,
 
'
N
a
m
 
H
a
'
,
 
'
N
g
h
e
 
A
n
'
,
 
'
N
i
n
h
 
B
i
n
h
'
,
 
'
N
i
n
h
 
T
h
u
a
n
'
,
 
'
P
h
u
 
Y
e
n
'
,
 
'
Q
u
a
n
g
 
B
i
n
h
'
,
 
'
Q
u
a
n
g
 
N
g
a
i
'
,
 
'
Q
u
a
n
g
 
T
r
i
'
,
 
'
S
o
c
 
T
r
a
n
g
'
,
 
'
T
h
u
a
 
T
h
i
e
n
'
,
 
'
T
r
a
 
V
i
n
h
'
,
 
'
T
u
y
e
n
 
Q
u
a
n
g
'
,
 
'
V
i
n
h
 
L
o
n
g
'
,
 
'
Y
e
n
 
B
a
i
'
)
,
 
'
V
U
'
 
=
>
 
a
r
r
a
y
(
'
A
m
b
r
y
m
'
,
 
'
A
o
b
a
'
,
 
'
B
a
n
k
s
'
,
 
'
E
f
a
t
e
'
,
 
'
E
p
i
'
,
 
'
M
a
l
a
k
u
l
a
'
,
 
'
P
a
a
m
a
'
,
 
'
P
e
n
t
e
c
o
t
e
'
,
 
'
S
a
n
t
o
'
,
 
'
S
h
e
p
h
e
r
d
'
,
 
'
T
a
f
e
a
'
)
,
 
'
W
S
'
 
=
>
 
a
r
r
a
y
(
'
A
i
g
a
-
i
-
l
e
-
T
a
i
'
,
 
'
A
t
u
a
'
,
 
'
F
a
'
,
 
'
G
a
g
a
'
,
 
'
V
a
'
,
 
'
G
a
g
a
i
f
o
m
a
u
g
a
'
,
 
'
P
a
l
a
u
l
i
'
,
 
'
S
a
t
u
p
a
'
,
 
'
T
u
a
m
a
s
a
g
a
'
,
 
'
V
a
i
s
i
g
a
n
o
'
)
,
 
'
Y
E
'
 
=
>
 
a
r
r
a
y
(
'
A
b
y
a
n
'
,
 
'
A
l
 
M
a
h
r
a
h
'
,
 
'
H
a
d
r
a
m
a
w
t
'
,
 
'
S
h
a
b
w
a
h
'
,
 
'
L
a
h
i
j
'
,
 
"
A
l
 
B
a
y
d
a
'
"
,
 
'
A
l
 
H
u
d
a
y
d
a
h
'
,
 
'
A
l
 
J
a
w
f
'
,
 
'
A
l
 
M
a
h
w
i
t
'
,
 
'
D
h
a
m
a
r
'
,
 
'
H
a
j
j
a
h
'
,
 
'
I
b
b
'
,
 
"
M
a
'
r
i
b
"
,
 
'
S
a
'
,
 
'
S
a
n
'
,
 
'
T
a
'
)
,
 
'
Z
A
'
 
=
>
 
a
r
r
a
y
(
'
W
.
 
C
a
p
e
'
,
 
'
N
.
 
C
a
p
e
'
,
 
'
E
a
s
t
e
r
n
 
C
a
p
e
'
,
 
'
F
r
e
e
 
S
t
a
t
e
'
,
 
'
L
i
m
p
o
p
o
'
,
 
'
N
o
r
t
h
 
W
e
s
t
'
,
 
'
K
w
a
Z
u
l
u
-
N
a
t
a
l
'
,
 
'
G
a
u
t
e
n
g
'
,
 
'
M
p
u
m
a
l
a
n
g
a
'
)
,
 
'
Z
M
'
 
=
>
 
a
r
r
a
y
(
'
W
.
'
,
 
'
C
e
n
t
r
a
l
'
,
 
'
E
a
s
t
e
r
n
'
,
 
'
L
u
a
p
u
l
a
'
,
 
'
N
.
'
,
 
'
N
o
r
t
h
-
W
.
'
,
 
'
S
.
e
r
n
'
,
 
'
C
o
p
p
e
r
b
e
l
t
'
,
 
'
L
u
s
a
k
a
'
)
,
 
'
Z
R
'
 
=
>
 
a
r
r
a
y
(
'
B
a
n
d
u
n
d
u
'
,
 
'
E
q
u
a
t
e
u
r
'
,
 
'
K
a
s
a
i
-
O
c
c
i
d
e
n
t
a
l
'
,
 
'
K
a
s
a
i
-
O
r
i
e
n
t
a
l
'
,
 
'
S
h
a
b
a
'
,
 
'
K
i
n
s
h
a
s
a
'
,
 
'
K
i
v
u
'
,
 
'
B
a
s
-
Z
a
i
r
e
'
,
 
'
H
a
u
t
-
Z
a
i
r
e
'
)
,
 
'
Z
W
'
 
=
>
 
a
r
r
a
y
(
'
M
a
n
i
c
a
l
a
n
d
'
,
 
'
M
i
d
l
a
n
d
s
'
,
 
'
M
a
s
h
o
n
a
l
a
n
d
 
C
e
n
t
r
a
l
'
,
 
'
M
a
s
h
o
n
a
l
a
n
d
 
E
a
s
t
'
,
 
'
M
a
s
h
o
n
a
l
a
n
d
 
W
e
s
t
'
,
 
'
M
a
t
a
b
e
l
e
l
a
n
d
 
N
o
r
t
h
'
,
 
'
M
a
t
a
b
e
l
e
l
a
n
d
 
S
.
'
,
 
'
M
a
s
v
i
n
g
o
'
,
 
'
B
u
l
a
w
a
y
o
'
,
 
'
H
a
r
a
r
e
'
)
,
 
'
C
W
'
 
=
>
 
a
r
r
a
y
(
'
C
u
r
a
Ã
§
a
o
'
)
,
 
'
A
W
'
 
=
>
 
a
r
r
a
y
(
'
A
r
u
b
a
'
)
,
 
'
B
Q
'
 
=
>
 
a
r
r
a
y
(
'
B
o
n
a
i
r
e
,
 
S
i
n
t
 
E
u
s
t
a
t
i
u
s
 
a
n
d
 
S
a
b
a
'
)
)
;


 
 
 
 
r
e
t
u
r
n
 
$
F
I
P
S
;

}


/
*
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
 
a
r
r
a
y
 
o
f
 
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
s

*
 

*
 
N
o
t
 
c
u
r
r
e
n
t
l
y
 
u
s
e
d
.
 
W
a
s
 
u
s
e
d
 
w
h
e
n
 
b
u
i
l
d
i
n
g
 
d
r
o
p
d
o
w
n
s
 
b
u
t
 
h
a
s
 
n
o
w
 
b
e
e
n
 
s
u
p
e
r
c
e
e
d
e
d
 
b
y
 
t
h
e
 
j
o
m
r
e
s
_
c
o
u
n
t
r
i
e
s
 
s
i
n
g
l
e
t
o
n

*

*
 
@
d
e
p
r
e
c
i
a
t
e
d

*

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
 
c
o
u
n
t
r
y
N
a
m
e
A
r
r
a
y
(
)

{

 
 
 
 
$
c
o
u
n
t
r
y
N
a
m
e
s
 
=
 
a
r
r
a
y
(
'
A
n
d
o
r
r
a
'
,
 
'
U
n
i
t
e
d
 
A
.
 
E
m
i
r
.
'
,
 
'
A
f
g
h
a
n
i
s
t
a
n
'
,
 
'
A
n
t
i
g
u
a
'
,
 
'
A
n
g
u
i
l
l
a
'
,
 
'
A
l
b
a
n
i
a
'
,
 
'
A
r
m
e
n
i
a
'
,
 
'
N
e
t
h
.
 
A
n
t
.
'
,
 
'
A
n
g
o
l
a
'
,
 
'
A
n
t
a
r
c
t
i
c
a
'
,
 
'
A
r
g
e
n
t
i
n
a
'
,
 
'
A
m
.
 
S
a
m
o
a
'
,
 
'
A
u
s
t
r
i
a
'
,
 
'
A
u
s
t
r
a
l
i
a
'
,
 
'
A
r
u
b
a
'
,
 
'
A
z
e
r
b
a
i
j
a
n
'
,
 
'
B
o
s
n
i
a
 
H
e
r
z
'
,
 
'
B
a
r
b
a
d
o
s
'
,
 
'
B
a
n
g
l
a
d
e
s
h
'
,
 
'
B
e
l
g
i
u
m
'
,
 
'
B
u
r
k
i
n
a
 
F
a
s
o
'
,
 
'
B
u
l
g
a
r
i
a
'
,
 
'
B
a
h
r
a
i
n
'
,
 
'
B
u
r
u
n
d
i
'
,
 
'
B
e
n
i
n
'
,
 
'
B
e
r
m
u
d
a
'
,
 
'
B
r
u
n
e
i
'
,
 
'
B
o
l
i
v
i
a
'
,
 
'
B
r
a
z
i
l
'
,
 
'
B
a
h
a
m
a
s
'
,
 
'
B
h
u
t
a
n
'
,
 
'
B
o
u
v
e
t
 
I
s
.
'
,
 
'
B
o
t
s
w
a
n
a
'
,
 
'
B
e
l
a
r
u
s
'
,
 
'
B
e
l
i
z
e
'
,
 
'
C
a
n
a
d
a
'
,
 
'
C
o
c
o
s
 
I
s
.
'
,
 
'
C
o
n
g
o
 
D
.
 
R
.
'
,
 
'
C
e
n
t
r
a
l
 
A
f
.
 
R
.
'
,
 
'
C
o
n
g
o
'
,
 
'
S
w
i
t
z
e
r
l
a
n
d
'
,
 
"
C
o
t
e
 
D
'
I
v
o
i
r
e
"
,
 
'
C
o
o
k

	
I
s
.
'
,
 
'
C
h
i
l
e
'
,
 
'
C
a
m
e
r
o
o
n
'
,
 
'
C
h
i
n
a
'
,
 
'
C
o
l
o
m
b
i
a
'
,
 
'
C
o
s
t
a
 
R
i
c
a
'
,
 
'
C
u
b
a
'
,
 
'
C
a
p
e

	
V
e
r
d
e
'
,
 
'
C
h
r
i
s
t
m
a
s
 
I
s
.
'
,
 
'
C
y
p
r
u
s
'
,
 
'
C
z
e
c
h
 
R
.
u
b
l
i
c
'
,
 
'
G
e
r
m
a
n
y
'
,
 
'
D
j
i
b
o
u
t
i
'
,
 
'
D
e
n
m
a
r
k
'
,
 
'
D
o
m
i
n
i
c
a
'
,
 
'
D
o
m
i
n
i
c
a
n
 
R
.
'
,
 
'
A
l
g
e
r
i
a
'
,
 
'
E
c
u
a
d
o
r
'
,
 
'
E
s
t
o
n
i
a
'
,
 
'
E
g
y
p
t
'
,
 
'
W
.
 
S
a
h
a
r
a
'
,
 
'
E
r
i
t
r
e
a
'
,
 
'
S
p
a
i
n
'
,
 
'
E
t
h
i
o
p
i
a
'
,
 
'
F
i
n
l
a
n
d
'
,
 
'
F
i
j
i
'
,
 
'
F
a
l
k
l
a
n
d
 
I
s
.
'
,
 
'
M
i
c
r
o
n
e
s
i
a
'
,
 
'
F
a
r
o
e

	
I
s
.
'
,
 
'
F
r
a
n
c
e
'
,
 
'
F
r
a
n
c
e
,
 
M
e
t
r
o
.
'
,
 
'
G
a
b
o
n
'
,
 
'
U
n
i
t
e
d
 
K
i
n
g
d
o
m
'
,
 
'
G
r
e
n
a
d
a
'
,
 
'
G
e
o
r
g
i
a
'
,
 
'
F
r
.
 
G
u
i
a
n
a
'
,
 
'
G
h
a
n
a
'
,
 
'
G
i
b
r
a
l
t
a
r
'
,
 
'
G
r
e
e
n
l
a
n
d
'
,
 
'
G
a
m
b
i
a
'
,
 
'
G
u
i
n
e
a
'
,
 
'
G
u
a
d
e
l
o
u
p
e
'
,
 
'
E
q
.
 
G
u
i
n
e
a
'
,
 
'
G
r
e
e
c
e
'
,
 
'
S
.
 
G
e
o
r
g
i
a
'
,
 
'
G
u
a
t
e
m
a
l
a
'
,
 
'
G
u
a
m
'
,
 
'
G
u
i
n
e
a
-
B
i
s
s
a
u
'
,
 
'
G
u
y
a
n
a
'
,
 
'
H
o
n
g
 
K
o
n
g
'
,
 
'
H
e
a
r
d
 
I
s
.
'
,
 
'
H
o
n
d
u
r
a
s
'
,
 
'
C
r
o
a
t
i
a
'
,
 
'
H
a
i
t
i
'
,
 
'
H
u
n
g
a
r
y
'
,
 
'
I
n
d
o
n
e
s
i
a
'
,
 
'
I
r
e
l
a
n
d
'
,
 
'
I
s
r
a
e
l
'
,
 
'
I
n
d
i
a
'
,
 
'
B
.
 
I
n
d
.
 
O
c
.
 
T
r
.
'
,
 
'
I
r
a
q
'
,
 
'
I
r
a
n
'
,
 
'
I
c
e
l
a
n
d
'
,
 
'
I
t
a
l
y
'
,
 
'
J
a
m
a
i
c
a
'
,
 
'
J
o
r
d
a
n
'
,
 
'
J
a
p
a
n
'
,
 
'
K
e
n
y
a
'
,
 
'
K
y
r
g
y
z
s
t
a
n
'
,
 
'
C
a
m
b
o
d
i
a
'
,
 
'
K
i
r
i
b
a
t
i
'
,
 
'
C
o
m
o
r
o
s
'
,
 
'
S
t
.
 
K
i
t
t
s
 
a
n
d
 
N
e
v
i
s
'
,
 
'
K
o
r
e
a
,
 
D
.
 
R
.
'
,
 
'
K
o
r
e
a
,
 
R
.
'
,
 
'
K
u
w
a
i
t
'
,
 
'
C
a
y
m
a
n
 
I
s
.
'
,
 
'
K
a
z
a
k
s
t
a
n
'
,
 
'
L
a
o
 
P
.
D
e
m
o
c
r
a
t
i
c
 
R
.
u
b
l
i
c
'
,
 
'
L
e
b
a
n
o
n
'
,
 
'
S
t
.
 
L
u
c
i
a
'
,
 
'
L
i
e
c
h
t
e
n
s
t
e
i
n
'
,
 
'
S
r
i
 
L
a
n
k
a
'
,
 
'
L
i
b
e
r
i
a
'
,
 
'
L
e
s
o
t
h
o
'
,
 
'
L
i
t
h
u
a
n
i
a
'
,
 
'
L
u
x
e
m
b
o
u
r
g
'
,
 
'
L
a
t
v
i
a
'
,
 
'
L
i
b
y
a
n
 
A
.
 
J
.
'
,
 
'
M
o
r
o
c
c
o
'
,
 
'
M
o
n
a
c
o
'
,
 
'
M
o
l
d
o
v
a
,
 
R
.
u
b
l
i
c

	
o
f
'
,
 
'
M
a
d
a
g
a
s
c
a
r
'
,
 
'
M
a
r
s
h
a
l
l
 
I
s
.
'
,
 
'
M
a
c
e
d
o
n
i
a
'
,
 
'
M
a
l
i
'
,
 
'
M
y
a
n
m
a
r
'
,
 
'
M
o
n
g
o
l
i
a
'
,
 
'
M
a
c
a
u
'
,
 
'
N
.
 
M
a
r
i
a
n
a
 
I
s
.
'
,
 
'
M
a
r
t
i
n
i
q
u
e
'
,
 
'
M
a
u
r
i
t
a
n
i
a
'
,
 
'
M
o
n
t
s
e
r
r
a
t
'
,
 
'
M
a
l
t
a
'
,
 
'
M
a
u
r
i
t
i
u
s
'
,
 
'
M
a
l
d
i
v
e
s
'
,
 
'
M
a
l
a
w
i
'
,
 
'
M
e
x
i
c
o
'
,
 
'
M
a
l
a
y
s
i
a
'
,
 
'
M
o
z
a
m
b
i
q
u
e
'
,
 
'
N
a
m
i
b
i
a
'
,
 
'
N
e
w
 
C
a
l
e
d
o
n
i
a
'
,
 
'
N
i
g
e
r
'
,
 
'
N
o
r
f
o
l
k
 
I
s
.
'
,
 
'
N
i
g
e
r
i
a
'
,
 
'
N
i
c
a
r
a
g
u
a
'
,
 
'
N
e
t
h
e
r
l
a
n
d
s
'
,
 
'
N
o
r
w
a
y
'
,
 
'
N
e
p
a
l
'
,
 
'
N
a
u
r
u
'
,
 
'
N
i
u
e
'
,
 
'
N
e
w
 
Z
e
a
l
a
n
d
'
,
 
'
O
m
a
n
'
,
 
'
P
a
n
a
m
a
'
,
 
'
P
e
r
u
'
,
 
'
F
r
.

	
P
o
l
y
n
e
s
i
a
'
,
 
'
P
a
p
.
 
N
.
 
G
u
i
n
e
a
'
,
 
'
P
h
i
l
i
p
p
i
n
e
s
'
,
 
'
P
a
k
i
s
t
a
n
'
,
 
'
P
o
l
a
n
d
'
,
 
'
S
t
.

	
P
i
e
r
r
e
 
a
n
d
 
M
i
q
u
e
l
o
n
'
,
 
'
P
i
t
c
a
i
r
n
'
,
 
'
P
u
e
r
t
o
 
R
i
c
o
'
,
 
'
P
a
l
e
s
t
i
n
i
a
n
 
T
r
.
'
,
 
'
P
o
r
t
u
g
a
l
'
,
 
'
P
a
l
a
u
'
,
 
'
P
a
r
a
g
u
a
y
'
,
 
'
Q
a
t
a
r
'
,
 
'
R
e
u
n
i
o
n
'
,
 
'
R
o
m
a
n
i
a
'
,
 
'
R
u
s
s
i
a
n
 
F
e
d
.
'
,
 
'
R
w
a
n
d
a
'
,
 
'
S
a
u
d
i
 
A
r
a
b
i
a
'
,
 
'
S
o
l
o
m
o
n
 
I
s
.
'
,
 
'
S
e
y
c
h
e
l
l
e
s
'
,
 
'
S
u
d
a
n
'
,
 
'
S
w
e
d
e
n
'
,
 
'
S
i
n
g
a
p
o
r
e
'
,
 
'
S
t
.
 
H
e
l
e
n
a
'
,
 
'
S
l
o
v
e
n
i
a
'
,
 
'
S
v
a
l
b
a
r
d
 
J
M
'
,
 
'
S
l
o
v
a
k
i
a
'
,
 
'
S
i
e
r
r
a
 
L
e
o
n
e
'
,
 
'
S
a
n
 
M
a
r
i
n
o
'
,
 
'
S
e
n
e
g
a
l
'
,
 
'
S
o
m
a
l
i
a
'
,
 
'
S
u
r
i
n
a
m
e
'
,
 
'
S
a
o
 
T
o
m
e
'
,
 
'
E
l
 
S
a
l
v
a
d
o
r
'
,
 
'
S
y
r
i
a
'
,
 
'
S
w
a
z
i
l
a
n
d
'
,
 
'
T
u
r
k
s
 
C
a
i
c
o
s
 
I
s
.
'
,
 
'
C
h
a
d
'
,
 
'
F
r
.
 
S
.

	
T
r
.
'
,
 
'
T
o
g
o
'
,
 
'
T
h
a
i
l
a
n
d
'
,
 
'
T
a
j
i
k
i
s
t
a
n
'
,
 
'
T
o
k
e
l
a
u
'
,
 
'
T
u
r
k
m
e
n
i
s
t
a
n
'
,
 
'
T
u
n
i
s
i
a
'
,
 
'
T
o
n
g
a
'
,
 
'
E
a
s
t
 
T
i
m
o
r
'
,
 
'
T
u
r
k
e
y
'
,
 
'
T
r
i
n
i
d
a
d
 
T
o
b
.
'
,
 
'
T
u
v
a
l
u
'
,
 
'
T
a
i
w
a
n
'
,
 
'
T
a
n
z
a
n
i
a
'
,
 
'
U
k
r
a
i
n
e
'
,
 
'
U
g
a
n
d
a
'
,
 
'
U
.
 
S
t
a
t
e
s
 
M
i
n
o
r
 
O
u
t
.
 
I
s
.
'
,
 
'
U
n
i
t
e
d
 
S
t
a
t
e
s
'
,
 
'
U
r
u
g
u
a
y
'
,
 
'
U
z
b
e
k
i
s
t
a
n
'
,
 
'
V
a
t
i
c
a
n
 
C
i
t
y
'
,
 
'
S
t
.
 
V
i
n
c
e
n
t
'
,
 
'
V
e
n
e
z
u
e
l
a
'
,
 
'
V
i
r
g
i
n
 
I
s
.
,
 
B
r
i
t
i
s
h
'
,
 
'
V
i
r
g
i
n
 
I
s
.
,
 
U
.
S
.
'
,
 
'
V
i
e
t
n
a
m
'
,
 
'
V
a
n
u
a
t
u
'
,
 
'
W
a
l
l
i
s
'
,
 
'
S
a
m
o
a
'
,
 
'
Y
e
m
e
n
'
,
 
'
M
a
y
o
t
t
e
'
,
 
'
Y
u
g
o
s
l
a
v
i
a
'
,
 
'
S
.
 
A
f
r
i
c
a
'
,
 
'
Z
a
m
b
i
a
'
,
 
'
Z
a
i
r
e
'
,
 
'
Z
i
m
b
a
b
w
e
'
,
 
'
S
e
r
b
i
a
'
,
 
'
M
o
n
t
e
n
e
g
r
o
'
,
 
'
C
u
r
a
Ã
§
a
o
'
,
 
'
A
r
u
b
a
'
,
 
'
B
o
n
a
i
r
e
,
 
S
i
n
t
 
E
u
s
t
a
t
i
u
s
 
a
n
d
 
S
a
b
a
'
)
;


 
 
 
 
r
e
t
u
r
n
 
$
c
o
u
n
t
r
y
N
a
m
e
s
;

}


/
*
*

*

*
 
R
e
p
l
a
c
e
s
 
t
h
e
 
o
l
d
e
r
 
c
o
u
n
t
r
y
C
o
d
e
s
 
a
r
r
a
y
,
 
w
h
i
c
h
 
i
s
 
n
o
w
 
o
n
l
y
 
u
s
e
d
 
f
o
r
 
i
m
p
o
r
t
i
n
g
 
i
n
t
o
 
t
h
e
 
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
u
n
t
r
i
e
s
 
t
a
b
l
e

*
 

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
 
c
o
u
n
t
r
y
C
o
d
e
s
A
r
r
a
y
(
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
c
o
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
r
i
e
s
(
)
;


 
 
 
 
$
c
o
d
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
j
o
m
r
e
s
_
c
o
u
n
t
r
i
e
s
-
>
c
o
u
n
t
r
i
e
s
 
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

 
 
 
 
 
 
 
 
$
c
o
d
e
s
[
 
$
c
o
u
n
t
r
y
[
 
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
 
]
 
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
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
c
o
d
e
s
;

}


/
*
*

*

*
 
U
s
e
d
 
b
y
 
t
h
e
 
i
n
s
t
a
l
l
e
r
 
w
h
e
n
 
i
n
i
t
i
a
l
l
y
 
p
o
p
u
l
a
t
i
n
g
 
t
h
e
 
c
o
u
n
t
r
i
e
s
 
t
a
b
l
e

*
 

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
 
o
l
d
_
c
o
u
n
t
r
y
C
o
d
e
s
A
r
r
a
y
(
$
t
r
a
n
s
l
a
t
e
 
=
 
t
r
u
e
)

{

 
 
 
 
$
c
o
u
n
t
r
y
C
o
d
e
s
 
=
 
a
r
r
a
y
(


 
 
 
 
 
 
 
 
'
A
D
'
 
=
>
 
'
A
n
d
o
r
r
a
'
,
 
'
A
E
'
 
=
>
 
'
U
n
i
t
e
d
 
A
.
 
E
m
i
r
.
'
,
 
'
A
F
'
 
=
>
 
'
A
f
g
h
a
n
i
s
t
a
n
'
,
 
'
A
G
'
 
=
>
 
'
A
n
t
i
g
u
a
'
,
 
'
A
I
'
 
=
>
 
'
A
n
g
u
i
l
l
a
'
,
 
'
A
L
'
 
=
>
 
'
A
l
b
a
n
i
a
'
,
 
'
A
M
'
 
=
>
 
'
A
r
m
e
n
i
a
'
,
 
'
A
N
'
 
=
>
 
'
N
e
t
h
.
 
A
n
t
.
'
,
 
'
A
O
'
 
=
>
 
'
A
n
g
o
l
a
'
,
 
'
A
Q
'
 
=
>
 
'
A
n
t
a
r
c
t
i
c
a
'
,
 
'
A
R
'
 
=
>
 
'
A
r
g
e
n
t
i
n
a
'
,
 
'
A
S
'
 
=
>
 
'
A
m
.
 
S
a
m
o
a
'
,
 
'
A
T
'
 
=
>
 
'
A
u
s
t
r
i
a
'
,
 
'
A
U
'
 
=
>
 
'
A
u
s
t
r
a
l
i
a
'
,
 
'
A
W
'
 
=
>
 
'
A
r
u
b
a
'
,
 
'
A
Z
'
 
=
>
 
'
A
z
e
r
b
a
i
j
a
n
'
,
 
'
B
A
'
 
=
>
 
'
B
o
s
n
i
a
 
H
e
r
z
'
,
 
'
B
B
'
 
=
>
 
'
B
a
r
b
a
d
o
s
'
,
 
'
B
D
'
 
=
>
 
'
B
a
n
g
l
a
d
e
s
h
'
,
 
'
B
E
'
 
=
>
 
'
B
e
l
g
i
u
m
'
,
 
'
B
F
'
 
=
>
 
'
B
u
r
k
i
n
a
 
F
a
s
o
'
,
 
'
B
G
'
 
=
>
 
'
B
u
l
g
a
r
i
a
'
,
 
'
B
H
'
 
=
>
 
'
B
a
h
r
a
i
n
'
,
 
'
B
I
'
 
=
>
 
'
B
u
r
u
n
d
i
'
,
 
'
B
J
'
 
=
>
 
'
B
e
n
i
n
'
,
 
'
B
M
'
 
=
>
 
'
B
e
r
m
u
d
a
'
,
 
'
B
N
'
 
=
>
 
'
B
r
u
n
e
i
'
,
 
'
B
O
'
 
=
>
 
'
B
o
l
i
v
i
a
'
,
 
'
B
R
'
 
=
>
 
'
B
r
a
z
i
l
'
,
 
'
B
S
'
 
=
>
 
'
B
a
h
a
m
a
s
'
,
 
'
B
T
'
 
=
>
 
'
B
h
u
t
a
n
'
,
 
'
B
V
'
 
=
>
 
'
B
o
u
v
e
t
 
I
s
.
'
,
 
'
B
W
'
 
=
>
 
'
B
o
t
s
w
a
n
a
'
,
 
'
B
Y
'
 
=
>
 
'
B
e
l
a
r
u
s
'
,
 
'
B
Z
'
 
=
>
 
'
B
e
l
i
z
e
'
,
 
'
C
A
'
 
=
>
 
'
C
a
n
a
d
a
'
,
 
'
C
C
'
 
=
>
 
'
C
o
c
o
s
 
 
I
s
.
'
,
 
'
C
D
'
 
=
>
 
'
C
o
n
g
o
 
D
.
 
R
.
'
,
 
'
C
F
'
 
=
>
 
'
C
e
n
t
r
a
l
 
A
f
.
 
R
.
'
,
 
'
C
G
'
 
=
>
 
'
C
o
n
g
o
'
,
 
'
C
H
'
 
=
>
 
'
S
w
i
t
z
e
r
l
a
n
d
'
,
 
'
C
I
'
 
=
>
 
"
C
o
t
e
 
D
'
I
v
o
i
r
e
"
,
 
'
C
K
'
 
=
>
 
'
C
o
o
k
 
I
s
.
'
,
 
'
C
L
'
 
=
>
 
'
C
h
i
l
e
'
,
 
'
C
M
'
 
=
>
 
'
C
a
m
e
r
o
o
n
'
,
 
'
C
N
'
 
=
>
 
'
C
h
i
n
a
'
,
 
'
C
O
'
 
=
>
 
'
C
o
l
o
m
b
i
a
'
,
 
'
C
R
'
 
=
>
 
'
C
o
s
t
a
 
R
i
c
a
'
,
 
'
C
U
'
 
=
>
 
'
C
u
b
a
'
,
 
'
C
V
'
 
=
>
 
'
C
a
p
e
 
V
e
r
d
e
'
,
 
'
C
X
'
 
=
>
 
'
C
h
r
i
s
t
m
a
s
 
I
s
.
'
,
 
'
C
Y
'
 
=
>
 
'
C
y
p
r
u
s
'
,
 
'
C
Z
'
 
=
>
 
'
C
z
e
c
h
 
R
.
u
b
l
i
c
'
,
 
'
D
E
'
 
=
>
 
'
G
e
r
m
a
n
y
'
,
 
'
D
J
'
 
=
>
 
'
D
j
i
b
o
u
t
i
'
,
 
'
D
K
'
 
=
>
 
'
D
e
n
m
a
r
k
'
,
 
'
D
M
'
 
=
>
 
'
D
o
m
i
n
i
c
a
'
,
 
'
D
O
'
 
=
>
 
'
D
o
m
i
n
i
c
a
n
 
R
.
'
,
 
'
D
Z
'
 
=
>
 
'
A
l
g
e
r
i
a
'
,
 
'
E
C
'
 
=
>
 
'
E
c
u
a
d
o
r
'
,
 
'
E
E
'
 
=
>
 
'
E
s
t
o
n
i
a
'
,
 
'
E
G
'
 
=
>
 
'
E
g
y
p
t
'
,
 
'
E
H
'
 
=
>
 
'
W
.
 
S
a
h
a
r
a
'
,
 
'
E
R
'
 
=
>
 
'
E
r
i
t
r
e
a
'
,
 
'
E
S
'
 
=
>
 
'
S
p
a
i
n
'
,
 
'
E
T
'
 
=
>
 
'
E
t
h
i
o
p
i
a
'
,
 
'
F
I
'
 
=
>
 
'
F
i
n
l
a
n
d
'
,
 
'
F
J
'
 
=
>
 
'
F
i
j
i
'
,
 
'
F
K
'
 
=
>
 
'
F
a
l
k
l
a
n
d
 
I
s
.
'
,
 
'
F
M
'
 
=
>
 
'
M
i
c
r
o
n
e
s
i
a
'
,
 
'
F
O
'
 
=
>
 
'
F
a
r
o
e
 
I
s
.
'
,
 
'
F
R
'
 
=
>
 
'
F
r
a
n
c
e
'
,
 
'
F
X
'
 
=
>
 
'
F
r
a
n
c
e
,
 
M
e
t
r
o
.
'
,
 
'
G
A
'
 
=
>
 
'
G
a
b
o
n
'
,
 
'
G
B
'
 
=
>
 
'
U
n
i
t
e
d
 
K
i
n
g
d
o
m
'
,
 
'
G
D
'
 
=
>
 
'
G
r
e
n
a
d
a
'
,
 
'
G
E
'
 
=
>
 
'
G
e
o
r
g
i
a
'
,
 
'
G
F
'
 
=
>
 
'
F
r
.
 
G
u
i
a
n
a
'
,
 
'
G
H
'
 
=
>
 
'
G
h
a
n
a
'
,
 
'
G
I
'
 
=
>
 
'
G
i
b
r
a
l
t
a
r
'
,
 
'
G
L
'
 
=
>
 
'
G
r
e
e
n
l
a
n
d
'
,
 
'
G
M
'
 
=
>
 
'
G
a
m
b
i
a
'
,
 
'
G
N
'
 
=
>
 
'
G
u
i
n
e
a
'
,
 
'
G
P
'
 
=
>
 
'
G
u
a
d
e
l
o
u
p
e
'
,
 
'
G
Q
'
 
=
>
 
'
E
q
.
 
G
u
i
n
e
a
'
,
 
'
G
R
'
 
=
>
 
'
G
r
e
e
c
e
'
,
 
'
G
S
'
 
=
>
 
'
S
.
 
G
e
o
r
g
i
a
'
,
 
'
G
T
'
 
=
>
 
'
G
u
a
t
e
m
a
l
a
'
,
 
'
G
U
'
 
=
>
 
'
G
u
a
m
'
,
 
'
G
W
'
 
=
>
 
'
G
u
i
n
e
a
-
B
i
s
s
a
u
'
,
 
'
G
Y
'
 
=
>
 
'
G
u
y
a
n
a
'
,
 
'
H
K
'
 
=
>
 
'
H
o
n
g
 
K
o
n
g
'
,
 
'
H
M
'
 
=
>
 
'
H
e
a
r
d
 
I
s
.
'
,
 
'
H
N
'
 
=
>
 
'
H
o
n
d
u
r
a
s
'
,
 
'
H
R
'
 
=
>
 
'
C
r
o
a
t
i
a
'
,
 
'
H
T
'
 
=
>
 
'
H
a
i
t
i
'
,
 
'
H
U
'
 
=
>
 
'
H
u
n
g
a
r
y
'
,
 
'
I
D
'
 
=
>
 
'
I
n
d
o
n
e
s
i
a
'
,
 
'
I
E
'
 
=
>
 
'
I
r
e
l
a
n
d
'
,
 
'
I
L
'
 
=
>
 
'
I
s
r
a
e
l
'
,
 
'
I
N
'
 
=
>
 
'
I
n
d
i
a
'
,
 
'
I
O
'
 
=
>
 
'
B
.
 
I
n
d
.
 
O
c
.
 
T
r
.
'
,
 
'
I
Q
'
 
=
>
 
'
I
r
a
q
'
,
 
'
I
R
'
 
=
>
 
'
I
r
a
n
'
,
 
'
I
S
'
 
=
>
 
'
I
c
e
l
a
n
d
'
,
 
'
I
T
'
 
=
>
 
'
I
t
a
l
y
'
,
 
'
J
M
'
 
=
>
 
'
J
a
m
a
i
c
a
'
,
 
'
J
O
'
 
=
>
 
'
J
o
r
d
a
n
'
,
 
'
J
P
'
 
=
>
 
'
J
a
p
a
n
'
,
 
'
K
E
'
 
=
>
 
'
K
e
n
y
a
'
,
 
'
K
G
'
 
=
>
 
'
K
y
r
g
y
z
s
t
a
n
'
,
 
'
K
H
'
 
=
>
 
'
C
a
m
b
o
d
i
a
'
,
 
'
K
I
'
 
=
>
 
'
K
i
r
i
b
a
t
i
'
,
 
'
K
M
'
 
=
>
 
'
C
o
m
o
r
o
s
'
,
 
'
K
N
'
 
=
>
 
'
S
t
.
 
K
i
t
t
s
 
a
n
d
 
N
e
v
i
s
'
,
 
'
K
P
'
 
=
>
 
'
K
o
r
e
a
,
 
D
.
 
R
.
'
,
 
'
K
R
'
 
=
>
 
'
K
o
r
e
a
,
 
R
.
'
,
 
'
K
W
'
 
=
>
 
'
K
u
w
a
i
t
'
,
 
'
K
Y
'
 
=
>
 
'
C
a
y
m
a
n
 
I
s
.
'
,
 
'
K
Z
'
 
=
>
 
'
K
a
z
a
k
s
t
a
n
'
,
 
'
L
A
'
 
=
>
 
'
L
a
o
 
P
.
D
.
 
R
.
'
,
 
'
L
B
'
 
=
>
 
'
L
e
b
a
n
o
n
'
,
 
'
L
C
'
 
=
>
 
'
S
t
.
 
L
u
c
i
a
'
,
 
'
L
I
'
 
=
>
 
'
L
i
e
c
h
t
e
n
s
t
e
i
n
'
,
 
'
L
K
'
 
=
>
 
'
S
r
i
 
L
a
n
k
a
'
,
 
'
L
R
'
 
=
>
 
'
L
i
b
e
r
i
a
'
,
 
'
L
S
'
 
=
>
 
'
L
e
s
o
t
h
o
'
,
 
'
L
T
'
 
=
>
 
'
L
i
t
h
u
a
n
i
a
'
,
 
'
L
U
'
 
=
>
 
'
L
u
x
e
m
b
o
u
r
g
'
,
 
'
L
V
'
 
=
>
 
'
L
a
t
v
i
a
'
,
 
'
L
Y
'
 
=
>
 
'
L
i
b
y
a
n
 
A
.
 
J
.
'
,
 
'
M
A
'
 
=
>
 
'
M
o
r
o
c
c
o
'
,
 
'
M
C
'
 
=
>
 
'
M
o
n
a
c
o
'
,
 
'
M
D
'
 
=
>
 
'
M
o
l
d
o
v
a
'
,
 
'
M
G
'
 
=
>
 
'
M
a
d
a
g
a
s
c
a
r
'
,
 
'
M
H
'
 
=
>
 
'
M
a
r
s
h
a
l
l
 
I
s
.
'
,
 
'
M
K
'
 
=
>
 
'
M
a
c
e
d
o
n
i
a
'
,
 
'
M
L
'
 
=
>
 
'
M
a
l
i
'
,
 
'
M
M
'
 
=
>
 
'
M
y
a
n
m
a
r
'
,
 
'
M
N
'
 
=
>
 
'
M
o
n
g
o
l
i
a
'
,
 
'
M
O
'
 
=
>
 
'
M
a
c
a
u
'
,
 
'
M
P
'
 
=
>
 
'
N
.
 
M
a
r
i
a
n
a
 
I
s
.
'
,
 
'
M
Q
'
 
=
>
 
'
M
a
r
t
i
n
i
q
u
e
'
,
 
'
M
R
'
 
=
>
 
'
M
a
u
r
i
t
a
n
i
a
'
,
 
'
M
S
'
 
=
>
 
'
M
o
n
t
s
e
r
r
a
t
'
,
 
'
M
T
'
 
=
>
 
'
M
a
l
t
a
'
,
 
'
M
U
'
 
=
>
 
'
M
a
u
r
i
t
i
u
s
'
,
 
'
M
V
'
 
=
>
 
'
M
a
l
d
i
v
e
s
'
,
 
'
M
W
'
 
=
>
 
'
M
a
l
a
w
i
'
,
 
'
M
X
'
 
=
>
 
'
M
e
x
i
c
o
'
,
 
'
M
Y
'
 
=
>
 
'
M
a
l
a
y
s
i
a
'
,
 
'
M
Z
'
 
=
>
 
'
M
o
z
a
m
b
i
q
u
e
'
,
 
'
N
A
'
 
=
>
 
'
N
a
m
i
b
i
a
'
,
 
'
N
C
'
 
=
>
 
'
N
e
w
 
C
a
l
e
d
o
n
i
a
'
,
 
'
N
E
'
 
=
>
 
'
N
i
g
e
r
'
,
 
'
N
F
'
 
=
>
 
'
N
o
r
f
o
l
k
 
I
s
.
'
,
 
'
N
G
'
 
=
>
 
'
N
i
g
e
r
i
a
'
,
 
'
N
I
'
 
=
>
 
'
N
i
c
a
r
a
g
u
a
'
,
 
'
N
L
'
 
=
>
 
'
N
e
t
h
e
r
l
a
n
d
s
'
,
 
'
N
O
'
 
=
>
 
'
N
o
r
w
a
y
'
,
 
'
N
P
'
 
=
>
 
'
N
e
p
a
l
'
,
 
'
N
R
'
 
=
>
 
'
N
a
u
r
u
'
,
 
'
N
U
'
 
=
>
 
'
N
i
u
e
'
,
 
'
N
Z
'
 
=
>
 
'
N
e
w
 
Z
e
a
l
a
n
d
'
,
 
'
O
M
'
 
=
>
 
'
O
m
a
n
'
,
 
'
P
A
'
 
=
>
 
'
P
a
n
a
m
a
'
,
 
'
P
E
'
 
=
>
 
'
P
e
r
u
'
,
 
'
P
F
'
 
=
>
 
'
F
r
.
 
P
o
l
y
n
e
s
i
a
'
,
 
'
P
G
'
 
=
>
 
'
P
a
p
.
 
N
.
 
G
u
i
n
e
a
'
,
 
'
P
H
'
 
=
>
 
'
P
h
i
l
i
p
p
i
n
e
s
'
,
 
'
P
K
'
 
=
>
 
'
P
a
k
i
s
t
a
n
'
,
 
'
P
L
'
 
=
>
 
'
P
o
l
a
n
d
'
,
 
'
P
M
'
 
=
>
 
'
S
t
.
 
P
i
e
r
r
e
'
,
 
'
P
N
'
 
=
>
 
'
P
i
t
c
a
i
r
n
'
,
 
'
P
R
'
 
=
>
 
'
P
u
e
r
t
o
 
R
i
c
o
'
,
 
'
P
S
'
 
=
>
 
'
P
a
l
e
s
t
i
n
i
a
n
 
T
r
.
'
,
 
'
P
T
'
 
=
>
 
'
P
o
r
t
u
g
a
l
'
,
 
'
P
W
'
 
=
>
 
'
P
a
l
a
u
'
,
 
'
P
Y
'
 
=
>
 
'
P
a
r
a
g
u
a
y
'
,
 
'
Q
A
'
 
=
>
 
'
Q
a
t
a
r
'
,
 
'
R
E
'
 
=
>
 
'
R
e
u
n
i
o
n
'
,
 
'
R
O
'
 
=
>
 
'
R
o
m
a
n
i
a
'
,
 
'
R
U
'
 
=
>
 
'
R
u
s
s
i
a
n
 
F
e
d
.
'
,
 
'
R
W
'
 
=
>
 
'
R
w
a
n
d
a
'
,
 
'
S
A
'
 
=
>
 
'
S
a
u
d
i
 
A
r
a
b
i
a
'
,
 
'
S
B
'
 
=
>
 
'
S
o
l
o
m
o
n
 
I
s
.
'
,
 
'
S
C
'
 
=
>
 
'
S
e
y
c
h
e
l
l
e
s
'
,
 
'
S
D
'
 
=
>
 
'
S
u
d
a
n
'
,
 
'
S
E
'
 
=
>
 
'
S
w
e
d
e
n
'
,
 
'
S
G
'
 
=
>
 
'
S
i
n
g
a
p
o
r
e
'
,
 
'
S
H
'
 
=
>
 
'
S
t
.
 
H
e
l
e
n
a
'
,
 
'
S
I
'
 
=
>
 
'
S
l
o
v
e
n
i
a
'
,
 
'
S
J
'
 
=
>
 
'
S
v
a
l
b
a
r
d
 
J
M
'
,
 
'
S
K
'
 
=
>
 
'
S
l
o
v
a
k
i
a
'
,
 
'
S
L
'
 
=
>
 
'
S
i
e
r
r
a
 
L
e
o
n
e
'
,
 
'
S
M
'
 
=
>
 
'
S
a
n
 
M
a
r
i
n
o
'
,
 
'
S
N
'
 
=
>
 
'
S
e
n
e
g
a
l
'
,
 
'
S
O
'
 
=
>
 
'
S
o
m
a
l
i
a
'
,
 
'
S
R
'
 
=
>
 
'
S
u
r
i
n
a
m
e
'
,
 
'
S
T
'
 
=
>
 
'
S
a
o
 
T
o
m
e
'
,
 
'
S
V
'
 
=
>
 
'
E
l
 
S
a
l
v
a
d
o
r
'
,
 
'
S
Y
'
 
=
>
 
'
S
y
r
i
a
'
,
 
'
S
Z
'
 
=
>
 
'
S
w
a
z
i
l
a
n
d
'
,
 
'
T
C
'
 
=
>
 
'
T
u
r
k
s
 
C
a
i
c
o
s
 
I
s
.
'
,
 
'
T
D
'
 
=
>
 
'
C
h
a
d
'
,
 
'
T
F
'
 
=
>
 
'
F
r
.
 
S
.
 
T
r
.
'
,
 
'
T
G
'
 
=
>
 
'
T
o
g
o
'
,
 
'
T
H
'
 
=
>
 
'
T
h
a
i
l
a
n
d
'
,
 
'
T
J
'
 
=
>
 
'
T
a
j
i
k
i
s
t
a
n
'
,
 
'
T
K
'
 
=
>
 
'
T
o
k
e
l
a
u
'
,
 
'
T
M
'
 
=
>
 
'
T
u
r
k
m
e
n
i
s
t
a
n
'
,
 
'
T
N
'
 
=
>
 
'
T
u
n
i
s
i
a
'
,
 
'
T
O
'
 
=
>
 
'
T
o
n
g
a
'
,
 
'
T
P
'
 
=
>
 
'
E
a
s
t
 
T
i
m
o
r
'
,
 
'
T
R
'
 
=
>
 
'
T
u
r
k
e
y
'
,
 
'
T
T
'
 
=
>
 
'
T
r
i
n
i
d
a
d
 
T
o
b
.
'
,
 
'
T
V
'
 
=
>
 
'
T
u
v
a
l
u
'
,
 
'
T
W
'
 
=
>
 
'
T
a
i
w
a
n
'
,
 
'
T
Z
'
 
=
>
 
'
T
a
n
z
a
n
i
a
'
,
 
'
U
A
'
 
=
>
 
'
U
k
r
a
i
n
e
'
,
 
'
U
G
'
 
=
>
 
'
U
g
a
n
d
a
'
,
 
'
U
M
'
 
=
>
 
'
U
.
 
S
t
a
t
e
s
 
O
u
t
.
 
I
s
.
'
,
 
'
U
S
'
 
=
>
 
'
U
n
i
t
e
d
 
S
t
a
t
e
s
'
,
 
'
U
Y
'
 
=
>
 
'
U
r
u
g
u
a
y
'
,
 
'
U
Z
'
 
=
>
 
'
U
z
b
e
k
i
s
t
a
n
'
,
 
'
V
A
'
 
=
>
 
'
V
a
t
i
c
a
n
 
C
i
t
y
'
,
 
'
V
C
'
 
=
>
 
'
S
t
.
 
V
i
n
c
e
n
t
'
,
 
'
V
E
'
 
=
>
 
'
V
e
n
e
z
u
e
l
a
'
,
 
'
V
G
'
 
=
>
 
'
V
i
r
g
i
n
 
I
s
.
,
 
B
r
i
t
i
s
h
'
,
 
'
V
I
'
 
=
>
 
'
V
i
r
g
i
n
 
I
s
.
,
 
U
.
S
.
'
,
 
'
V
N
'
 
=
>
 
'
V
i
e
t
n
a
m
'
,
 
'
V
U
'
 
=
>
 
'
V
a
n
u
a
t
u
'
,
 
'
W
F
'
 
=
>
 
'
W
a
l
l
i
s
'
,
 
'
W
S
'
 
=
>
 
'
S
a
m
o
a
'
,
 
'
Y
E
'
 
=
>
 
'
Y
e
m
e
n
'
,
 
'
Y
T
'
 
=
>
 
'
M
a
y
o
t
t
e
'
,
 
'
Z
A
'
 
=
>
 
'
S
.
 
A
f
r
i
c
a
'
,
 
'
Z
M
'
 
=
>
 
'
Z
a
m
b
i
a
'
,
 
'
Z
R
'
 
=
>
 
'
Z
a
i
r
e
'
,
 
'
Z
W
'
 
=
>
 
'
Z
i
m
b
a
b
w
e
'
,
 
'
R
S
'
 
=
>
 
'
S
e
r
b
i
a
'
,
 
'
M
N
'
 
=
>
 
'
M
o
n
t
e
n
e
g
r
o
'
,
 
'
C
W
'
 
=
>
 
'
C
u
r
a
Ã
§
a
o
'
,
 
'
A
W
'
 
=
>
 
'
A
r
u
b
a
'
,
 
'
B
Q
'
 
=
>
 
'
B
o
n
a
i
r
e
,
 
S
i
n
t
 
E
u
s
t
a
t
i
u
s
 
a
n
d
 
S
a
b
a
'
,
 
)
;


 
 
 
 
i
f
 
(
$
t
r
a
n
s
l
a
t
e
)
 
{

 
 
 
 
 
 
 
 
$
n
e
w
_
a
r
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

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
c
o
u
n
t
r
y
C
o
d
e
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
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
a
r
r
[
 
$
k
e
y
 
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
C
O
U
N
T
R
Y
N
A
M
E
S
_
'
.
$
k
e
y
,
 
$
v
a
l
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
o
u
n
t
r
y
C
o
d
e
s
 
=
 
$
n
e
w
_
a
r
r
;

 
 
 
 
}


 
 
 
 
a
s
o
r
t
(
$
c
o
u
n
t
r
y
C
o
d
e
s
)
;


 
 
 
 
r
e
t
u
r
n
 
$
c
o
u
n
t
r
y
C
o
d
e
s
;

}


/
*
*

*

*
 
D
u
r
i
n
g
 
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
/
u
p
d
a
t
e
,
 
i
f
 
t
h
e
 
c
o
u
n
t
r
i
e
s
 
t
a
b
l
e
 
i
s
 
e
m
p
t
y
,
 
t
h
e
n
 
p
o
p
u
l
a
t
e
 
i
t
.
 

*
 

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
 
i
m
p
o
r
t
_
c
o
u
n
t
r
i
e
s
(
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
c
o
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
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
c
o
u
n
t
r
i
e
s
-
>
c
o
u
n
t
r
i
e
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
c
o
u
n
t
r
i
e
s
 

	
	
	
(
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
,
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
)
 

	
	
	
V
A
L
U
E
S
 

	
	
	
'
;


 
 
 
 
 
 
 
 
$
c
o
u
n
t
r
i
e
s
 
=
 
o
l
d
_
c
o
u
n
t
r
y
C
o
d
e
s
A
r
r
a
y
(
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
r
o
w
s
 
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
c
o
u
n
t
r
i
e
s
 
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
c
o
d
e
 
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
n
a
m
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
 
.
=
 
'
(
\
'
'
.
$
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
.
'
\
'
,
\
'
'
.
f
i
l
t
e
r
_
v
a
r
(
$
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
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
.
'
\
'
)
,
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
r
o
w
s
 
=
 
r
t
r
i
m
(
$
r
o
w
s
,
 
'
,
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
.
$
r
o
w
s
,
 
'
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
u
n
t
r
i
e
s
-
>
c
o
u
n
t
r
i
e
s
 
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
_
c
o
u
n
t
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
c
o
u
n
t
r
i
e
s
(
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

}


/
*
*

*

*
 
D
u
r
i
n
g
 
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
/
u
p
d
a
t
e
,
 
i
f
 
t
h
e
 
r
e
g
i
o
n
s
 
t
a
b
l
e
 
i
s
 
e
m
p
t
y
,
 
t
h
e
n
 
p
o
p
u
l
a
t
e
 
i
t
.
 

*
 

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
 
i
m
p
o
r
t
_
r
e
g
i
o
n
s
(
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
a
l
l
_
r
e
g
i
o
n
s
(
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
r
e
g
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
r
e
g
i
o
n
s
 

	
	
	
(
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
,
r
e
g
i
o
n
n
a
m
e
)
 

	
	
	
V
A
L
U
E
S
 

	
	
	
'
;


 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
s
 
=
 
r
e
g
i
o
n
N
a
m
e
s
A
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
$
r
o
w
s
 
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
r
e
g
i
o
n
s
 
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
c
o
d
e
 
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
c
o
u
n
t
r
y
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
 
.
=
 
'
(
\
'
'
.
$
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
.
'
\
'
,
\
'
'
.
f
i
l
t
e
r
_
v
a
r
(
$
r
e
g
i
o
n
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
.
'
\
'
)
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
r
o
w
s
 
=
 
r
t
r
i
m
(
$
r
o
w
s
,
 
'
,
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
.
$
r
o
w
s
,
 
'
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
r
e
g
i
o
n
s
-
>
r
e
g
i
o
n
s
 
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
a
l
l
_
r
e
g
i
o
n
s
(
)
;

	
	

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

}

